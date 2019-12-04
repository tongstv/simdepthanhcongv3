<?php

if(isset($_GET['test']) || $_SESSION['test'])
{
    print_r($_REQUEST);
    $_SESSION['test']=1;
}
$stv->minifyHtml = true; 









if(isset($_GET['desktop']) AND $_GET['desktop']==1)
$_SESSION['desktop']=1;
else if(isset($_GET['desktop']) AND $_GET['desktop']==2)
{
    setcookie("desktop","",time()-1);
    unset($_SESSION['desktop']);
}

$stv->assign('desktop',isset($_SESSION['desktop']) ? $_SESSION['desktop'] :0);
$stv->setTemplateDir(TEMPLATE);
$stv->assign($txt->getPage('header'));
$stv->assign("new",getNewIngroup(9));
$stv->assign("cartcount",isset($_SESSION['mycart']) ? count($_SESSION['mycart']) : 0);
$stv->assign("menu",menu(1));
$stv->assign("top_menu",stvmenu(18,"class=\"nav navbar-nav\""));
function create_loai($loai,$sloai)
{

   $str="";
    foreach ($loai AS $link_url => $link_name)
    {
     
        $str.="<li><a href='".$link_url.".html'>".$link_name."</a>
        ";

           
    }
    return $str;
}
$stv->assign("menuloai",create_loai($loai['s'],$sloai));
$stv->assign("thisdomain",thisdomain);
$stv->assign("nav",navmenu());
$stv->assign("templates",TEMPLATE);


    function seo($url,$array1,$array2)
    {
     
        if(isset($_GET['do']) AND $_GET['do']=='search')
        {
            
            global $loai;
       
      
            if(isset($_GET['notype']) AND $_GET['notype']==1)
            {
              
                if(isset($_GET['dang']) AND isset($_GET['network']))
                {
                            $txt="Mua ".$loai['s'][$_GET['dang']]." đầu số ".str_replace("*","",$_GET['sim'])." mạng ".$_GET['network']." giá rẻ nhất tại Tổng Kho Sim";
                $des="Kho sim số đẹp, sim điện thoại ".$loai['s'][$_GET['dang']]." đầu số ".str_replace("*","",$_GET['sim'])." ".$_GET['network']." giá rẻ nhất hiện nay chỉ có tại Tổng Kho Sim. Giao sim toàn quốc, Đăng ký chính chủ. LH: 0912.76.76.76 - 0961.76.76.76";
                  
                }
                else if(isset($_GET['network']))
                {
                   
                                    $txt="Mua sim đầu số ".str_replace("*","",$_GET['sim'])." ".$_GET['network']." giá rẻ tại Tổng Kho Sim";
                
                $des="Kho sim số đẹp, sim điện thoại đầu số ".str_replace("*","",$_GET['sim'])." ".$_GET['network']." giá rẻ nhất hiện nay chỉ có tại Tổng Kho Sim. Giao sim toàn quốc, Đăng ký chính chủ. LH: 0912.76.76.76 - 0961.76.76.76";
                }
                else
                {
                   $url=$_SERVER["REQUEST_URI"];
                 $url=str_replace('/dau-so/','',$url);
                $url=explode('-',$url);
                
                   
                                            $txt="Mua sim đầu số ".$url[1]." ".$_GET['network']." giá rẻ tại Tổng Kho Sim";
                
                $des="Kho sim số đẹp, sim điện thoại đầu số ".$url[1]." ".$url[0]." giá rẻ nhất hiện nay chỉ có tại Tổng Kho Sim. Giao sim toàn quốc, Đăng ký chính chủ. LH: 0912.76.76.76 - 0961.76.76.76";
               
                }

            }
         
         
       //     
//            if(!empty($_GET['sim']))$txt[]=$_GET['sim'];
//            
//            if(isset($_GET['giatu']))$txt[]="Giá từ: ".$_GET['giatu'];
//            if(isset($_GET['den']))$txt[]="Đến: ".$_GET['den'];
//            $r['title']=@join(" ",$txt);
$r['title']=$txt;
$r['des']=$des;
            return $r;
        }
        else if(isset($_GET['do']) AND $_GET['do']=='page.view')
        {
            $r=seopage();
            return $r;
        }
        
        $r=array();
        $url=preg_replace('/(\?page=)([0-9]*)/','',$url);
        
        $domain=$_SERVER['HTTP_HOST'];
        
        $url="http://".$domain.$url;
        
        if(isset($_GET['do']))$do=$_GET['do'];
        else $do="";
        if($do=='ordered')
        {
        $url='datmuasim';
        $cache_key=md5($url);
        }
        if(empty($cache_key))
        $cache_key=md5($url);
        
        $data=cache($cache_key,NULL,"+1 year","cache/seo/");
        

        if(empty($data))
        {
            if(test==1)echo "Chưa hoạt động seo cache";
            $db=new db; 
            
                $row=$db->getOne("SELECT title, des, keyword FROM seo where url='".$url."' limit 1");
              
                
                if($url!='datmuasim')
                {
                $r['title']=str_replace($array1,$array2,$row['title']);
                $r['des']=str_replace($array1,$array2,$row['des']);
                $r['keyword']=str_replace($array1,$array2,$row['keyword']);
                }
                else
                {
                $r['title']=$row['title'];
                $r['des']=$row['des'];
                $r['keyword']=$row['keyword'];  
                }
           
                


            $data=serialize($r);
            
            cache($cache_key,$data,"+1 year","cache/seo/");
        }
        
        if($url=='datmuasim')
        {
            $seo=unserialize($data);
            $seo['title']=str_replace($array1,$array2,$seo['title']);
            $seo['des']=str_replace($array1,$array2,$seo['des']);
            
            return $seo;
        }
        
        return unserialize($data);
        
    }
