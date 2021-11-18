<?php

    use DynamicalWeb\DynamicalWeb;
use DynamicalWeb\HTML;

?>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-right">

                <!-- Search -->
                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- User -->
                <div class="dropdown d-inline-block">
                    <?PHP
                        if(WEB_SESSION_ACTIVE)
                        {
                            $img_parameters = array("id" => WEB_USER_PUBLIC_ID, "resource" => "normal");
                            if(isset($_GET["cache_refresh"]))
                            {
                                if($_GET["cache_refresh"] == "true")
                                {
                                    $img_parameters = array("id" => WEB_USER_PUBLIC_ID, "resource" => "normal", 'cache_refresh' => hash('sha256', time() . 'CACHE'));
                                }
                            }

                            ?>
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?PHP DynamicalWeb::getRoute("user/avatar", $img_parameters, true) ?>" alt="<?PHP HTML::print(WEB_USER_USERNAME); ?>">
                                <span class="d-none d-sm-inline-block ml-1"><?PHP HTML::print("@" . WEB_USER_USERNAME); ?></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Billing</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                            </div>
                            <?PHP
                        }
                        else
                        {
                            ?>
                                <div class="d-inline-block mr-1">
                                    <a href="<?PHP DynamicalWeb::getRoute("authentication/login", [], true); ?>" class="btn btn-primary btn-lg btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".authentication-login-dialog">Login</a>
                                </div>
                                <div class="d-inline-block">
                                    <a href="#" class="btn btn-secondary btn-lg btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".authentication-register-dialog">Signup</a>
                                </div>
                            <?PHP
                        }
                    ?>


                </div>
            </div>

            <!-- LOGO -->
            <div class="navbar-brand-box pr-0">
                <a href="<?PHP DynamicalWeb::getRoute("index", [], true); ?>">
                    <h4 class="logo font-weight-light mb-0">
                        <img src="/app_assets/images/logo-light.svg" class="pr-1 pb-1" alt="" height="32">
                        SOCIALVOID
                    </h4>
                </a>

            </div>
        </div>
    </div>
</header>
<?php
    if(WEB_SESSION_ACTIVE == false)
    {
        HTML::importSection("auth_login");
        HTML::importSection("auth_register");
    }
?>
