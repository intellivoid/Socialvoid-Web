<script src="/assets/libs/jquery/jquery.min.js"></script>
<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/assets/libs/node-waves/waves.min.js"></script>
<script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>
<script src="/assets/js/app.js"></script>
<?php
    if(WEB_SESSION_ACTIVE == false)
    {
        \DynamicalWeb\Javascript::importScript("nodisable");
    }
?>