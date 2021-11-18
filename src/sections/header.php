<?php
    use DynamicalWeb\HTML;
?>
<!-- Meta -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- App favicon -->
<link rel="shortcut icon" href="/assets/images/favicon.ico">

<!-- Bootstrap Css -->
<?php

    if(darkModeEnabled())
    {
        HTML::print("<link href=\"/assets/css/bootstrap-dark.css\" rel=\"stylesheet\" type=\"text/css\"/>", false);
        HTML::print("<link href=\"/assets/css/app-dark.css\" rel=\"stylesheet\" type=\"text/css\" />", false);
    }
    else
    {
        HTML::print("<link href=\"/assets/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\"/>", false);
        HTML::print("<link href=\"/assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\" />", false);
    }

?>

<!-- Icons Css -->
<link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />