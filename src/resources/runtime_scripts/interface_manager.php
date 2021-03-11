<?php

    $user_interface_config = \DynamicalWeb\DynamicalWeb::getConfiguration("user_interface");

    if(defined("WEB_UI_DARK_MODE_ENABLED") == false)
    {
        define("WEB_UI_DARK_MODE_ENABLED", (bool)$user_interface_config["DARK_MODE_ENABLED"]);
    }

    /**
     * Detremines if dark mode is enabled or not
     *
     * @return bool
     */
    function darkModeEnabled(): bool
    {
        if(defined("WEB_UI_DARK_MODE_ENABLED"))
            return (bool)constant("WEB_UI_DARK_MODE_ENABLED");

        return true;
    }