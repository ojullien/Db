<?php
/**
 * This file is a part of the Ophp framework
 *
 * @package Db
 * @license MIT <https://github.com/ojullien/ophp-Db/blob/master/LICENSE>
 */
return [
    //
    // DATABASE options.
    'database' => [
        //
        // Database names
        'dbnames' => [
            'test'        => 'ophpdb' ],
        //
        // Server where the database for test is installed
        'servers' => [
            'local' => [
                'driver'         => 'Pdo_Mysql',
                'hostname'       => '192.168.33.82',
                'port'           => '3306',
                'charset'        => 'UTF8',
                'driver_options' => [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_PERSISTENT => true,
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'' ] ] ],
        //
        // Allowed users on Test server
        'users'   => [
            'super'   => [
                'username' => 'ophpdb.adm',
                'password' => 'ophpdb.adm.pwd' ],
            'test'    => [
                'username' => 'ophpdb.user',
                'password' => 'ophpdb.user.pwd' ] ],
    ],
];
