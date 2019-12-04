<?php 
ini_set("display_errors",1);

/*
require "lessc.inc.php";
$less = new lessc;
$less->checkedCompile("less/bootstrap.less", "css/bootstrap.css");
*/

require 'less.php/Cache.php';
Less_Cache::$cache_dir = 'css';

$files = array();
$files['less/bootstrap.less'] = 'less';
$files['megamenu.less'] ='';
$files['menu.less']='';
$files['fix.less']='';
$files['fixcss.less']='';
$css_file_name = Less_Cache::Get( $files );


header('Content-type: text/css');
ob_start("compress");

    function compress( $minify ) 
    {
	/* remove comments */
    	$minify = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $minify );

        /* remove tabs, spaces, newlines, etc. */
    	$minify = str_replace( array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $minify );
    		
        return $minify;
    }


    include("css/".$css_file_name);
    include "fixstyle.css";
  
ob_end_flush();