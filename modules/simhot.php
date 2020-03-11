<?php

/**
 * @author stv.vn
 * @copyright 2014
 */

class simhot extends Smarty
{
    protected $lcs;

    /** view **/


    function gesimhome()
    {

        $db = new db;

        $simdl = $db->getOne("select * from page where page_code='getsimmoi'");

        $simdl2 = (int)$simdl['page_detail'];


        return $simdl2;


    }


    function index()
    {
        global $db, $mangpos, $kieu;
        $this->setTemplateDir(TEMPLATE);
        $this->lcs = $this->lc();


        $where = "where sim2 and simdl in (" . $this->gesimhome().")";




        $seobai = getpagebylink();


        $this->assign("seobai", $seobai);


        //$paging .= $pages->display_jump_menu();
        if (isset($_SESSION['toggleprice']))
            $orderby = "ORDER BY giaban" . $_SESSION['toggleprice'];
        else
            $orderby = "ORDER BY giaban ASC";


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




        $this->assign("thisdomain", thisdomain);
        $print_url = "index.php?ajax=sodep&page=" . $pages->current_page . "&print=true";
        $this->assign("print_url", $print_url);
        $this->registerFilter("output", "minify_html");
        if (isset($_GET['print']))
        {
            $this->assign("header", getPage('print_header'));


            $this->assign("footer", getPage('print_footer'));
            $this->display("print.htm");

        } else
            $this->display(temp_file);
    }

}
