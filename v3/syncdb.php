<?php
class pidfile
{
    private $_file;
    private $_running;

    public function __construct($dir, $name)
    {
        $this->_file = "$dir/$name.pid";

        if (file_exists($this->_file)) {
            $pid = trim(file_get_contents($this->_file));
            if (posix_kill($pid, 0)) {
                $this->_running = true;
            }
        }

        if (!$this->_running) {
            $pid = getmypid();
            file_put_contents($this->_file, $pid);
        }
    }

    public function __destruct()
    {
        if ((!$this->_running) && file_exists($this->_file)) {
            unlink($this->_file);
        }
    }

    public function is_already_running()
    {
        return $this->_running;
    }
}

$pidfile = new pidfile('/tmp', $home_db_db);
if ($pidfile->is_already_running()) {
    echo "Already running.\n";
    exit;
} else {
    echo "Started...\n";
}
require __DIR__ . "/nosql.php";
if (!defined('JSON_PRESERVE_ZERO_FRACTION')) {
    define('JSON_PRESERVE_ZERO_FRACTION', 1024);
}

$config['hosts'] = ["http://localhost:9200"];
$config['index'] = "sim";


$db['host'] = "localhost";
$db['db_user'] = "";
$db['db_name'] = "";
$db['db_pass'] = "";

if (file_exists(__DIR__ . "/../conf2.php")) {
    require __DIR__ . "/../conf2.php";
    $db['host'] = "localhost";
    $db['db_user'] = $home_db_user;
    $db['db_name'] = $home_db_db;
    $db['db_pass'] = $home_db_pass;

    $config['index'] = "sim";


}

$nosql = new nosql($config);
$new=0;


function deletesynced($db)
{
    $sql = "CREATE TABLE IF NOT EXISTS `sync` (
    `id` int(11) unsigned NOT NULL auto_increment,
    `_type` varchar(255) NOT NULL default '',
    `simdl` varchar(255) NOT NULL default '',
    PRIMARY KEY  (`id`))";

    $db->query($sql);

    $db->query("CREATE TRIGGER  `syncdelete` AFTER DELETE ON `sim`
 FOR EACH ROW INSERT INTO sync (_type,simdl)
   VALUES ('DELETE', OLD.simdl)");

    $res = $db->query("select * from sync");
    $simdls = [];
    $ids=[];
    while ($row = $res->fetch_assoc()) {

        \elatic\deletesimdl($row['simdl']);

        $ids[]=$row['id'];
    }
    $db->query("delete from sync where id IN(".join(",",$ids).")");

}

if(isset($argv[1]) AND $argv[1]=="new")
{
    $new =1;
    echo "Đồng bộ lại";
}

$nosql->syncdb($db,$new);