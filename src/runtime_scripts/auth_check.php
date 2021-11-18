<?php

    use DynamicalWeb\Actions;
    use DynamicalWeb\DynamicalWeb;
    use DynamicalWeb\HTML;
    use DynamicalWeb\Page;
    use DynamicalWeb\Runtime;
    use sws\sws;

    Runtime::import('SecuredWebSessions');

    // Pages that are pre-defined for user authentication access
    $public_pages = [
        "index",
    ];

    $password_recovery_pages = [];

    $unauthorized_pages = [
        "authentication/login",
        "authentication/register"
    ];

    $verification_pages = [
        "authentication/verification/verify",
        "authentication/verification/verify_mobile",
        "authentication/verification/verify_telegram",
        "authentication/verification/verify_recovery_code",
        "authentication/telegram/telegram_poll",
        "authentication/logout"
    ];

    execute_authentication_check($unauthorized_pages, $verification_pages, $password_recovery_pages);


    /**
     * Determine if the user should authenticate or not
     *
     * @param array $unauthorized_pages
     * @param array $verification_pages
     * @param array $password_recovery_pages
     * @throws Exception
     */
    function execute_authentication_check(array $unauthorized_pages, array $verification_pages, array $password_recovery_pages)
    {
        $GetParameters = $_GET;
        unset($GetParameters['callback']);

        /** @var sws $sws */
        $sws = DynamicalWeb::setMemoryObject('sws', new sws());

        if($sws->WebManager()->isCookieValid('socialvoid_session') == false)
        {

            $Cookie = $sws->CookieManager()->newCookie('socialvoid_session', 5656005, false);

            $Cookie->Data = array(
                "session_active" => false,
                "user_id" => null,
                "user_public_id" => null,
                "user_username" => null,
                "user_username_safe" => null,
                "session" => null,
                "session_id" => false,
                "session_public_id" => 0,
                "verification_required" => false,
                "auto_logout" => 0,
                "verification_attempts" => 0,
                "host_cache_ip" => null,
                "host_cache_ua" => null,
                "cache" => array(),
                "cache_refresh" => 0
            );

            $sws->CookieManager()->updateCookie($Cookie);
            $sws->WebManager()->setCookie($Cookie);

            if($Cookie->Name == null)
            {
                print("There was an issue with the security check, please refresh the page");
                exit();
            }

            define("TMP_COOKIE_TOKEN", $Cookie->Token);
        }

        try
        {
            $Cookie = $sws->WebManager()->getCookie('socialvoid_session');
        }
        catch(Exception $exception)
        {
            if(defined("TMP_COOKIE_TOKEN") == false)
            {
                Page::staticResponse(
                    "Socialvoid Error",
                    "Web Sessions Issue",
                    "There was an issue with your Web Session, try clearing your cookies and try again"
                );

                exit();
            }

            $Cookie = $sws->CookieManager()->getCookie("socialvoid_session", TMP_COOKIE_TOKEN);

        }

        DynamicalWeb::setMemoryObject('(cookie)web_session', $Cookie);

        define("WEB_SESSION_ACTIVE", $Cookie->Data["session_active"]);
        define("WEB_USER_ID", $Cookie->Data["user_id"]);
        define("WEB_USER_PUBLIC_ID", $Cookie->Data["user_public_id"]);
        define("WEB_USER_USERNAME", $Cookie->Data["user_username"]);
        define("WEB_USER_USERNAME_SAFE", $Cookie->Data["user_username_safe"]);
        define("WEB_SESSION_ID", $Cookie->Data["session_id"]);
        define("WEB_SESSION_PUBLIC_ID", $Cookie->Data["session_public_id"]);
        define("WEB_VERIFICATION_REQUIRED", $Cookie->Data["verification_required"]);
        define("WEB_AUTO_LOGOUT", $Cookie->Data["auto_logout"]);
        define("WEB_VERIFICATION_ATTEMPTS", $Cookie->Data["verification_attempts"]);

    }