//$stv->assign($txt->getPage('footer'));

$stv->assign("groupNew",getGroupNew());
$array1=array("#sim#");
$getsosim=isset($_GET['sosim']) ? $_GET['sosim'] : "";

$array2=array($getsosim);
$stv->assign("header",getconfig('header'));
$seo=seo($_SERVER['REQUEST_URI'],$array1,$array2);

$stv->assign($seo);



if(!isset($_SESSION['fx']))
{
    $stv->assign("fxon",1);
    $_SESSION['fx']=1;
}
function breadcrumb()
{
    $link=array();
    global $loai,$seo;
    $get=$_GET;

    $link[]=array('Trang chủ',thisdomain);
    
    if(isset($_GET['sosim']))
    
    $link[]=array($get['sosim'],"/".$get['sosim'].".html");
    
    if(isset($get['do']) AND $get['do']=='page.view')
    {
        $link[]=array($seo['title'],"/p/".$get['page_url']);
    }
    if($_GET['notype'])
    {
        $dau=str_replace("*","",$get['sim']);
        
        if($get['notype']==1)
        {
        
        if(($get['network'] && $get['dang']) && $get['sim'])
        {
            $link[]=array("Sim Vinaphone","/chon-mang/".$get['network']);
            $link[]=array("Đầu số ".$dau,"/chon-mang/".$get['network']."/dau-so/".$dau."");
            $link[]=array($loai['s'][$get['dang']]." ".$dau,"/chon-mang/".$get['network']."/dau-so/".$dau."/".$get['dang']."");
            
        }
        else if($get['network'])
        {
                  $link[]=array("Sim ".$get['network'],"/chon-mang/".$get['network']);
             $link[]=array("Đầu số ".$dau,"/chon-mang/".$get['network']."/dau-so/".$dau."");
        }
        
        else
        {
              $link[]=array("Đầu số ".$dau,$_SERVER["REQUEST_URI"]);  
        }
        
        
        }
        
        else
        {
              $link[]=array("Đầu số ".$dau,$_SERVER["REQUEST_URI"]);  
        }
    }
    if(isset($_GET['network']) AND isset($_GET['type']))
    {
        
        $link[]=array($loai['s'][$get['type']],"/".$get['type'].".html");
        
              $link[]=array($loai['s'][$get['type']]." ".$get['network'],"/".$get['type']."/".$get['network'].".html");
    }
    else if( isset($_GET['type']))
    {
           $link[]=array($loai['s'][$get['type']],"/".$get['type'].".html");
    }

    foreach($link AS $item)
    {
        
        $b[]="<a href=\"".$item[1]."\">".$item[0]."</a>";
    }
    
    
return join(" >> ",$b);    
    
}

$stv->assign("b",breadcrumb());
include_once "my_model/cus_header.php";
$stv->registerFilter("output", "minify_html");


$uri = $_SERVER["REQUEST_URI"];
if(stristr($uri,"page"))
{
    $page = explode("page=",$uri);
    $stv->assign("pagex",$page[1]);
}



$stv->display("header.htm");
?>