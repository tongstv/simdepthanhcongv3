<?php
//require_once "autosms.php";
require_once "dh.class.php";

class ordered extends SmartyBC
{
    function hoahong($simdl, $gianhap)
    {
        global $db;

        $row = $db->query_first("SELECT * FROM hh WHERE dlid=" . $simdl . " AND (dk1 <= {$gianhap} AND dk2 >= {$gia}) LIMIT 1");

        return $row['pt'];
    }

    function giathu($sim2, $simdl)
    {
        $db = new db;
        $sim2 = preg_replace('/[^0-9]/', '', $sim2);

        $result = $db->query("SELECT * FROM simso WHERE sim2='" . $sim2 . "'");

        if ($db->affected_rows > 1) {
            while ($r = $result->fetch_array()) {
                $hh = $this->hoahong($r['simdl'], $r['gianhap']);
                if ($hh == 0) $hh = 1;

                if ($hh == 1) $giathu = $gianhap;
                else
                    $giathu = $gianhap * (100 - $hh);


            }
        } else {

            $row['simdl'] = $simdl;

            return $row;
        }

    }


    function gianhap($simdl, $sim2)
    {

        $db = new db;
        $gianhap = $db->getOne("SELECT gianhap FROM simso WHERE simdl='" . $simdl .
            "' AND sim2='" . stringtonumber($sim2) .
            "' order by gianhap ASC limit 1");


        $row['gianhap'] = $gianhap['gianhap'] * 1000000;


        return $row['gianhap'];


    }

    function done()
    {
        global $db;
        $this->setTemplateDir(TEMPLATE);
        if (isset($_POST['submit'])) {
            $addr[] = $_POST['address'];
            $addr[] = $_POST['px'];
            $addr[] = $_POST['qh'];

            unset($_POST['address']);
            unset($_POST['px']);
            unset($_POST['qh']);

            if (isset($_COOKIE['com'])) {

                $_POST['com_url'] = $_COOKIE['com_url'];
                $_POST['com_user'] = $_COOKIE['com_user'];
                $_POST['com_domain'] = $_COOKIE['com_domain'];
                $_POST['com_time'] = $_COOKIE['com_time'];
            }

            $_POST['address'] = @join(" - ", $addr);
            $sims = $_POST['sim'];
            unset($_POST['sim']);
            $simdlx = $_POST['simdlx'];
            unset($_POST['simdlx']);
            unset($_POST['submit']);
            $tt = 0;
            foreach ($sims AS $key => $val) {
                $_POST['simdl'] = $simdlx[$key];
                $_POST['sosim'] = $key;
                $_POST['giatien'] = $val;


                $_POST['ip'] = $_SERVER['REMOTE_ADDR'];
                $_POST['date_order'] = time();
                if ($this->lc())
                    $adb = new db;


                $data[] = $_POST;

                $tt += $_POST['giatien'];

                $adb->query_insert("orders", $_POST);


            }
            $this->assign("data", $data);
            $this->assign("tt", isset($tt) ? $tt : "");
            $this->assign($_POST);

            $this->assign(getPage('dathangxong'));
            $this->display(temp_file);
        }

    }

    function index()
    {
        global $db;
        $this->setTemplateDir(TEMPLATE);

        if (isset($_SERVER['HTTP_REFERER'])) {


            if (isset($_GET['cart'])) {

                $where = "WHERE sim2 IN('" . implode("', '", array_keys($_SESSION['mycart'])) . "')";
            } else
                $where = "WHERE sim2='" . $_GET['sosim'] . "'";


            $row = \elatic\getById($_GET['sosim']);

                $tt += $row['giaban'];
                $row['doctien'] = doctien($row['giaban'] * 1000000);
                $data[] = $row;


        } else {
            $row = array();
            $row['sim1'] = $sosim;
            $row['sim2'] = $sosim;
            $row['giaban'] = "Call";

            $data[] = $row;
        }

        $this->assign("data", $data);
        $this->assign("tt", isset($tt) ? $tt : "");

        $this->assign("mycart", isset($_SESSION['mycart']) ? $_SESSION['mycart'] : "");


        if ($this->lc()):


            $this->assign("city", getCity());
            $sosim = isset($_GET['sosim']) ? $_GET['sosim'] : "";
            $pagedatmua = getPage('datmua');

            $pagedatmua['datmua']['title'] = str_replace('#sim#', $sosim, $pagedatmua['datmua']['title']);
            $pagedatmua['datmua']['detail'] = str_replace('#sim#', $sosim, $pagedatmua['datmua']['detail']);
            $this->assign($pagedatmua);
            $this->assign(str_replace('#sim#', $sosim, getPage('goimua')));
            $this->assign("thisdomain", thisdomain);
            $this->registerFilter("output", "minify_html");
            $this->display(temp_file);
        endif;
    }

    function mycartcount()
    {
        if (isset($_SESSION['mycart'])) {
            echo number_format(count($_SESSION['mycart']));
        }
    }

    function delmycart()
    {
        if (isset($_GET['id']) AND !empty($_GET['id'])) {


            unset($_SESSION['mycart'][$_GET['id']]);


            $mycart = $_SESSION['mycart'];
            $tong = 0;
            $value = 0;
            if (isset($mycart)) {
                foreach ($mycart AS $key => $value) {
                    if ($key == $_GET['id']) continue;
                    $tong += $value;
                }
                if ($this->lc())
                    echo number_format($tong * 1000000);
            }

        }

    }

    function addmycart()
    {

    }

    function mycart()
    {
        $this->setTemplateDir(TEMPLATE);
        if (isset($_GET['add']) AND !empty($_GET['add'])) {
            if (!empty($_GET['gia'])) {
                if ($_GET['add'] != 'undefined')
                    $_SESSION['mycart'][$_GET['add']] = $_GET['gia'];
            }


        }


        $this->assign("mycart", (isset($_SESSION['mycart']) ? $_SESSION['mycart'] : ""));

        $this->assign("thisdomain", thisdomain);
        if ($this->lc())
            $this->display(temp_file);
    }
}