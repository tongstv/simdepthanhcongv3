<?php

class search extends smarty
{

    function namsinh($d, $m, $y, $x)
    {
        if($x == 0){
        $where = " AND (";
        $where .= "RIGHT(sim2,8)='" . $d . $m . $y . "'"; //1 DK 1 01.09.1990
        $where .= " || RIGHT(sim2,7)='" . substr($d, -1, 1) . $m . $y . "'"; //DK 2 1.09.1990
        if ($m < 10)
            $where .= " || RIGHT(sim2,7)='" . $d . substr($m, -1, 1) . $y . "'"; //DK 3 01.9.1990
        if ($m < 10 && $d < 10) {
            $where .= " || RIGHT(sim2,6)='" . substr($d, -1, 1) . substr($m, -1, 1) . $y .
                "'"; //DK4 1.9.1990
            $where .= " || RIGHT(sim2,6)='" . $d . $m . substr($y, -2, 2) . "'"; //DK5 01.09.90
        }
        if ($d < 10)
            $where .= " || RIGHT(sim2,5)='" . substr($d, -1, 1) . $m . substr($y, -2, 2) .
                "'"; //DK6 1.09.90
        if ($m < 10)
            $where .= " || RIGHT(sim2,5)='" . $d . substr($m, -1, 1) . substr($y, -2, 2) .
                "'"; //DK7 01.9.90
        if ($m < 10 && $d < 10)
            $where .= " || RIGHT(sim2,4)='" . substr($d, -1, 1) . substr($m, -1, 1) . substr($y,
                -2, 2) . "'"; //DK8 1.9.90
        $where .= " || RIGHT(sim2,4)='" . $y . "'"; //DK 9 VD: 1990
        $where .= ")";

        } else if ($x == 2) {
            $where = " AND (";

            $where .= "RIGHT(sim2,6)='" . $d . $m . substr($y, -2, 2) . "'";
            /*
            if ($m < 10)
                $where .= "RIGHT(sim2,6)='" . $d . $m . $y . "'"; //DK 3 01.9.1990
            if ($m < 10 && $d < 10) {
                /*$where .= " || RIGHT(sim2,6)='" . substr($d, -1, 1) . substr($m, -1, 1) . $y .
                    "'"; //DK4 1.9.1990
                $where .= " || RIGHT(sim2,6)='" . $d . $m . substr($y, -2, 2) . "'"; //DK5 01.09.90
            }

            /*if ($d < 10)
                $where .= " || RIGHT(sim2,5)='" . substr($d, -1, 1) . $m . substr($y, -2, 2) .
                    "'"; //DK6 1.09.90
            if ($m < 10)
                $where .= " || RIGHT(sim2,5)='" . $d . substr($m, -1, 1) . substr($y, -2, 2) .
                    "'"; //DK7 01.9.90
            if ($m < 10 && $d < 10)
                $where .= " || RIGHT(sim2,4)='" . substr($d, -1, 1) . substr($m, -1, 1) . substr($y,
                    -2, 2) . "'"; //DK8 1.9.90
            if ($where != ' AND (')
                $where .= " || RIGHT(sim2,4)='" . $y . "'"; //DK 9 VD: 1990
            else
                $where .= " RIGHT(sim2,4)='" . $y . "'"; //DK 9 VD: 1990*/
            $where .= ")";
        } else
            if ($x == 1) {
                $where = " AND (";
                $where .= "RIGHT(sim2,8)='" . $d . $m . $y . "'"; //1 DK 1 01.09.1990
                $where .= " || RIGHT(sim2,7)='" . substr($d, -1, 1) . $m . $y . "'"; //DK 2 1.09.1990
                if ($m < 10)
                    $where .= " || RIGHT(sim2,7)='" . $d . substr($m, -1, 1) . $y . "'"; //DK 3 01.9.1990

                $where .= " || RIGHT(sim2,4)='" . $y . "'"; //DK 9 VD: 1990

                $where .= ")";

            }
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
            } else
            {
                $where = "where sim2 IS NOT NULL";
            }


            // TODO:

            if (isset($_GET['n']) and is_array($_GET['n'])) {
                $vv = "";
                foreach ($_GET['n'] as &$v) {
                    $vv .= $v;
                }
                $where .= " AND sim2 NOT rlike'[" . $vv . "]'";
            }


            // TODO: Mạng

            if (isset($_GET['date'])) {
                $date = urldecode($_GET['date']);
                $date = explode("/", $date);

                $where .= $this->namsinh($date[0], $date[1], $date[2], $_GET['dtp']);
            }
            if (isset($_GET['network']) and $_GET['network']) {

                if (is_numeric($_GET['network']))
                    $where .= " AND mang=" . (int)$_GET['network'];
                else {
                    global $mangpos;
                    $where .= " AND mang=" . (int)$mangpos[$_GET['network']];
                }

            }
            // TODO:  Theeo giá


            if (isset($_GET['dang'])) {
                global $kieu;
                if (is_array($kieu[$_GET['dang']]))
                    $where .= " AND (" . join(" AND ", $kieu[$_GET['dang']]) . ")";
                else
                    $where .= " AND (" . $kieu[$_GET['dang']] . ")";
            }


