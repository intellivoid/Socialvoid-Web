<?php

    use DynamicalWeb\HTML;


    if(isset($_GET['callback_login']))
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        HTML::importScript('render_alert');

        switch((int)$_GET["callback_login"])
        {
            case 100:
                /** @noinspection PhpUndefinedConstantInspection */
                RenderAlert(TEXT_CALLBACK_LOGIN_100, "danger", "mdi-alert-circle");
                break;

            case 101:
                /** @noinspection PhpUndefinedConstantInspection */
                RenderAlert(TEXT_CALLBACK_LOGIN_101, "danger", "mdi-alert-circle");
                break;

            case 102:
                /** @noinspection PhpUndefinedConstantInspection */
                RenderAlert(TEXT_CALLBACK_LOGIN_102, "danger", "mdi-alert-circle");
                break;

            case 103:
                /** @noinspection PhpUndefinedConstantInspection */
                RenderAlert(TEXT_CALLBACK_LOGIN_103, "danger", "mdi-alert-circle");
                break;

            case 104:
                /** @noinspection PhpUndefinedConstantInspection */
                RenderAlert(TEXT_CALLBACK_LOGIN_104, "success", "mdi-check-circle");
                break;

            case 105:
                /** @noinspection PhpUndefinedConstantInspection */
                RenderAlert(TEXT_CALLBACK_LOGIN_105, "warning", "mdi-alert");
                break;

            case 106:
                /** @noinspection PhpUndefinedConstantInspection */
                RenderAlert(TEXT_CALLBACK_LOGIN_106, "warning", "mdi-alert");
                break;

            case 107:
                /** @noinspection PhpUndefinedConstantInspection */
                RenderAlert(TEXT_CALLBACK_LOGIN_107, "danger", "mdi-alert-circle");
                break;
        }
    }