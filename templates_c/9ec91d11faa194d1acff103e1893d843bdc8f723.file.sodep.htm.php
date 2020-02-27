<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-12-12 15:30:06
         compiled from "template/sodep.htm" */ ?>
<?php /*%%SmartyHeaderCode:15166183435df1fa8e45bf14-38794569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ec91d11faa194d1acff103e1893d843bdc8f723' => 
    array (
      0 => 'template/sodep.htm',
      1 => 1576138662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15166183435df1fa8e45bf14-38794569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'print_url' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5df1fa8e4a4473_26252131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df1fa8e4a4473_26252131')) {function content_5df1fa8e4a4473_26252131($_smarty_tpl) {?>
<div class="panel panel-success">
  <div class="panel-heading">
    <h1 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>     <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['print_url']->value;?>
" class="pull-right glyphicon glyphicon-print"></a></h1>

  </div>
  <div class="panel-body mp0">
  <?php echo $_smarty_tpl->getSubTemplate ('locsim.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="table table-hover table-condensed">

<!-- <thead>
<tr>

<th class="active center ">STT</th>
<th class="active">

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
<th class="text-center active">Tổng</th>
<th class="active  text-center">Mạng</th>
<th class="active  text-center">Đặt Mua</th>
<th class="active"></th>
</tr>
</thead> -->

<?php echo $_smarty_tpl->getSubTemplate ('tbody.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<tfoot>
<tr>
<td colspan="7" class="text-right"><ul class="pagination pagination-sm"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</ul></td>
</tr>
</tfoot>
</table>
<?php echo $_smarty_tpl->getSubTemplate ('seo.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 </div>
</div>
<?php }} ?>