            if (isset($_GET['giatu']) && isset($_GET['den'])) {
                $giatu = stringtonumber($_GET['giatu']);
                $den = stringtonumber($_GET['den']);

                if ($den > $giatu)
                    $where .= " AND (giaban >= " . ($giatu / 1000000) . " AND giaban <= " . ($den /
                        1000000) . ")";


            }


            if (isset($_GET['type']))
                $where .= " AND stype=" . $_GET['type'];


            $sim = $_GET['sim'];


            $qstring = $_SERVER["QUERY_STRING"];


            $ck = @preg_match('/\?page=([0-9]*)/', $qstring, $cuspage);


            if ($ck) {
                $cuspage = $cuspage[1];
            } else {
                $cuspage = 0;
            }

            if ($cuspage) {
                $offset = $cuspage * 2 * 100;
            } else {
                $offset = 0;
            }

            if ($cuspage == 0) {
                $this->assign("linkx", "?" . $qstring . "?page=2");

            } else {
                $this->assign("linkx", "?" . preg_replace('/\?page=([0-9]+)/', '', $qstring) .
                    "?page=" . ($cuspage + 1));


                $this->assign("link2", "?" . preg_replace('/\?page=([0-9]+)/', '', $qstring) .
                    "?page=" . ($cuspage - 1));


                //$cuspage = 20;

                $pstart = $cuspage - 9;



                    if($cuspage > 1):
                for ($i = $pstart; $i <= $cuspage; $i++) {

                    if($i >= 1)
                    {

                    if ($cuspage == $i) {
                        $ps .= '<li class="active"><a class="paginate" title="Go to page 7 of 418" href="#">' .
                            $i . '</a></li>';
                    } else {
                        $ps .= '<li><a class="paginate" title="Go to page 7 of 418" href="'."?" . preg_replace('/\?page=([0-9]+)/', '', $qstring) .
                    "?page=" . ($i).'">' .
                            $i . '</a></li>';
                    }
                }

                }
                
                $this->assign("ps",$ps);
                endif;
                


            }

            $this->assign("ps",$ps);
            
          
            $this->assign("p", $cuspage);

            // $this->assign("linkp2",$qstring."?page=".$cuspage-1);


            /*
            $db->query("SELECT SQL_CALC_FOUND_ROWS (sim2) FROM sim LIMIT $offset,600");
            
            

            
            
            $num_rows =$db->query_first("SELECT FOUND_ROWS() as num");
            
            $num_rows =$num_rows['num'];
            
            
            
            
            /*
            
            $offset = 
            "SELECT SQL_CALC_FOUND_ROWS sim2 FROM sim LIMIT 600 OFFSET $offset"         
            
            
            */
            $num_rows = 600;


            $pages = new Paginator($num_rows, 5, array(
                100,
                250,
                500));
            if (isset($_GET['tongdiem']) and isset($_GET['tongnut'])) {

                if ((int)$_GET['tongdiem'] > 0)
                    $where .= " AND tong=" . (int)$_GET['tongdiem'];
                else
                    if ((int)$_GET['tongnut'] > 0) {
                        if ((int)$_GET['tongnut'] == 10)
                            $_GET['tongnut'] = 0;
                        $where .= " AND right(tong,1)=" . (int)$_GET['tongnut'];
                    }
            }


            $paging = $pages->display_pages();
            // $paging .= $pages->display_jump_menu();
            if (isset($_SESSION['toggleprice']))
                $orderby = "ORDER BY giaban " . $_SESSION['toggleprice'];
            else
                $orderby = "ORDER BY giaban ASC";
include_once "locsim.php";

            $sql = "SELECT * FROM " . TABLE_SIM . " {$where} {$orderby} limit $pages->limit_start,$pages->limit_end";

            if ($pages->current_page == 1)
                $i = 0;
            else
                $i = $pages->limit_start;
            $this->assign("data", getSim($i, $sql));

            $this->assign("paging", $paging);

            if (isset($_GET['sim']))
                $name[] = "Tìm sim: " . $_GET['sim'];

            if (isset($_GET['network']) AND $_GET['network']!=0) {
                if (is_numeric($_GET['network']) and $_GET['network'] != 0) {
                    foreach ($GLOBALS['mangpos'] as $k => $v) {
                        if ($v == $_GET['network']) {
                            $name[] = "Mạng " . $k;
                        }
                    }
                } else {
                    if(is_numeric($_GET['network']) and $_GET['network'] != 0)
                    {
                         $name[] = "Mạng " . $_GET['network'];
                    }
                   
                }
            }
            if (isset($_GET['giatu']) and isset($_GET['den'])) {
                $gtu = stringtonumber($_GET['giatu']);
                $gden = stringtonumber($_GET['den']);

                if ($gden > $gtu)
                    $name[] = "Giá từ " . number_format($gtu) . " đến " . number_format($gden);
            }

            $this->assign("name", isset($name) ? @join(" ", $name) : "");
            $this->assign("nav", navmenu());
            $this->assign("thisdomain", thisdomain);

            $this->registerFilter("output", "minify_html");

            if (isset($_GET['print'])) {
                $this->assign("header", getPage('print_header'));


                $this->assign("footer", getPage('print_footer'));
                $this->display("print.htm");

            } else
                $this->display(temp_file);

        endif;
    }
}
