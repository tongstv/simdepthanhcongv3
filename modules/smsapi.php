<?php
class smsapi extends db
{
 
    function index()
    {
        
        
                $pass='123';
                
                
                $password=isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
                $date=isset($_REQUEST['date']) ? $_REQUEST['date'] : "";
                $sender=isset($_REQUEST['sender']) ? $_REQUEST['sender'] : "";
                $msg=isset($_REQUEST['msg']) ? urldecode($_REQUEST['msg']) : "";
                $oldsms=isset($_REQUEST['oldsms']) ? $_REQUEST['oldsms'] : "";
                
                $keyword=strtolower($msg);

switch($keyword)
{
    case 'matkhau';
    {
        $json=@file_get_contents("http://dataviettel.com/qmk.php?sender=".$sender."");
        $json=json_decode($json);
        if($json->status=='OK')
        {
            $sms['s']['sms_sender']="dataviettel.com";
            $sms['s']['sms_to']=$sender;
            $sms['s']['sms_msg']=$json->msg;

        }
        else
        {
            $sms['s']['sender']="dataviettel.com";
            $sms['s']['sms_to']=$sender;
            $sms['s']['sms_msg']="Xin vui long thuc hien lai, he thong qua tai len chua gui duoc mat khau!";
        }
       $this->query_insert("sms",$sms['s']);
    }
}


                
                if ($msg!=null)
                {
                if (isset($password) && isset($date) && isset($sender) && isset($msg) && $password==$pass)
                {
                	
                		
                		if ($oldsms!='[]')
                		{
                			$old=json_decode($oldsms,true);
                			
                			foreach ($old as &$var)
                			{
                			$date1=$var['date'];
                			$sender1=$var['sender'];
                			$msg1=urldecode($var['message']);
                			$this->query("INSERT into sms(sms_date, sms_sender, sms_msg, sms_staus) VALUES ('".$date1."', '".$sender1."', '".$msg1."', 2)");
                			}		
                		}
                		
                		
                		
                	
                	$this->query("INSERT into sms(sms_date, sms_sender, sms_msg, sms_staus) VALUES ('".$date."', '".$sender."', '".$msg."', 2)");
                	
                	$result=1;
                }
                else 
                $result=0;
                
                echo'{"result":'.$result.'}';
                file_put_contents("cache/log.txt",json_encode($_REQUEST));
                }
                elseif ($password!=null)
                {
                if ($pass==$password)
                {
                	$sql=$this->query("SELECT * FROM sms WHERE sms_to!='' AND sms_staus=0 and sms_del=0 order by id ASC");
                	
                    $str="";
                	while ($row=$sql->fetch_array(MYSQLI_ASSOC))
                	{
                		$ids[]=$row['id'];
                		$json['receiver']=$row['sms_to'];
                		$json['message']=$row['sms_msg'];
                		$str[]=$json;
                	}
                	$date=date('H:i:s - d/m/Y');
                    $sql->free();
                    
                	$this->query("UPDATE sms SET sms_staus=1, sms_date='$date' WHERE id IN(".@join(",",$ids).")");
                    
                    
                	if (is_array($str))
                	echo json_encode($str);
                }
                }
                        
        
        
    }   
}