<?php
//TODO learn proper class doc structure
/**
 * DBconnect class
 */

class DBconnect extends PDO
{   
    public function __construct()
    {
        $config = parse_ini_file( __DIR__ . './config.ini');
        $user = $config['dbuser'];
        $pass = $config['dbpass'];
        $dsn = $config['driver'].':host='.$config['dbhost'].';dbname='.$config['dbname'].';';
        
            
        parent::__construct($dsn, $user ,$pass);
    }
}

