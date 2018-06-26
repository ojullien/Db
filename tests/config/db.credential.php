<?php
/**
 * This file is a part of the Ophp framework
 *
 * @package Db
 * @license MIT <https://github.com/ojullien/ophp-Db/blob/master/LICENSE>
 */
return [
    'super' => [
        'username' => 'ophpdb.adm',
        'password' => 'ophpdb.adm.pwd' ],
    'test'  => [
        'username' => 'ophpdb.user',
        'password' => 'ophpdb.user.pwd' ],
    'err01' => [
        'usernam'  => 'ophpdb.user',
        'password' => 'ophpdb.user.pwd' ],
    'err02' => [
        'username' => 'ophpdb.user',
        'passwor'  => 'ophpdb.user.pwd' ],
    'err03' => [
        'username' => false,
        'password' => 'ophpdb.user.pwd' ],
    'err05' => [
        'username' => 'ophpdb.user',
        'password' => false ],
];
