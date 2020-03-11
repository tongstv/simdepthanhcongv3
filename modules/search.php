<?php

class search extends smartyBC
{

    function namsinh($d, $m, $y, $x)
    {


        $where = "and simnamsinh ='" . $d . "-" . $m . "-" . $y . "' and type ='" . $x . "'";

        return $where;
    }

    function index()
    {
        global $db;
        $this->setTemplateDir(TEMPLATE);
        $lc = $this->lc();


        if ($lc):
            $seobai = getpagebylink();


            $this->assign("seobai", $seobai);

            // TODO:

            if (isset($_GET['sim']))
            {

                $txtsim = $_GET['sim'];

                $txtsim = str_replace(array('.', ' '), array('', ''), $txtsim);
                if ($txtsim != "")
                    $this->assign("thiskey", $txtsim);
                $spot = strpos($txtsim, "*");
                $slen = strlen($txtsim);
                if (stristr($txtsim, "*") === false)
                {
                    $txtsim = str_replace(array(
                        'x',
                        'X',
                        '*'), array(
                        '[0-9]',
                        '[0-9]',
                        '.*'), $txtsim);
                    $where = "WHERE sim2 rlike'.*" . $txtsim . ".*'";
                } else
                {
                    $txtsim = str_replace(array(
                        'x',
                        'X',
                        '*'), array(
                        '[0-9]',
                        '[0-9]',
                        '.*'), $txtsim);
                    if ($spot == 0)
                        $where = "WHERE sim2 rlike '" . $txtsim . "$'";
                    elseif ($spot == ($slen - 1))
                        $where = "WHERE sim2 rlike '^" . $txtsim . "'";
                    else
                        $where = "WHERE sim2 rlike '^" . $txtsim . "$'";
                }

                // recommend birthday
                $pos = strrpos($txtsim, "*");
                $number = substr($txtsim,$pos+1);

                $recommend = 0;
                if (is_numeric($number)) {
                    if ($number >= 0 && $number < 21) {
                        if (strlen($number) > 2) {
                            $recommend = 2;
                        } else {
                            $recommend= 20;
                        }
                    } elseif ($number >= 75 && $number < 100) {
                        $recommend= 19;
                    } elseif ($number >= 975 && $number < 1000) {
                        $recommend= 1;
                    }  elseif ($number >= 1975 && $number < 2000) {
                        $recommend= -1;
                    } elseif ($number >= 2000 && $number < 2020) {
                        $recommend= -1;
                    }
                }
                // $recommend = 0;
                // switch ($value) {
                //     case 19:
                //         $recommend = 19;
                //         break;
                        
                //     case 20:
                //         $recommend = 20;
                //         break;
            
                //     default:
                //         $recommend = 0;
                //         break;
                // }

                $this->assign("recommend", $recommend);
                $this->assign("recommend_value", $number);
            } else
            {
                $where = "where sim2 IS NOT NULL";
            }


            // TODO:

            if (isset($_GET['n']) and is_array($_GET['n']))
            {
                $vv = "";
                foreach ($_GET['n'] as &$v)
                {
                    $vv .= $v;
                }
                $where .= " AND sim2 NOT rlike'[" . $vv . "]'";
            }


            // TODO: Mạng

            if (isset($_GET['date']))
            {
                $date = urldecode($_GET['date']);
                $date = explode("/", $date);

                $where .= $this->namsinh($date[0], $date[1], $date[2], $_GET['dtp']);
            }
            if (isset($_GET['network']) and $_GET['network'])
            {

                if (is_numeric($_GET['network']))
                    $where .= " AND mang=" . (int)$_GET['network'];
                else
                {
                    global $mangpos;
                    $where .= " AND mang=" . (int)$mangpos[$_GET['network']];
                }

            }
            // TODO:  Theeo giá


            if (isset($_GET['dang']))
            {
                global $kieu;
                if (is_array($kieu[$_GET['dang']]))
                    $where .= " AND (" . join(" AND ", $kieu[$_GET['dang']]) . ")";
                else
                    $where .= " AND (" . $kieu[$_GET['dang']] . ")";
            }


            if (isset($_GET['giatu']) && isset($_GET['den']))
            {
                $giatu = stringtonumber($_GET['giatu']);
                $den = stringtonumber($_GET['den']);

                if ($den > $giatu)
                    $where .= " AND (giaban >= " . ($giatu / 1000000) . " AND giaban <= " . ($den /
                        1000000) . ")";


            }


            if (isset($_GET['type']))
                $where .= " AND stype=" . $_GET['type'];






        $limit = 12000*($_GET['page'] ? $_GET['page']  : 1);

 
     


            if (isset($_GET['tongdiem']) and isset($_GET['tongnut']))
            {

                if ((int)$_GET['tongdiem'] > 0)
                    $where .= " AND tong=" . (int)$_GET['tongdiem'];
                else
                    if ((int)$_GET['tongnut'] > 0)
                    {
                        if ((int)$_GET['tongnut'] == 10)
                            $_GET['tongnut'] = 0;
                        $where .= " AND right(tong,1)=" . (int)$_GET['tongnut'];
                    }
            }


        

        


            //$paging = $pages->display_pages();
            // $paging .= $pages->display_jump_menu();
            if (isset($_SESSION['toggleprice']))
                $orderby = "ORDER BY giaban " . $_SESSION['toggleprice'];
            else
                $orderby = "ORDER BY giaban";
            include_once "locsim.php";


            $page = explode("page=", $_SERVER['REQUEST_URI']);
            $page = isset($page[1]) ? $page[1] : 1;

            $max = 60;
            $bg = ($page - 1) * $max;

            $sql = "SELECT * FROM " . TABLE_SIM . " {$where} {$orderby} limit $bg,$max";


            $result = \elatic\getSim($bg, $sql);

            $this->assign("data", $result['data']);


            $pages = new Paginator($result['total'], 9, array(
                100,
                250,
                500));
            $paging = $pages->display_pages();


            $this->assign("paging", $paging);
        

            if (isset($_GET['sim']))
                $name[] = "Tìm sim: " . $_GET['sim'];

            if (isset($_GET['network']) and $_GET['network'] != 0)
            {
                if (is_numeric($_GET['network']) and $_GET['network'] != 0)
                {
                    foreach ($GLOBALS['mangpos'] as $k => $v)
                    {
                        if ($v == $_GET['network'])
                        {
                            $name[] = "Mạng " . $k;
                        }
                    }
                } else
                {
                    if (is_numeric($_GET['network']) and $_GET['network'] != 0)
                    {
                        $name[] = "Mạng " . $_GET['network'];
                    }

                }
            }
            if (isset($_GET['giatu']) and isset($_GET['den']))
            {
                $gtu = stringtonumber($_GET['giatu']);
                $gden = stringtonumber($_GET['den']);

                if ($gden > $gtu)
                    $name[] = "Giá từ " . number_format($gtu) . " đến " . number_format($gden);
            }

            $this->assign("name", isset($name) ? @join(" ", $name) : "");

            $this->assign("thisdomain", thisdomain);

            $this->registerFilter("output", "minify_html");

            if (isset($_GET['print']))
            {
                $this->assign("header", getPage('print_header'));


                $this->assign("footer", getPage('print_footer'));
                $this->display("print.htm");

            } else
                $this->display(temp_file);

        endif;
    }
}
