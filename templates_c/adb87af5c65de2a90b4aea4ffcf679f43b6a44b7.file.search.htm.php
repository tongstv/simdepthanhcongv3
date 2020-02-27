<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-05 21:35:19
         compiled from "template/search.htm" */ ?>
<?php /*%%SmartyHeaderCode:7517019575df1fc366b5795-39980582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adb87af5c65de2a90b4aea4ffcf679f43b6a44b7' => 
    array (
      0 => 'template/search.htm',
      1 => 1580913317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7517019575df1fc366b5795-39980582',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5df1fc3675cb83_88761110',
  'variables' => 
  array (
    'recommend' => 0,
    'name' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df1fc3675cb83_88761110')) {function content_5df1fc3675cb83_88761110($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['recommend']->value>0) {?>
  <?php echo $_smarty_tpl->getSubTemplate ('recommend-birthday.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['recommend']->value==-1) {?>
  <?php echo $_smarty_tpl->getSubTemplate ('recommend-birthday1.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<div class="panel panel-success">
  <div class="panel-heading">
    <h1 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?> <a target="_blank" href="?<?php echo smarty_modifier_replace($_SERVER['QUERY_STRING'],"do","ajax");?>
&print=true" class="pull-right glyphicon glyphicon-print"></a></h1>
  </div>
  <div class="panel-body mp0">
  <?php echo $_smarty_tpl->getSubTemplate ('locsim.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="table table-hover table-condensed">

<!-- <thead>
<tr>

<th class="active text-center ">STT</th>
<th class="active text-center">

Số sim


</th>
<th class="active sortprice">Giá Tiền <span class="glyphicon"> <a class="pricetoogle" href="javascript://">
<?php if (!isset($_SESSION['toggleprice'])) {?>
<span class="glyphicon-arrow-up"></span><span class="glyphicon-arrow-down"></span>
<?php } elseif ($_SESSION['toggleprice']=='ASC') {?>
<span class="glyphicon-arrow-up"></span>
<?php } else { ?>
<span class="glyphicon-arrow-down"></span>
<?php }?>

</a>


</span></th>
<th class="active text-center">Tổng</th>
<th class="active  text-center">Mạng</th>

<th class="active  text-center">Đặt Mua</th>
<th class="active"></th>
</tr>
</thead>
 -->
<?php echo $_smarty_tpl->getSubTemplate ('tbody.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<tfoot>
<tr>
<td colspan="8" class="text-right"><ul class="pagination pagination-sm"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</ul></td>
</tr>
</tfoot>
</table>

<?php echo $_smarty_tpl->getSubTemplate ('seo.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 </div>
</div><?php }} ?>
