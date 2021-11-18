<?PHP

    use DynamicalWeb\Actions;
    use DynamicalWeb\DynamicalWeb;
    use sws\sws;

    if(WEB_SESSION_ACTIVE == true)
    {
        /** @var sws $sws */
        $sws = DynamicalWeb::getMemoryObject('sws');
        $Cookie = $sws->WebManager()->getCookie('socialvoid_session');

        $Cookie->Data["session_active"] = false;
        $Cookie->Data["user_id"] = null;
        $Cookie->Data["user_public_id"] = null;
        $Cookie->Data["user_username"] = null;
        $Cookie->Data["user_username_safe"] = null;
        $Cookie->Data["session"] = null;
        $Cookie->Data["session_id"] = null;
        $Cookie->Data["session_public_id"] = null;
        $Cookie->Data["verification_required"] = false;
        $Cookie->Data["auto_logout"] = 0;

        $sws->CookieManager()->updateCookie($Cookie);
        $sws->WebManager()->disposeCookie('socialvoid_lib');
    }


    $GetParameters = $_GET;
    unset($GetParameters['callback']);
    Actions::redirect(DynamicalWeb::getRoute("authentication/login", $GetParameters));