<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-07 15:28:54
         compiled from "template/tbody.htm" */ ?>
<?php /*%%SmartyHeaderCode:3129756575dc3d5c669eed0-55175886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9a9830cf26d263d420c2b92835ac2a12a2da2bc' => 
    array (
      0 => 'template/tbody.htm',
      1 => 1548297701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3129756575dc3d5c669eed0-55175886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'thisdomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc3d5c6842b14_72689767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc3d5c6842b14_72689767')) {function content_5dc3d5c6842b14_72689767($_smarty_tpl) {?><tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>

<?php if (isset($_smarty_tpl->tpl_vars['row'])) {$_smarty_tpl->tpl_vars['row'] = clone $_smarty_tpl->tpl_vars['row'];
$_smarty_tpl->tpl_vars['row']->value = $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]; $_smarty_tpl->tpl_vars['row']->nocache = null; $_smarty_tpl->tpl_vars['row']->scope = 0;
} else $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']], null, 0);?>
<tr>
<!-- <td class="center "><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td> -->
<td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
"><strong class="font-15 sim"><?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
</strong></a></td>
<td class="font-13 sim-price" style="padding-right: 40px;"><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000));?>
</td>
<!-- <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['tong'];?>
</td> -->
<td  class=" text-center"><span class="network n<?php echo $_smarty_tpl->tpl_vars['row']->value['mang'];?>
"></span></td>

<td class=" text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
.html" class="btn"><img src="/data/images/image/datmua1.png" alt=""></a></td>
<!-- <td class="text-center"><a data-toggle="tooltip" title="Thêm <?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
 vào giỏ hàng" href="javascript://" class="addcart" data-sim="<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
" data-gia="<?php echo $_smarty_tpl->tpl_vars['row']->value['giaban'];?>
"><i class="glyphicon glyphicon-shopping-cart"></i></a></td> -->

</tr>

<?php endfor; endif; ?>
</tbody><?php }} ?>
