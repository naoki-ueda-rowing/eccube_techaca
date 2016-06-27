<?php
/**
 * Created by PhpStorm.
 * User: Naoki
 * Date: 2016/05/11
 * Time: 17:56
 */
function getDb()
{
    $dsn = 'mysql:dbname=techaca; host=localhost';
    $usr = 'naoki';
    $passwd = 'techaca';

    try {
        $db = new PDO($dsn, $usr, $passwd);
        $db->exec('SET NAMES utf8');
    } catch (PDOException $e) {
        $db = NULL;
        die("接続エラー：{$e->getMessage()}");
    }
    return $db;
}
