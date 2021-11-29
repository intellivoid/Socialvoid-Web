<?php

    use DynamicalWeb\Cookies;
    use DynamicalWeb\DynamicalWeb;
    use DynamicalWeb\Exceptions\RouterException;
    use DynamicalWeb\Exceptions\StorageDriverException;
    use DynamicalWeb\Exceptions\WebApplicationException;
    use SocialvoidLib\Interfaces\StandardErrorInterface;

    /**
     * Handles a standard error from Socialvoid's network
     *
     * @param string $route
     * @param string $callback
     * @param $cookieStorage
     * @param StandardErrorInterface $standardError
     * @throws RouterException
     * @throws StorageDriverException
     * @throws WebApplicationException
     */
    function handleStandardError(string $route, string $callback, &$cookieStorage, StandardErrorInterface $standardError)
    {
        $active_request_handler = DynamicalWeb::activeRequestHandler();
        $active_request_handler->Redirect = true;
        $active_request_handler->RedirectLocation = DynamicalWeb::getRoute($route, ['callback' => $callback, 'std_error' => $standardError->getCode()]);
        DynamicalWeb::activeRequestHandler($active_request_handler);

        $cookieStorage->Data['last_error_code'] = $standardError->getCode();
        $cookieStorage->Data['last_error_message'] = $standardError->getMessage();
        $cookieStorage->Data['last_error_name'] = $standardError->getName();
        Cookies::updateCookieStorage($cookieStorage);
    }