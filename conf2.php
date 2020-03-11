<?php
$home_db_user = 'admin_home';
$home_db_db = 'admin_home';
$home_db_pass = '@hyn12345';
$admin_db_user = 'admin_admin';
$admin_db_db = 'admin_admin';
$admin_db_pass = '@hyn12345';

$test = 0;
$error = 0;

if (!function_exists('sql_cache')) {


    function sql_cache($sql, $time = "+1 day", $all = true)
    {

        $cache_key = md5($sql) . $all;

        $data = cache($cache_key);

        if ($data == null) {
            $db = new db;

            if ($all) {

                $data = $db->getAll($sql);


            } else {
                $data = $db->getOne($sql);
            }

            cache($cache_key, serialize($data), $time);
        }


        return unserialize($data);


    }

}

register_shutdown_function("shutdown_error_handler");

function shutdown_error_handler()
{


    $lasterror = error_get_last();
    if (isset($lasterror)) {
        $message = '' . $lasterror['type'] . ') | PHP Stopped | Message (' . $lasterror['message'] . ') | File (' . $lasterror['file'] . '';

        $lasterror['url'] = ($_SERVER['HTTPS'] ? 'https://' : 'http://') . @$_SERVER['HTTP_HOST'] . @$_SERVER['REQUEST_URI'];
        \elatic\error_log($lasterror);
    }


}