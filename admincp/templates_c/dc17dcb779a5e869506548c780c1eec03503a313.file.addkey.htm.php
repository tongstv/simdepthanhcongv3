<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-10-22 11:07:51
         compiled from "/usr/local/lib/php/app/adm/templates/addkey.htm" */ ?>
<?php /*%%SmartyHeaderCode:803754975bcd4d172e7774-29931340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc17dcb779a5e869506548c780c1eec03503a313' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/addkey.htm',
      1 => 1439964673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '803754975bcd4d172e7774-29931340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bcd4d173366c9_26909568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcd4d173366c9_26909568')) {function content_5bcd4d173366c9_26909568($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Nhập mã đăng ký sử dụng</h2>
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
 <form method="POST">
 <div class="form-group form-group-sm">
 <label class="control-label col-md-4">Nhập mã đăng ký:</label>
 <div class="col-md-6">
 <input name="key" class="form-control" />
 </div>
 </div>
 
   <div class="form-group">
   
<button>Lưu mã đăng ký</button>
   </div>
   </form>
  </div>
</div><?php }} ?>
