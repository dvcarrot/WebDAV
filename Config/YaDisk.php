<?php
namespace dvcarrot\WebDAV\Config;

use dvcarrot\WebDAV\Config;

class YaDisk extends Config
{
    /**
     * URL to the cloud
     */
    const URL = 'https://webdav.yandex.ru/';

    /**
     * Sets variables
     * @param string $username
     * @param string $password
     */
    function __construct($username, $password)
    {
        parent::__construct(self::URL, (string)$username, (string)$password);
    }
}