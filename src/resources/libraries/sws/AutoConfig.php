<?php

    use acm\acm;
    use acm\Objects\Schema;

    if(class_exists('acm\acm') == false)
    {
        include_once(__DIR__ . DIRECTORY_SEPARATOR . "acm" . DIRECTORY_SEPARATOR . "acm.php");
    }

    $acm = new acm(__DIR__, "Socialvoid Web");

    $DatabaseSchema = new Schema();
    $DatabaseSchema->setDefinition("Host", "127.0.0.1");
    $DatabaseSchema->setDefinition("Port", "3306");
    $DatabaseSchema->setDefinition("Username", "admin");
    $DatabaseSchema->setDefinition("Password", "admin");
    $DatabaseSchema->setDefinition("Name", "socialvoid");
    $acm->defineSchema("Database", $DatabaseSchema);