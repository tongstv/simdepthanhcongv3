<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-12-14 14:21:18
         compiled from "template/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:2391288955df1f975784634-15722978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c7211bab6057aac4813e25c5efcef281a5ff728' => 
    array (
      0 => 'template/header.htm',
      1 => 1576308077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2391288955df1f975784634-15722978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5df1f9758125d5_93511570',
  'variables' => 
  array (
    'title' => 0,
    'pagex' => 0,
    'desktop' => 0,
    'des' => 0,
    'keyword' => 0,
    'thisdomain' => 0,
    'header' => 0,
    'cartcount' => 0,
    'banner' => 0,
    'b' => 0,
    'menu' => 0,
    'timtheogia' => 0,
    'quangcaotrai' => 0,
    'quangcao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df1f9758125d5_93511570')) {function content_5df1f9758125d5_93511570($_smarty_tpl) {?><!DOCTYPE html>

<html lang="vi">
<head>
  <title>
  <?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['pagex']->value)) {?> - Trang <?php echo $_smarty_tpl->tpl_vars['pagex']->value;
}?>
 
  <?php }?>
  
</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="content-language" content="vi" />
  <link rel="shortcut icon" href="/data/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/data/favicon.ico" type="image/x-icon">

  <?php if ($_smarty_tpl->tpl_vars['desktop']->value>0) {?>

  <meta name="viewport" content="width=1024">
  <style>
  width: 970px !important;  
</style>
<?php } else { ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php }?>
<meta name="msvalidate.01" content="072971223E503F2C483AE9B17ED15621" />
<meta name="description" content="<?php if (isset($_smarty_tpl->tpl_vars['des']->value)) {
echo $_smarty_tpl->tpl_vars['des']->value;?>
 - Trang <?php echo $_smarty_tpl->tpl_vars['pagex']->value;
}?>">
<meta name="keywords" content="<?php if (isset($_smarty_tpl->tpl_vars['keyword']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
 <?php }?>">

<base href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
" rel="dofollow">

<link href="/template/css/css.php" rel="stylesheet">
<link href="/style.css" rel="stylesheet">

    <meta name="google-site-verification" content="_DG9IEacKUDHngFePLPcF-1URwYC2omfuPKDd89PIeo" />
<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<meta property="og:site_name" content="tongkhosim.com"><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/data/fb.jpg">

</head>

<body>

  <div id="o-wrapper" class="o-wrapper">
    <div class="navbar-default navbar-fixed-top visible-xs visible-sm">
      <div class="container-fluid">
       <div class="navbar-header">

         <button type="button" class="navbar-toggle pull-left leftmenu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

        </button>
        <div class="menutop">
         <a rel="dofollow"  href="/"><span class="stv-home"></span>Trang chủ</a>

         <a rel="nofollow"  href="/p/thanh-toan"><span class="stv-credit-card"></span> Thanh toán</a>
         <a rel="nofollow"  href="/p/lien-he">
           <span class="stv-envelop"></span> Liên hệ
         </a>
       </div>
       <style>
       .menutop
       {
        text-align: right;
        float: left;
      }
      .menutop a{
       margin-left: 8px;
       font-size: 14px;
       color: #FFFF00;
     }
     @media (max-width:320px)
     {
      .menutop a{

       font-size: 11px;
     }

   }
       .btn-datmua
       {
           background: transparent url("/data/images/image/datmua1.png");
           width: 93px;
           height: 32px;
           display: block;
           margin: 0 auto;
           margin-top: 5px;
       }
 </style>
 <button type="button" class="navbar-toggle rightmenu pull-right">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>


</button>
</div>





</div>







</div>
<div class="clearfix" style="line-height: 6px; background-color: white;"></div>
<div class="tophotline" style="display: none;">

  <div class="container navbar-collapse collapse">


    <div class="cart">
      <a rel="nofollow"  href="javascript://" class="addcart">
        <i class="glyphicon glyphicon-shopping-cart font-12"></i> GIỎ HÀNG <span class="badge" id="cart"><?php if (isset($_smarty_tpl->tpl_vars['cartcount']->value)) {
echo $_smarty_tpl->tpl_vars['cartcount']->value;
}?></span>
      </a>

    </div>
  </div>
</div>
<div class="clearfix"></div>

<div class="container-fluid">
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

      </div>
    </div>
  </div>
</div>


<div class="container">

 <?php if (isset($_smarty_tpl->tpl_vars['banner']->value['detail'])) {?> <?php echo $_smarty_tpl->tpl_vars['banner']->value['detail'];?>
 <?php }?>


