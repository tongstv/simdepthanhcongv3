<?php


/**
 * @author stv.vn
 * @copyright 2014
 */

class sodep extends Smarty
{
    protected $lcs;

    /** view **/
    function index()
    {
        global $db, $mangpos, $kieu;
        $this->setTemplateDir(TEMPLATE);
        $this->lcs = $this->lc();

        $where = "where sim2 IS NOT NULL";
        if (isset($_SESSION['simtype']))
            $where .= $_SESSION['simtype'];


        $seobai = getpagebylink();


        $this->assign("seobai", $seobai);

        if (isset($_GET['network']))
            $where .= " AND mang=" . $mangpos[$_GET['network']];


        if (isset($_GET['type'])) {
            $where .= " and loai = " . \elatic\maploai($_GET['type']);
        }


        //$paging .= $pages->display_jump_menu();
        if (isset($_SESSION['toggleprice']))
            $orderby = "ORDER BY giaban" . $_SESSION['toggleprice'];
        else
            $orderby = "ORDER BY giaban ASC";


        include_once "locsim.php";


        if (!isset($_SESSION['locsim']['skhoanggia'])) {


            if (isset($_GET['giatu']) and isset($_GET['den'])) {


                //$where .= "AND (giaban >= ".($_GET['giatu']/1000000)." AND giaban <= ".($_GET['den']/1000000).")";
            }

        }


        $page = explode("page=", $_SERVER['REQUEST_URI']);
        $page = isset($page[1]) ? $page[1] : 1;

        $max = 60;
        $bg = ($page - 1) * $max;

        $sql = "SELECT * FROM " . TABLE_SIM . " {$where} {$orderby} limit $bg,$max";

        file_get_contents("sql.txt",$sql);

        $result = \elatic\getSim($bg, $sql);

        $this->assign("data", $result['data']);


        $pages = new Paginator($result['total'], 9, array(
            100,
            250,
            500));
        $paging = $pages->display_pages();


        $this->assign("paging", $paging);



        if (isset($_GET['type']))
            $name[] = $GLOBALS['loai']['s'][$_GET['type']];

        if (isset($_GET['network']))
            $name[] = $_GET['network'];


        if (isset($_GET['giatu']) and isset($_GET['den'])) {
            $name[] = "Sim số đẹp giá từ " . number_format($_GET['giatu']) . " đến " .
                number_format($_GET['den']);
        }

        $this->assign("name", isset($name) ? @join(" > ", $name) : "");
        $this->assign("nav", navmenu());
        $this->assign("thisdomain", thisdomain);
        $print_url = "index.php?ajax=sodep&page=" . $pages->current_page . "&print=true";
        $this->assign("print_url", $print_url);
        $this->registerFilter("output", "minify_html");
        if (isset($_GET['print'])) {
            $this->assign("header", getPage('print_header'));


            $this->assign("footer", getPage('print_footer'));
            $this->display("print.htm");

        } else
            $this->display(temp_file);
    }

}
