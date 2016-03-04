# WebDAV
My Simple WebDAV Client

## example
    use dvcarrot\WebDAV\Config\YaDisk as Config;
    use dvcarrot\WebDAV\Client;
    $config = new Config('username', 'password');
    $client = new Client($config);
    $result = $client->propfind('folder');
    var_dump($result);