<div class="container">

  <nav class="navbar-collapse collapse clearfix" role="navigation" id="menuleft">

   <div role="navigation" class="navbar-collapse" >
    <ul class="nav navbar-nav navbar-left-fix text-left">

      <li><a href="/">Trang chủ</a></li>
      <li><a rel="nofollow" href="/p/gioi-thieu">Giới thiệu</a></li>
      <li><a rel="nofollow" href="/p/thanh-toan">Thanh toán</a></li>                 
      <li>
        <a rel="nofollow" href="/p/lien-he">Liên hệ</a>
      </li>
      <li class="dropdown" style="text-align: left;">
        <a>Tin tức <span class="caret"></span></a> 
        <ul class="dropdown-menu">
          <li><a href="/tin-tuc-sim-so-dep.html">Tin tức sim số đẹp</a></li>
          <li><a href="/tin-tuc-tong-hop.html">Tin tức</a></li>
          <li><a href="/tin-khuyen-mai.html">Tin khuyến mãi</a></li>
        </ul>
      </li>



    </ul>
    <form class="navbar-form navbar-right hidden" action="/index.php">
     <input type="hidden" name="do" value="search">
     <div class="input-group" style="max-width: 200px;"><input name="sim" type="text" class="form-control" placeholder="Nhập số sim cần tìm!"><span class="input-group-btn"><button class="btn btn-success"><i class="glyphicon glyphicon-search"></i></button></span></div>
   </form>
 </div>
</nav>



  <div class="container" id="b"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</div>


