<?php
namespace My\WebDAV\Config;

use My\WebDAV\Config;

class DropBox extends Config
{
    /**
     * URL to the cloud
     */
    const URL = 'https://dav.dropdav.com/';

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