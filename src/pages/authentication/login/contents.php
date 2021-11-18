<?php

    use DynamicalWeb\Actions;
    use DynamicalWeb\DynamicalWeb;
    use SocialvoidLib\Abstracts\SearchMethods\UserSearchMethod;
    use SocialvoidLib\InputTypes\SessionClient;
    use SocialvoidLib\InputTypes\SessionDevice;
    use SocialvoidLib\NetworkSession;
    use SocialvoidLib\SocialvoidLib;
    use sws\sws;

    $GetParameters = $_GET;
    unset($GetParameters['callback_login']);

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_GET["action"]) && $_GET["action"] == "authenticate")
    {
        try
        {
            // Define the important parts
            if(isset(DynamicalWeb::$globalObjects["socialvoid_lib"]) == false)
            {
                /** @var SocialvoidLib $SocialvoidLib */
                $SocialvoidLib = DynamicalWeb::setMemoryObject(
                    "socialvoid_lib", new SocialvoidLib()
                );
            }
            else
            {
                /** @var SocialvoidLib $SocialvoidLib */
                $SocialvoidLib = DynamicalWeb::getMemoryObject("socialvoid_lib");
            }

            /** @var sws $sws */
            $sws = DynamicalWeb::getMemoryObject("sws");
            $Cookie = $sws->WebManager()->getCookie("socialvoid_session");
            DynamicalWeb::setMemoryObject("(cookie)web_session", $Cookie);
        }
        catch(Exception $exception)
        {
            $GetParameters["callback_login"] = "101";
            $GetParameters["type"] = "internal";
            Actions::redirect(DynamicalWeb::getRoute("index", $GetParameters));
        }

        // Check if the password parameter is set
        if(isset($_POST["password"]) == false)
        {
            $GetParameters["callback_login"] = "100";
            Actions::redirect(DynamicalWeb::getRoute("index", $GetParameters));
        }

        try
        {
            try
            {
                // Get the user by the username if it exists
                $SocialvoidUser =  $SocialvoidLib->getUserManager()->getUser(UserSearchMethod::ByUsername, $_POST["username"]);
            }
            catch(Exception $e)
            {
                $GetParameters["callback_login"] = "102";
                Actions::redirect(DynamicalWeb::getRoute("index", $GetParameters));
            }

            // Attempt to do simple authentication
            // TODO: Refactor this code to authenticate with multiple authentication methods (2FA!!)
            try
            {
                /** @noinspection PhpUndefinedVariableInspection */
                $SocialvoidUser->simpleAuthentication($_POST["password"]);
            }
            catch(Exception $e)
            {
                $GetParameters["callback_login"] = "102";
                Actions::redirect(DynamicalWeb::getRoute("index", $GetParameters));
            }

            // Establish the network session
            $NetworkSession = new NetworkSession($SocialvoidLib); // Create network session

            // Define the device
            $Client = new SessionClient("Socialvoid Web", "1.0.0.0");
            $Device = new SessionDevice("Unknown", "Unknown", "Unknown");

            // Authenticate the user
            $NetworkSession->authenticateUser(
                $Client, $Device, $SocialvoidUser, $SocialvoidUser->AuthenticationMethod, "127.0.0.1"
            );

            /** @noinspection PhpUndefinedVariableInspection */
            $Cookie->Data["session_active"] = true;
            $Cookie->Data["user_id"] = $SocialvoidUser->ID;
            $Cookie->Data["user_public_id"] = $SocialvoidUser->PublicID;
            $Cookie->Data["user_username"] = $SocialvoidUser->Username;
            $Cookie->Data["user_username_safe"] = $SocialvoidUser->UsernameSafe;
            $Cookie->Data["session"] = $NetworkSession->dumpNetworkSession();
            $Cookie->Data["session_id"] = $NetworkSession->getActiveSession()->ID;
            $Cookie->Data["session_public_id"] = $NetworkSession->getActiveSession()->PublicID;
            $Cookie->Data["verification_required"] = false;
            $Cookie->Data["auto_logout"] = 0;

            /** @noinspection PhpUndefinedVariableInspection */
            $sws->CookieManager()->updateCookie($Cookie);

            Actions::redirect(DynamicalWeb::getRoute("index", $GetParameters));
        }
        catch(Exception $exception)
        {
            $GetParameters["callback_login"] = "101";
            Actions::redirect(DynamicalWeb::getRoute("index", $GetParameters));
        }
    }
    else
    {
        Actions::redirect(DynamicalWeb::getRoute("index"));
    }
