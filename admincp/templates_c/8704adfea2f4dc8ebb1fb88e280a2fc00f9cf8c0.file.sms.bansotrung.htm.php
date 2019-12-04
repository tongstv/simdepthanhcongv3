<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-21 13:24:27
         compiled from "/usr/local/lib/php/app/adm/templates/sms.bansotrung.htm" */ ?>
<?php /*%%SmartyHeaderCode:17557129895d5ce39bbebc40-78286152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8704adfea2f4dc8ebb1fb88e280a2fc00f9cf8c0' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/sms.bansotrung.htm',
      1 => 1439977335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17557129895d5ce39bbebc40-78286152',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5ce39bc2b7e1_50086934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5ce39bc2b7e1_50086934')) {function content_5d5ce39bc2b7e1_50086934($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Tạo list bán số trùng</h2>
  </div>
  <div class="panel-body">
  <form method="post">
	<div style="text-align: center">
		<textarea name="list" style="height: 206px; width: 356px">0935790888=6tr
0906671888=6tr
</textarea><br />
		<textarea name="list2" style="width: 359px; height: 209px" >Chào A/C em có số sim
#sim# giá #gia#
Giống với số A/C đang dùng A/C có nhu cầu mua để dùng 2 số sms lại em để giá tốt cho A/C</textarea></div>
		<input name="tao" type="submit" value="Tạo tin nhắn" style="height: 26px" /><input name="d" type="radio" value="1" checked="checked" />Vina<input name="d" type="radio" style="width: 20px" value="2" />Mobil<input name="d" type="radio" value="3" />Viettel<br />
		<br />

</form>
  </div>
</div><?php }} ?>
