<?php
define('DH_SERVER','admin.tongkhosim.com');
define('DH_DB_USER','tksimcard_admin');
define('DH_DB_PASS','@hyn12345');
define('DH_DB_DATABASE','tksimcard_admin');


class dhnew
{
    var $db;
    var $affected_rows = 0;
    var $data = array();
    public function __construct($data = array())
    {

        $this->data = $data;

        $this->db = new mysqli(DH_SERVER, DH_DB_USER, DH_DB_PASS, DH_DB_DATABASE);


        
        if (!mysqli_ping($this->db)) {

            $db = new db;

            $db->query("SET NAMES utf8");
            $db->query("CREATE TABLE IF NOT EXISTS `orderstmp` (
  `id` int(11) AUTO_INCREMENT,
  `fullname` varchar(40) COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `phone` varchar(30) COLLATE utf8_unicode_ci,
  `email` varchar(70) COLLATE utf8_unicode_ci,
  `ip` varchar(70) COLLATE utf8_unicode_ci,
  `date_order` int(11),
  `city` varchar(70) COLLATE utf8_unicode_ci,
  `sosim` varchar(20) COLLATE utf8_unicode_ci,
  `giatien` double,
  `status` int(11),
  `uid` int(11),
  `dattruoc` double,
  `simdl` int(11),
  `note` varchar(255) COLLATE utf8_unicode_ci,
  `com_url` text COLLATE utf8_unicode_ci,
  `com_user` varchar(200) COLLATE utf8_unicode_ci,
  `com_time` int(11),
  `com_domain` varchar(200) COLLATE utf8_unicode_ci,
  `ulock` varchar(200) COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;");

    

            $db->query_insert("orderstmp", $data);


        }
        
            $this->db->query("SET NAMES utf8");
        
    }

    function __destruct()
    {
        $db = new db;

        $db->query("SET NAMES utf8");

        if(mysqli_ping($this->db))
        {
        $data = $db->getAll("select * from orderstmp");

        foreach ($data as $row) {

            $id= $row['id'];
            unset($row['id']);
                
                $this->query_insert("orders",$row);
           
                $db->query("DELETE FROM `orderstmp` WHERE id = ".$id);
           


        }
        }

    }
    function query($sql)
    {
        $query_id = $this->db->query($sql);
        $this->affected_rows = $this->db->affected_rows;
        return $query_id;
    }
    function getOne($sql)
    {
        $query_id = $this->query($sql);

        $row = $query_id->fetch_array(MYSQLI_ASSOC);
        $query_id->free();

        return $row;

    }


    function query_insert($table, $data)
    {
        $q = "INSERT INTO `" . $table . "` ";
        $v = '';
        $n = '';

        foreach ($data as $key => $val) {
            $n .= "`$key`, ";
            $v .= "'" . $val . "', ";
        }

        $q .= "(" . rtrim($n, ', ') . ") VALUES (" . rtrim($v, ', ') . ");";

        $this->query($q);

    }

    function getAll($sql)
    {
        $query_id = $this->query($sql);

        while ($row = $query_id->fetch_array(MYSQLI_ASSOC)) {
            $data[] = $row;
        }
        $query_id->free();

        return $data;
    }
    function close()
    {
        $this->db->close();
    }

}
