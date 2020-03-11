<?php

/**
 * @author stv.vn
 * @copyright 2014
 */
class home extends SmartyBC
{

    /** view **/


    function gesimhome()
    {


        $cache_key = "simmoi118";

        if (cache($cache_key) === null):

            $db = new db;

            $simdl = $db->getOne("select * from page where page_code='getsimmoi'");

            $simdl2 = (int)$simdl['page_detail'];
            //echo ',,,,,,,,,,,,,,,,,,,,,,,,'.$simdl2;


            $result = \elatic\getSim(1,"select * from sim WHERE sim2 and simdl=" . $simdl2 . " limit 0, 36")['data'];


            foreach ($result AS $row) {


                $data[] = $row;
            }

            cache($cache_key, serialize($data), "+30 seconds", "cache/page/");
        else:

            $data = unserialize(cache($cache_key));
        endif;

        return $data;


    }


    function index()
    {
        $this->setTemplateDir(TEMPLATE);
        //  $this->minifyHtml = true;
        $this->lc();
        global $db;


        $this->assign("simkm", $this->gesimhome());

        //$this->assign("menu",menu(1));

        $seobai = getpagebylink();


        $this->assign("seobai", $seobai);

        $sethome = new sethome();


        $where = $sethome->index();

        if (isset($_SESSION['simtype'])) $where .= $_SESSION['simtype'];


        //  $paging .= $pages->display_jump_menu();
        if (isset($_SESSION['toggleprice'])) $orderby = "ORDER BY giaban" . $_SESSION['toggleprice'];
        else
            $orderby = $sethome->sort();


        include_once "locsim.php";
       //$num_rows = \elatic\num_rows("SELECT * FROM " . TABLE_SIM . " {$where}");






        $page = explode("page=", $_SERVER['REQUEST_URI']);
        $page = isset($page[1]) ? $page[1] : 1;

        $max = 60;
        $bg = ($page - 1) * $max;

        $sql = "SELECT * FROM " . TABLE_SIM . " {$where} {$orderby} limit $bg,$max";

        $result = \elatic\getSim($bg, $sql);

        $this->assign("data", $result['data']);


        $pages = new Paginator($result['total'], 9, array(
            $sethome->maxrow(),
            250,
            500));
        $paging = $pages->display_pages();


        $this->assign("paging", $paging);

        //$this->assign("nav", navmenu());

        $this->assign("thisdomain", thisdomain);
        //$this->registerFilter("output", "minify_html");

        $print_url = "index.php?ajax=home&page=" . $pages->current_page . "&print=true";
        $this->assign("print_url", $print_url);
        if (isset($_GET['print'])) {
            $this->assign("header", getPage('print_header'));


            $this->assign("footer", getPage('print_footer'));
            $this->display("print.htm");

        } else
            $this->display(temp_file);
    }


}
