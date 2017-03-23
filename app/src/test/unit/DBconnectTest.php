<?php

        $config = parse_ini_file( __DIR__ . '/../../config.ini');
        $dsn = $config['driver'].':host-'.$config['dbhost'].';dbname='.$config['dbname'];

        var_dump($dsn);
