<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
//return [
//    'db' => [
//        //'driver' => 'OCI8',
//        'oci:dbname=yoursid',
//        'connection_string' => '192.168.36.6/orcl',
//        'character_set' => 'AL32UTF8',
//    ],
//];

//return [
//    'db' => [
//        'driver' => 'Oci8',
//        'dsn' => 'oci8:dbname=//192.168.36.6:1521/orcl;charset=UTF8',
//        'username' => 'MNINTE',
//        'password' => 'MNINTE',
//        'character_set' => 'AL32UTF8',
//        'platform_options' => array('quote_identifiers' => false)
//    ]
//];

 return [
    'db' => [
        'driver' => 'Oci8',
        'connection_string' => '192.168.36.6/orcl',
        'character_set' => 'AL32UTF8',
        'platform_options' => array('quote_identifiers' => false)
    ]
];