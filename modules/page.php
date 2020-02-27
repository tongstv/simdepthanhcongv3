<?php
/**
 * @author stv.vn
 * @copyright 2014
 */

class page extends Smarty
{

    function morepage($gid)
    {

        $cache_key = "more" . $gid;

        $data = cache($cache_key, NULL, "+1 year", "cache/page/");

        if (empty($data)) {
            $db = new db;

            $data = $db->getAll("SELECT page_title, page_url, page_pos FROM page WHERE page_group=" . $gid . " ORDER BY page_pos ASC");


            $data = serialize($data);
            cache($cache_key, $data, "+1 year", "cache/page/");
        }

        return @unserialize($data);

    }

    function view()
    {

        $this->setTemplateDir(TEMPLATE);

        $db = new db;

        $seobai = getpagebylink();


        $this->assign("seobai", $seobai);


        $key = md5($_GET['page_url']);
        $cache=cache($key);
        $row = unserialize($cache);

        if ($cache == null) {

            $query = $db->query("SELECT * FROM page WHERE page_url='" . $_GET['page_url'] . "' limit 1");


            $row = $query->fetch_array(MYSQLI_ASSOC);
            $query->free();
            cache($key,serialize($row),"+1 day");

        }


        $row['page_detail'] = str_replace('<img alt=""', '<img alt="' . $row['page_title'] . '" ', $row['page_detail']);
        $this->assign($row);



        $this->assign("more", $this->morepage($row['page_group']));
        $this->registerFilter("output", "minify_html");
        if ($this->lc()) $this->display(temp_file);
    }

    /** view **/
    function index()
    {
        global $db;
        $this->setTemplateDir(TEMPLATE);
        /**
         *
         * $where="";
         * $num_rows=$db->num_rows("select COUNT(*) AS num_rows FROM ".__CLASS__." $where");
         *
         *
         *
         * $pages = new Paginator($num_rows,9,array(25,50,100,250,'All'));
         *
         *
         * $data=$db->fetch_all_array("SELECT * FROM ".__CLASS__." $where LIMIT $pages->limit_start,$pages->limit_end");
         *
         * $this->assign("data",$data);
         *
         * $this->assign("paging",$pages->display_pages());
         **/
        $this->registerFilter("output", "minify_html");
        $this->display(temp_file);
    }

    function code()
    {
        global $db;

        /** Code here ***/


        $this->display(temp_file);
    }

    function yeucau()
    {
        global $db;

        /** Code here ***/


        $this->display(temp_file);
    }

    function del()
    {
        global $db;
        // $db->query("DELETE FROM ".__CLASS__." WHERE id=".(int) $_GET['id']);
        /** Code here ***/

    }
}