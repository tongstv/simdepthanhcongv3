<?php


    $admdb=new db;

$result = $admdb->getAll("select * from page where page_code='slide'");



$slide = $result['page_detail'];


$stv->assign("slide1",$slide);

