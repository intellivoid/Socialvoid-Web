<?PHP

    use DynamicalWeb\DynamicalWeb;
    use DynamicalWeb\Runtime;
    use SocialvoidLib\Abstracts\SearchMethods\UserSearchMethod;
    use SocialvoidLib\Exceptions\Standard\Network\PeerNotFoundException;
    use SocialvoidLib\SocialvoidLib;

    //Runtime::import('SocialvoidLib');


    if(isset($_GET["id"]) == false)
    {
        $Response = array(
            "status" => false,
            "response_code" => 400,
            "message" => "Missing GET parameter 'id'"
        );
        header('Content-Type: application/json');
        http_response_code(400);
        print(json_encode($Response));
        exit();
    }

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

    try
    {
        $User = $SocialvoidLib->getUserManager()->getUser(UserSearchMethod::ByPublicId, $_GET["id"]);
    }
    catch(PeerNotFoundException $peerNotFoundException)
    {
        $Response = array(
            "status" => false,
            "response_code" => 404,
            "message" => "Resource not found"
        );
        header('Content-Type: application/json');
        http_response_code(404);
        print(json_encode($Response));
        exit();
    }
    catch(Exception $exception)
    {
        $Response = array(
            "status" => false,
            "response_code" => 500,
            "message" => "Internal Server Error"
        );
        header('Content-Type: application/json');
        http_response_code(500);
        print(json_encode($Response));
        exit();
    }

    if($SocialvoidLib->getUserDisplayPictureManager()->getProfilePictureManager()->avatar_exists($User->PublicID) == false)
    {
        $SocialvoidLib->getUserDisplayPictureManager()->getProfilePictureManager()->generate_avatar($User->PublicID);
    }

    $Avatar = $SocialvoidLib->getUserDisplayPictureManager()->getProfilePictureManager()->get_avatar($User->PublicID);

    if(isset($_GET["resource"]))
    {
        if(isset($Avatar[$_GET['resource']]))
        {
            upload_image($Avatar[$_GET['resource']]);
        }

        $Response = array(
            "status" => false,
            "response_code" => 404,
            "message" => "Resource not found"
        );
        header('Content-Type: application/json');
        http_response_code(404);
        print(json_encode($Response));
        exit();
    }
    else
    {
        upload_image($Avatar['normal']);
    }

    function upload_image($file)
    {
        $ImageContents = file_get_contents($file);

        header('Cache-control: max-age=60');
        header('Content-type: image/jpeg');
        http_response_code(200);
        print($ImageContents);
        exit();
    }