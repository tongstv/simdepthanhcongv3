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


        $where = "where simdl =" . $this->gesimhome();




        $seobai = getpagebylink();


        $this->assign("seobai", $seobai);


        //$paging .= $pages->display_jump_menu();
        if (isset($_SESSION['toggleprice']))
            $orderby = "ORDER BY giaban" . $_SESSION['toggleprice'];
        else
            $orderby = "ORDER BY giaban ASC";


        include_once "locsim.php";



        $num_rows = num_rows_cache("SELECT count(*) AS num_rows FROM " . TABLE_SIM . " {$where}");

        $pages = new Paginator($num_rows, 9, array(
            100,
            250,
            500));


        $paging = $pages->display_pages();


        $sql = "SELECT * FROM " . TABLE_SIM . " {$where} {$orderby} limit $pages->limit_start,$pages->limit_end";


        if ($pages->current_page == 1)
            $i = 0;
        else
            $i = $pages->limit_start;
        $this->assign("data", getSim($i, $sql));
  
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
