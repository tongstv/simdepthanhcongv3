<?php

class tintuc extends SmartyBC
{


    function index()
    {
        
       

        $db = new db;


        $this->setTemplateDir(TEMPLATE);


        $group = isset($_REQUEST['g']) ? $_REQUEST['g'] : 12;


        $name = $db->getOne("select * from pagegroup where id=" . $group);


        $this->assign("title", $name['groupname']);


        $where = "WHERE page_group =" . $group;


        if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {

            $keyword = trim($_GET['keyword']);

            $filed[] = "fullname";


            foreach ($filed as $file_name) {

                $like[] = $file_name . " LIKE '%" . $keyword . "%'";

            }

            $where = "WHERE (" . @join(" || ", $like) . ")";

        }


        $num_rows =$db->getOne("select COUNT(*) AS num_rows FROM page $where");
        $num_rows= $num_rows['num_rows'];


        $pages = new Paginator($num_rows, 9, array(

            12,

            100,

            250,

            'All'));


        $data = $db->getAll("SELECT * FROM page $where order by id DESC LIMIT $pages->limit_start,$pages->limit_end");


        $i = 0;

        $data2 = "";

        foreach ($data as $row) {

            $i++;

            $row['stt'] = $i;


            preg_match_all('/<img[^>]+>/i', $row['page_detail'], $img);


            if (isset($img[0][0])) {

                $row['img'] = $img[0][0];

            }


            $row['page_title'] = preg_replace("/\n\s+/", "\n", rtrim(html_entity_decode(strip_tags
                ($row['page_title']))));

            $row['page_detail'] = preg_replace("/\n\s+/", "\n", rtrim(html_entity_decode(strip_tags
                ($row['page_detail']))));

            $data2[] = $row;

        }


        $this->assign("data", $data2);


        $this->assign("paging", $pages->display_pages());


        $this->display('tintuc.htm');

    }


}
