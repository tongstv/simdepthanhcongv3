<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-12-12 16:18:33
         compiled from "template/print.htm" */ ?>
<?php /*%%SmartyHeaderCode:15799054705df205e9931956-86051060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1016cf2b7c56a99291bb56f10d51690e097b399' => 
    array (
      0 => 'template/print.htm',
      1 => 1576138668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15799054705df205e9931956-86051060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'data' => 0,
    'row' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5df205e99a0fa3_91588974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df205e99a0fa3_91588974')) {function content_5df205e99a0fa3_91588974($_smarty_tpl) {?>
<table>
<tr>
<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['header']->value['print_header']['detail'];?>
</td>
</tr>
<tr>
<td><table>
<thead>
    <tr>
    
  <th><center>STT</center></th>
    <th>Số sim</th>
    <th>Giá tiền</th>
    </tr>

</thead>


<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=50) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<?php if ($_smarty_tpl->tpl_vars['row']->value['sim1']) {?>
<tr>
<td><center><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</center></td>
<td><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
</strong></td>
<td><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000));?>
</td>

</tr>
<?php }?>
<?php endfor; endif; ?>
</table></td>
<?php if ($_smarty_tpl->tpl_vars['data']->value[50]) {?>
<td style="width: 200px;"></td>
<td><table>
<thead>
    <tr>
    
    <th><center>STT</center></th>
    <th>Số sim</th>
    <th>Giá tiền</th>

    </tr>

</thead>


<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = (int) 50;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=100) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max']);
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
<?php if ($_smarty_tpl->tpl_vars['row']->value['sim1']) {?>
<tr>
<td><center><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</center></td>
<td><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
</strong></td>
<td><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000));?>
</td>

</tr>
<?php }?>
<?php endfor; endif; ?>
</table></td>
</tr>
<tr>
<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['footer']->value['print_footer']['detail'];?>
</td>
</tr>
</table>
<?php }?>
<?php echo '<script'; ?>
>window.print();<?php echo '</script'; ?>
>



<?php }} ?>
