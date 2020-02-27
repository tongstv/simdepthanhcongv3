<?php
$stv->minifyHtml = true;
$stv->setTemplateDir(TEMPLATE);
$stv->assign($txt->getPage('footer'));
$stv->assign("templates", TEMPLATE);

$replace = str_replace(array('<h4', '</h4>'), array('<h2', '</h2>'), getGroupNewfooter());
$stv->assign("newfooter", $replace);

$stv->assign("newfooter", getGroupNewfooter());
$stv->assign("loadtime", number_format(microtime(true) - $start_time, 2) . " s");
$stv->registerFilter("output", "minify_html");
$stv->assign("body", getconfig('body'));
#$stv->assign("menuloai", create_loai($loai['s'], $sloai));

if (isset($_SESSION['style']))
    $stv->assign("styleid", $_SESSION['style']);

$stv->assign("style", $style);;

$share['share']['link'] = urlencode("http://" . $_SERVER['HTTP_HOST'] . $_SERVER["REQUEST_URI"]);
$share['share']['img'] = urlencode("http://" . $_SERVER['HTTP_HOST'] . "/images/fb.jpg");
$share['share']['title'] = urlencode(substr($seo['title'], 0, 200));


function gettintuc($code)
{

    $cache_key = "tintuc_" . $code;


    if (cache($cache_key) === null):

        $db = new db;

        $res = $db->getAll("select * from page where page_group = (select id from pagegroup where groupcode ='" . $code . "') order by id DESC limit 20");

        $str = '<ul class="new">';

        foreach ($res AS $row) {


            // $img = cropimg2($row['page_detail'],104.34,74.09);


            if ($img) {


//       /     $img=cropimg2($row['page_detail']);
                $img = "<div style='width:30%; float:left'><img  alt='" . $row['page_title'] . "' src ='" . $img . "'></div>";
            } else
                $img = '';


            $str .= '<li style="overflow: hidden;list-style-type: none;height: 65px;border-bottom: 1px solid #f2f2f2;
    margin-bottom: 10px;"><a style="color: black;" href="/p/' . $row['page_url'] . '">' . $img . '<div style = "float:right;width:70%;line-height:13px">' . $row['page_title'] . '</div></a></li>';
        }
        $str .= '</ul>';

        cache($cache_key, $str, "+1 day", "cache/page");
    else:

        $str = cache($cache_key);

    endif;
    return $str;

}

function hotline_mb()
{

    $cache_key = "fff_";


    if (cache($cache_key) == null):

        $simdl = $db->getOne("select * from page where page_code='hotline_mb'");

        $hotline = (int)$simdl['page_detail'];

        cache($cache_key, $hotline, "+1 day", "cache/page");
    else:

        $hotline = cache($cache_key);

    endif;

    return $hotline;
    //echo ',,,,,,,,,,,,,,,,,,,,,,,,'.$hotline;
}


// $stv->assign("hotline_mb",hotline_mb());
$stv->assign("tintuc1", gettintuc("tkm"));
$stv->assign("tintucsodep1", gettintuc("tintuc"));

$stv->assign($share);
$stv->assign($config);
$stv->display("footer.htm");