<div class="row">

  <div class="col-md-6 main-page">
    <div class="panel-heading"><h2 class="box-title" style="margin-bottom: 0px; margin-top: 0px;">
      <span class="icon-ds">
        <span class="text">Tìm kiếm</span>
      </span>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('search_box.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>


  <div class="col-md-3 right-page hidden-xs">

    <div class="panel panel-primary">
        <div class="panel-body sns-wrap">
            <h4 class="sns-text">TÌM SIM <br> THEO NGÀY SINH</h4>
            <form method="GET" id="nsF" action="index.php">
                <input name="do" value="search" type="hidden">
                <input id="date" name="date" value="" type="hidden">
                <div class="form-group dn-group">
                    <label style="width: 100%;">Ngày / Tháng / Năm</label>
                    <select id="d">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select id="m">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <select id="y">
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 text-center p-0" style="padding: 0px !important;"><label> <input name="dtp" value="0" type="radio"> Tất cả</label> <label> <input name="dtp" value="2" type="radio" checked> DD/MM/YY</label> <label> <input name="dtp" value="1" type="radio" class="">YYYY</label></div>
                    <div class="col-xs-12 text-center margin-top"><input class="btn btn-primary btn-sm btn-blue" value="Tìm sim" type="submit" id="nsSubmit"></div>
                </div>
                <input name="submit" value="true" type="hidden">
            </form>
        </div>
    </div>

  </div>
</div>



<div class="clearfix"></div>

<div class="row" style="margin-top: 15px !important;">
  <div class="col-md-3 left-page visible-md visible-lg">




    <div class="panel panel-success hidden-xs">
      <div class="panel-heading">
        <h2 class="panel-title"><span class="glyphicon glyphicon-search"></span>Danh sách mạng</h2>
      </div>
      <div class="panel-body"  id="menutop">
        <nav>
          <ul class="mang" style="margin: 0; padding: 0;">
            <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

          </ul>

        </nav>


      </div>
    </div>


<!--



<div class="panel panel-success">
  <div class="panel-heading">
    <h6 class="panel-title"> <i class="glyphicon glyphicon-search"></i>Tìm sim theo giá tiền</h6>
  </div>
  <div class="panel-body">
    <div class="timtheogia">
    
    <?php echo $_smarty_tpl->tpl_vars['timtheogia']->value['detail'];?>

   
 </div>
  </div>
</div>
-->

<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-search"></span>Sim Theo Giá</h2>
  </div>
  <div class="panel-body" >

    <ul class="loaisim">
      <li>    <a class="list-group-item lgit" href="/sim-theo-gia/duoi-500-nghin.html">Sim dưới 500 nghìn</a></li>


      <li><a href="/sim-theo-gia/tu-500-nghin-den-1-trieu.html">Sim giá 500 - 1 triệu</a></li>
      <li><a href="/sim-theo-gia/tu-1-trieu-den-3-trieu.html">Sim giá 1 - 3 triệu</a></li>
      <li><a href="/sim-theo-gia/tu-3-trieu-den-5-trieu.html">Sim giá 3 - 5 triệu</a></li>
      <li><a href="/sim-theo-gia/tu-5-trieu-den-10-trieu.html">Sim giá 5 - 10 triệu</a></li>
      <li><a href="/sim-theo-gia/tu-10-trieu-den-50-trieu.html">Sim giá 10 - 50 triệu</a></li>
      <li><a href="/sim-theo-gia/tu-50-trieu-den-100-trieu.html">Sim giá 50 - 100 triệu</a></li>
      <li><a href="/sim-theo-gia/tu-100-trieu-den-200-trieu.html">Sim 100 - 200 triệu</a></li>
      <li><a href="/sim-theo-gia/tren-200-trieu.html">Sim trên 200 triệu</a></li>
    </ul>


  </div>
</div>




<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title"><i class="glyphicon glyphicon-search"></i> Sim theo phong thủy</h2>
  </div>
  <div class="panel-body">

    <form method="GET" action="index.php">
      <input name="do" value="search" type="hidden" />
      <div class="form-group">
       <label>Tổng nút</label>
       <input name="tongnut" class="form-control input-sm" placeholder="Tổng nút 1-10" type="text">
     </div>
     <div class="form-group">
       <label>Tổng điểm</label>
       <input name="tongdiem" class="form-control input-sm" placeholder="Tổng điểm < 81" type="text">
     </div>
     <div class="row form-group" style="font-size: 11px; font-weight: normal;">
					<!-- <div class="col-xs-12 text-center">
						<label><input name="type" checked="checked" value="0" type="radio"> Tất cả</label> 	<label><input name="type" value="09" type="radio"> 10 Số</label> <label><input name="type" value="01" type="radio"> 11 Số</label> 
					</div> -->
					<div class="col-xs-12 text-center margin-top"><input class="btn btn-success" value="Tìm sim" type="submit"></div>
				</div>
        <input type="hidden" name="submit" value="true" />
      </form>
    </div>
  </div>


  <div class="panel panel-success">
    <div class="panel-heading">
      <h6 class="panel-title"> <i class="glyphicon glyphicon-search"></i> Tìm sim năm sinh</h6>
    </div>
    <div class="panel-body">
     <form method="GET" action="index.php">
       <input name="do" value="search" type="hidden" />
       <div class="form-group">
         <label>Chọn ngày</label>
         <input name="date" type="text" class="form-control input-sm datepicker" placeholder="dd/mm/yyyy" type="text">
       </div>
       <div class="row form-group">
         <div class="col-xs-12 text-center">
          <label> <input name="dtp" checked="checked" value="0" type="radio"> Tất cả</label> <label> <input name="dtp" value="2" type="radio"> dd/mm/yy</label> <label> <input name="dtp" value="1" type="radio"> 19xx</label> 
        </div>
        <div class="col-xs-12 text-center margin-top"><input class="btn btn-success" value="Tìm sim" type="submit"></div>
      </div>
      <input name="submit" value="true" type="hidden" />
    </form>
  </div>
</div>

<!-- <div class="panel panel-success visible-lg visible-md">
  <div class="panel-heading">
    <h6 class="panel-title"> <i class="glyphicon glyphicon-shopping-cart"></i> ĐƠN ĐẶT HÀNG</h6>
  </div>
  <div class="panel-body mp0">
   <div id="order"></div>
  </div>
</div> -->

<!-- <div class="panel panel-success hidden-xs">
  <div class="panel-heading">
    <h6 class="panel-title"><i class="glyphicon glyphicon-star-empty"></i> <?php echo $_smarty_tpl->tpl_vars['quangcaotrai']->value['title'];?>
</h6>
  </div>
  <div class="panel-body mp0">
   <?php echo $_smarty_tpl->tpl_vars['quangcaotrai']->value['detail'];?>

  </div>
</div>


<div class="panel panel-success visible-lg visible-md">
  <div class="panel-heading">
    <h2 class="panel-title"><i class="glyphicon glyphicon-star-empty"></i> <?php echo $_smarty_tpl->tpl_vars['quangcao']->value['title'];?>
</h2>
  </div>
  <div class="panel-body mp0">
  <?php echo $_smarty_tpl->tpl_vars['quangcao']->value['detail'];?>

  </div>
</div> -->



</div>
<div class="col-md-6 main-page">
  <div>
<?php }} ?>
