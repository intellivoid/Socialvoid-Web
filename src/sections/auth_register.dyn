<?php
    use DynamicalWeb\DynamicalWeb;
?>
<div class="modal fade authentication-register-dialog" tabindex="-1" role="dialog" aria-labelledby="auth-login-label" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">
                        <i class="mdi mdi-close"></i>
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="<?PHP DynamicalWeb::getRoute("authentication/login", ["action" => "register"], true); ?>">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-custom mb-4">
                                <div class="input-group mt-3 mt-sm-0 mr-sm-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="" autocomplete="off" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group form-group-custom mb-4">
                                <input type="password" class="form-control" id="password" name="password" required="" autocomplete="off" disabled="disabled">
                                <label for="password">Password</label>
                            </div>

                            <div class="form-group form-group-custom mb-4">
                                <input type="password" class="form-control" id="repeat_password" name="repeat_password" required="" autocomplete="off" disabled="disabled">
                                <label for="password">Repeat Password</label>
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-light btn-block waves-effect waves-light" type="submit">
                                    <img src="https://accounts.intellivoid.net/assets/favicon/android-chrome-256x256.png" alt="Intellivoid Accounts Logo" class="pr-1" height="26"/> Login using Intellivoid Accounts
                                </button>
                            </div>

                            <div class="border my-3"></div>

                            <div class="mt-2 mt-mb-0 text-center">
                                <a href="#" class="text-muted pr-3">Privacy Policy</a>
                                <a href="#" class="text-muted">Terms of Service</a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>