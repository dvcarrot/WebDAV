<?php
namespace dvcarrot\WebDAV\Config;

use dvcarrot\WebDAV\Config;

class CloudMe extends Config
{
    /**
     * URL to the cloud
     */
    const URL = 'http://webdav.cloudme.com/';

    /**
     * Sets variables
     * @param string $username
     * @param string $password
     */
    function __construct($username, $password)
    {
        parent::__construct(self::URL . "$username/CloudDrive/Documents/", (string)$username, (string)$password, CURLAUTH_ANY);
    }
}