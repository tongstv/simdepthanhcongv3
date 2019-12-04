<?php
header('Content-type: image/png');
$hotline="";
$domain="simdepthanhcong.com";


$sim=isset($_REQUEST['sim']) ? $_REQUEST['sim'] : "0914779999";
$gia=isset($_REQUEST['gia']) ? $_REQUEST['gia'] : "300000000";

$gia=number_format($gia,0,',','.');


readfile("http://img.stv.vn/img.php?text3=".$domain."&text4=".$hotline."&text1=".$sim."&text2=Gi%C3%A1:%20".$gia."%20%C4%91&left3=250&domain=".$domain."&type=jpg");


?>