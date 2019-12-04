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
        

            

                    $cache_key="simmoi";

                    if(cache($cache_key) === null):

        $db = new db;
        
        $simdl = $db->getOne("select * from page where page_code='getsimmoi'");

        $simdl2 = (int) $simdl['page_detail'];
        //echo ',,,,,,,,,,,,,,,,,,,,,,,,'.$simdl2;


        $result = $db->getAll("select * from simso WHERE simdl=".$simdl2." limit 36");
        
        
        foreach($result AS $row)
        {
            
            
            
            $data[]=$row;
        }

        cache($cache_key,serialize($data),"+1 hour","cache/page/");
    else:

            $data=unserialize(cache($cache_key));
    endif;
        
        return $data;
        
        
    }
    
    
    function index()
    {
        $this->setTemplateDir(TEMPLATE);
       //  $this->minifyHtml = true; 
        $this->lc();
        global $db;
                         

               
        
        
        $this->assign("simkm",$this->gesimhome());
        
        //$this->assign("menu",menu(1));
        
        $seobai=getpagebylink();
        
      
   $this->assign("seobai",$seobai);
   
    $sethome = new sethome();
  
    

        $where=$sethome->index();

        if(isset($_SESSION['simtype']))$where.=$_SESSION['simtype'];


      //  $paging .= $pages->display_jump_menu();
        if(isset($_SESSION['toggleprice']))$orderby="ORDER BY giaban".$_SESSION['toggleprice'];
        else
        $orderby=$sethome->sort();

        
        include_once "locsim.php";
                $num_rows = num_rows_cache("SELECT count(*) AS num_rows FROM ".TABLE_SIM." {$where}");
        
        $pages = new Paginator($num_rows, 9, array(
           $sethome->maxrow(),
            250,
            500));

        $paging = $pages->display_pages();
        
        

                
        $sql = "SELECT sim1, sim2, giaban, mang, tong FROM " . TABLE_SIM .
            " {$where} {$orderby} limit $pages->limit_start,$pages->limit_end";



        if ($pages->current_page == 1)
            $i = 0;
        else
            $i = $pages->limit_start;
        $this->assign("data", getSim($i, $sql));

        $this->assign("paging", $paging);

        $this->assign("nav",navmenu());

        $this->assign("thisdomain", thisdomain);
        //$this->registerFilter("output", "minify_html");
        
        $print_url="index.php?ajax=home&page=".$pages->current_page."&print=true";
        $this->assign("print_url",$print_url);
        if(isset($_GET['print']))
        {
        $this->assign("header",getPage('print_header'));
        
      
        $this->assign("footer",getPage('print_footer'));
        $this->display("print.htm");
        
        }
        else
        $this->display(temp_file);
    }
    

}
