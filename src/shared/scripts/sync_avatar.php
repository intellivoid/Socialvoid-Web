<?php

    use DynamicalWeb\DynamicalWeb;
    use DynamicalWeb\Runtime;
    use SocialvoidLib\SocialvoidLib;

    Runtime::import('IntellivoidAccounts');

    if(defined('WEB_ACCOUNT_PUBID'))
    {
        if(WEB_ACCOUNT_PUBID !== null)
        {
            sync_avatar();
        }
    }

    function sync_avatar()
    {
        // Define the important parts
        if(isset(DynamicalWeb::$globalObjects["socialvoid_lib"]) == false)
        {
            /** @var SocialvoidLib $SocialvoidLib */
            $SocialvoidLib = DynamicalWeb::setMemoryObject(
                "socialvoid_lib", new SocialvoidLib()
            );
        }
        else
        {
            /** @var SocialvoidLib $SocialvoidLib */
            $SocialvoidLib = DynamicalWeb::getMemoryObject("socialvoid_lib");
        }

        if($SocialvoidLib->getUserDisplayPictureManager()->getProfilePictureManager()->avatar_exists(WEB_USER_PUBLIC_ID) == false)
        {
            $SocialvoidLib->getUserDisplayPictureManager()->getProfilePictureManager()->generate_avatar(WEB_USER_PUBLIC_ID);
        }
    }