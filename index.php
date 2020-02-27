<?php
session_start();


$start_time = microtime(true); 
header('Content-Type: text/html; charset=utf-8');

require_once "app/lib/cache.php";
require_once "conf.inc.php";
require_once "app/lib/Database.class.php";

$db = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$db->connect();
//$db->query("SET NAMES utf8");
require_once "app/lib/page.class.php";
require_once "app/lib/libs/SmartyBC.class.php";
require_once "app/lib/function.php";
require_once "app/lib/auth.php";
require_once "app/lib/mysqli.php";
require_once "app/lib/querycache.php";

require_once "v3/elatic.php";


$txt=new querycache;

if (isset($_REQUEST['do']))
    $do = $_REQUEST['do'];
else
    $do = "";
if (isset($_REQUEST['ajax']))
    $ajax = $_REQUEST['ajax'];
else
    $ajax = "";


$control = "home";
$method = "index";
$stv = new SmartyBC;
if ($ajax)
{
    $control = $ajax ? $ajax : $control;
    define("temp_file", $control . ".htm");

    $ex = explode('.', $control);
    if (isset($ex[1]))
    {
        $method = $ex[1];
        $control = $ex[0];
    }


    if (file_exists("modules/" . $control . ".php"))
    {
        require_once "modules/" . $control . ".php";
        $Class_name = ucfirst($control);
        $instance = new $Class_name;
        if (!is_callable(array($instance, $method)))
        {
            die("Không thể gọi class:  $method");
        }
        $instance->$method();
    } else
    {
        die("Không thể gọi file: $control");
    }
} else
{

    $control = $do ? $do : $control;

    define("temp_file", $control . ".htm");
    $ex = explode('.', $control);

    if (isset($ex[1]))
    {
        $method = $ex[1];
        $control = $ex[0];
    }
    if (file_exists("modules/" . $control . ".php"))
    {
        require_once "modules/header.php";
        require_once "modules/" . $control . ".php";
        $Class_name = ucfirst($control);
        $instance = new $Class_name;
        if (!is_callable(array($instance, $method)))
        {
            die("Không thể gọi class:  $method");
        }
        $instance->$method();
        require_once "modules/footer.php";
    } else
    {
        die("Không thể gọi file: $control");
    }
}
$db->close();

?>
