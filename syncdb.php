<?php
require __DIR__ . "/nosql.php";


$config['hosts'] = ["http://103.28.37.111:9200"];
$config['index'] = "simdepthanhcong";




$db['host'] = "103.249.103.31";
$db['db_user'] = "tksimcard_home";
$db['db_name'] = "tksimcard_home";
$db['db_pass'] = "@hyn12345";

if(file_exists(__DIR__."/conf2.php"))
{
    require __DIR__."/conf2.php";
    $db['host'] = "localhost";
    $db['db_user'] = $home_db_user;
    $db['db_name'] = $home_db_db;
    $db['db_pass'] = $home_db_pass;
    $config['index'] = $home_db_db;

}
$nosql = new nosql($config);
$nosql->syncdb($db);