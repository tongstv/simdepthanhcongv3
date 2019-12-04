<?php

Header("Cache-Control: must-revalidate");

$offset = strtotime('+10 secconds'); // same as time() + 42 * 60 * 60
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", $offset) . " GMT";
Header($ExpStr);
class neworder extends db
{
    function xadd($sosim)
    {
    $str="";
    
	for ($i=0;$i < strlen($sosim);$i++)
	{
		if (strlen($sosim)==11)
		{
		if ($i==3|| $i==6 | $i==9)$str.="x";
		else $str.=$sosim[$i];
		}
		else 
		{
				if ($i==2 || $i==5 | $i==8)$str.="x";
		else $str.=$sosim[$i];	
		}
	}
    
	return $str;
	
    }
   function index()
   {
       global $stv;
        
        $stv->setTemplateDir(TEMPLATE);
        if($stv->lc()):
        if(isset($_GET['status']))$where="WEHRE status=".(int) $_GET['status'];
        else $where="WHERE status!=6";
        
        $result=$this->query("SELECT fullname, date_order, status, sosim FROM orders {$where} ORDER by id DESC limit 20");
        
        while($row=$result->fetch_array(MYSQLI_ASSOC))
        {
            
            $row['sosim']=$this->xadd($row['sosim']);
            $data[]=$row;
        }
        
        
        $stv->assign("data",$data);
        $result->free();
        $stv->display(temp_file);
        endif;
   }
    
}
?>