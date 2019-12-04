<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-10-31 15:16:41
         compiled from "/usr/local/lib/php/app/adm/templates/dataviettel.htm" */ ?>
<?php /*%%SmartyHeaderCode:10856705015dba9869073fd0-44915225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d1babfa0eb9a22a8bee815bcfe29440e9a323b1' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/dataviettel.htm',
      1 => 1571971553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10856705015dba9869073fd0-44915225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'auto' => 0,
    'options' => 0,
    'selected' => 0,
    'data' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dba986910e1e3_00897481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dba986910e1e3_00897481')) {function content_5dba986910e1e3_00897481($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?> <?php echo '<script'; ?>
 src="/apps/js/pace.min.js"><?php echo '</script'; ?>
>
  <link href="/apps/css/pace1.min.css" rel="stylesheet" />
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Dataviettel.com</h2>
  </div>
  <div class="panel-body">
    
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    
    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
    
    <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
    <?php }?>
    
  
    <div class="clearfix"></div>
    <form method="POST">
    <div class="pull-left">

   
    <button name="auto1" class="btn btn-success">ON</button>
   
     <button name="auto2" class="btn btn-danger">OFF</button>
   
    
    <?php if (isset($_smarty_tpl->tpl_vars['auto']->value['start'])&&$_smarty_tpl->tpl_vars['auto']->value['start']=='on') {?>
   <strong  class="text-success"> Chế độ tự động đăng hàng ngày đang được bật</strong>
    <?php } else { ?>
    <strong class="text-danger">Chế độ tự động đăng hàng ngày đang bị tắt</strong>
    <?php }?>
    </div>
    <div>
    
     <select name="autodel" class=" input-sm">
        <option value="0">Tự động xóa bảng cũ</option>
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value),$_smarty_tpl);?>

        </select>
   
    </div>
    <div class="pull-right">
    
   
        <input type="password" name="pass" placeholder="Mật khẩu xóa và sync" class="input-sm"  />
    <button class="btn btn-danger"  title="Sẽ Xóa SIM" name="xoadaily">Xóa và sync lại</button>

    </div>
    <div class="clearfix"></div>
    <br />
  
    <div class="clearfix"></div>
 
 
  <table class="table table-bordered">
     <thead>
     <tr>
     <td class="active text-center">STT</th>
          <td class="active text-center">Đại lý</th>
               <td class="active text-center">Cập nhật cũ</th>
                    <td class="active text-center">Cật nhật mới</th>
                  
     </tr>
     </thead>
     
     <tbody>
    
    
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
    <?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']], null, 0);?>
    <tr>
    
    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['daily'];?>
</td>
             <td>
             
             <?php if ($_smarty_tpl->tpl_vars['row']->value['old_update']) {?>
             <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['old_update'],'d/m/Y');
}?></td>
                  <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['last_update'],'d/m/Y');?>
</td>
                     
    </tr>
    <?php endfor; endif; ?>
 	</tbody>
     
    
     
     </table>
 
 
 <div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
         </form>
  </div>
</div>
<?php }} ?>
