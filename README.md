# WebDAV
My Simple WebDAV Client

## example
    $config = new My\WebDAV\Config\YaDisk('username', 'password');
    $client = new My\WebDAV\Client($config);
    $result = $client->propfind('/folder/');
    var_dump($result);
