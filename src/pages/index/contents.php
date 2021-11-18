<?php
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">

    <head>
        <?PHP HTML::importSection("header"); ?>
        <title>Socialvoid</title>

    </head>

    <body data-topbar="colored" data-layout="horizontal">
        <div id="layout-wrapper">
            <?PHP HTML::importSection("navigation"); ?>

            <div class="main-content">

                <div class="page-content">

                    <div class="page-title-box pt-0 pb-5">
                    </div>

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <?PHP HTML::importScript("callbacks"); ?>
                            <div class="row">

                                <div class="col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5>Socialvoid</h5>
                                                    <p class="text-muted">Xoric Dashboard</p>

                                                    <div class="mt-4">
                                                        <a href="#" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="assets/images/widget-img.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">

                                    <!-- Text Post -->
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="https://accounts.intellivoid.net/user/contents/public/avatar?user_id=e7fb53bb52219fdae7d5ba0a78b87ad361f008d90f40688baf3b76a06f5add59a8023d3d7b96d478&resource=normal" alt="" height="46">
                                                <div class="media-body">
                                                    <h5 class="font-size-15 font-weight-bold mb-1" id="">
                                                        Zi Xing
                                                        <i class="mdi mdi-check-circle text-info"></i>

                                                        <span class="font-weight-light text-muted pl-1">@netkas</span>
                                                    </h5>
                                                    <span>Posted 5 minutes ago</span>
                                                </div>
                                                <div class="align-self-end ml-2 mb-auto">
                                                    <div class="btn-group mr-1 mt-1">
                                                        <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-20"></i>
                                                        </button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item text-white" href="#">Embed Post</a>
                                                            <a class="dropdown-item text-white" href="#">Copy link to Post</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-white" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="font-size-16 text-white mb-0">Hello World!</p>
                                        </div>
                                        <div class="card-footer text-muted bg-transparent border-top">
                                            <a href="#" class="card-link text-white">
                                                <i class="mdi mdi-comment"></i> 7
                                            </a>
                                            <a href="#" class="card-link text-white">
                                                <i class="mdi mdi-repeat"></i> 2
                                            </a>
                                            <a href="#" class="card-link text-white">
                                                <i class="mdi mdi-comment-quote"></i> 2
                                            </a>
                                            <a href="#" class="card-link text-danger">
                                                <i class="mdi mdi-heart"></i> 50
                                            </a>
                                        </div>
                                    </div>


                                    <!-- Photo Post -->
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="https://accounts.intellivoid.net/user/contents/public/avatar?user_id=e7fb53bb52219fdae7d5ba0a78b87ad361f008d90f40688baf3b76a06f5add59a8023d3d7b96d478&resource=normal" alt="" height="46">
                                                <div class="media-body">
                                                    <h5 class="font-size-15 font-weight-bold mb-1" id="">
                                                        Zi Xing
                                                        <i class="mdi mdi-check-circle text-info"></i>

                                                        <span class="font-weight-light text-muted pl-1">@netkas</span>
                                                    </h5>
                                                    <span>Posted 5 minutes ago</span>
                                                </div>
                                                <div class="align-self-end ml-2 mb-auto">
                                                    <div class="btn-group mr-1 mt-1">
                                                        <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-20"></i>
                                                        </button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item text-white" href="#">Embed Post</a>
                                                            <a class="dropdown-item text-white" href="#">Copy link to Post</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-white" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="font-size-16 text-white mb-0">Hello Netkas!</p>
                                        </div>
                                        <img class="img-fluid post-image rounded" src="https://api.telegram.org/file/bot1204353955:AAF5onK1sP8W_X5iA_A1d9THccismKNcU38/photos/file_2.jpg" height="126" alt="Card image cap">
                                        <div class="card-footer text-muted bg-transparent border-top">
                                            <a href="#" class="card-link text-white">
                                                <i class="mdi mdi-comment"></i> 7
                                            </a>
                                            <a href="#" class="card-link text-white">
                                                <i class="mdi mdi-repeat"></i> 2
                                            </a>
                                            <a href="#" class="card-link text-white">
                                                <i class="mdi mdi-comment-quote"></i> 2
                                            </a>
                                            <a href="#" class="card-link text-danger">
                                                <i class="mdi mdi-heart"></i> 50
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Link Preview -->
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="https://accounts.intellivoid.net/user/contents/public/avatar?user_id=e7fb53bb52219fdae7d5ba0a78b87ad361f008d90f40688baf3b76a06f5add59a8023d3d7b96d478&resource=normal" alt="" height="46">
                                                <div class="media-body">
                                                    <h5 class="font-size-15 font-weight-bold mb-1" id="">
                                                        Zi Xing
                                                        <i class="mdi mdi-check-circle text-info"></i>

                                                        <span class="font-weight-light text-muted pl-1">@netkas</span>
                                                    </h5>
                                                    <span>Posted 5 minutes ago</span>
                                                </div>
                                                <div class="align-self-end ml-2 mb-auto">
                                                    <div class="btn-group mr-1 mt-1">
                                                        <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-20"></i>
                                                        </button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item text-white" href="#">Embed Post</a>
                                                            <a class="dropdown-item text-white" href="#">Copy link to Post</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-white" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="font-size-16 text-white mb-0">Hello World!</p>

                                            <div class="card mb-0 mt-2">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-md-5">
                                                        <img src="https://intellivoid.net/assets/media/banner.jpg" class="card-img" alt="...">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Intellivoid</h5>
                                                            <p class="card-text">Software & Services for consumers and businesses</p>
                                                            <p class="card-text">
                                                                <small class="text-muted">
                                                                    <i class="mdi mdi-link-variant "></i> intellivoid.net
                                                                </small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted bg-transparent border-top">
                                            <a href="#" class="card-link text-white">
                                                <i class="mdi mdi-comment"></i> 7
                                            </a>
                                            <a href="#" class="card-link text-white">
                                                <i class="mdi mdi-repeat"></i> 2
                                            </a>
                                            <a href="#" class="card-link text-white">
                                                <i class="mdi mdi-comment-quote"></i> 2
                                            </a>
                                            <a href="#" class="card-link text-danger">
                                                <i class="mdi mdi-heart"></i> 50
                                            </a>
                                        </div>
                                    </div>


                                    <!-- Quote -->
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="https://accounts.intellivoid.net/user/contents/public/avatar?user_id=e7fb53bb52219fdae7d5ba0a78b87ad361f008d90f40688baf3b76a06f5add59a8023d3d7b96d478&resource=normal" alt="" height="46">
                                                <div class="media-body">
                                                    <h5 class="font-size-15 font-weight-bold mb-1" id="">
                                                        Zi Xing
                                                        <i class="mdi mdi-check-circle text-info"></i>

                                                        <span class="font-weight-light text-muted pl-1">@netkas</span>
                                                    </h5>
                                                    <span>Posted 5 minutes ago</span>
                                                </div>
                                                <div class="align-self-end ml-2 mb-auto">
                                                    <div class="btn-group mr-1 mt-1">
                                                        <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-20"></i>
                                                        </button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item text-white" href="#">Embed Post</a>
                                                            <a class="dropdown-item text-white" href="#">Copy link to Post</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-white" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="font-size-16 text-white mb-0">Hello World!</p>

                                            <div class="card">
                                                <div class="card-body pb-2">
                                                    <div class="media">
                                                        <img class="d-flex mr-1 rounded-circle" src="https://accounts.intellivoid.net/user/contents/public/avatar?user_id=e7fb53bb52219fdae7d5ba0a78b87ad361f008d90f40688baf3b76a06f5add59a8023d3d7b96d478&resource=normal" alt="" height="20">
                                                        <div class="media-body">
                                                            <h5 class="font-size-14 font-weight-bold mb-1" id="">
                                                                Zi Xing
                                                                <i class="mdi mdi-check-circle text-info"></i>
                                                                <span class="font-weight-light text-muted pl-1">@netkas</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <p class="font-size-16 text-white mb-0">Hello World!</p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="card-footer text-muted bg-transparent border-top">
                                            <a href="#" class="card-link text-white">
                                                <i class="mdi mdi-comment"></i> 7
                                            </a>
                                            <a href="#" class="card-link text-white">
                                                <i class="mdi mdi-repeat"></i> 2
                                            </a>
                                            <a href="#" class="card-link text-white">
                                                <i class="mdi mdi-comment-quote"></i> 2
                                            </a>
                                            <a href="#" class="card-link text-danger">
                                                <i class="mdi mdi-heart"></i> 50
                                            </a>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-body">
                                            <p class="font-size-16 text-muted text-center mb-0">Loading more...</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xl-3">
                                    <?PHP
                                        if(WEB_SESSION_ACTIVE == false)
                                        {
                                            ?>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="text-center">Welcome to Socialvoid</h5>
                                                    <p class="text-muted text-center">A new social network that powers free speech for anyone who has Internet Access</p>

                                                    <div class="mt-4">
                                                        <a href="#" class="btn btn-outline-info btn-block btn-rounded waves-effect waves-light">Login</a>
                                                        <a href="#" class="btn btn-info btn-block btn-rounded waves-effect waves-light">Signup</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?PHP
                                        }
                                    ?>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <?PHP HTML::importSection("footer"); ?>
            </div>
        </div>
        <?PHP HTML::importSection("right_sidebar"); ?>
        <?PHP HTML::importSection("javascript"); ?>
    </body>
</html>