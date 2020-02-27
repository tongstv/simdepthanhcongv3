<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-12-12 18:51:01
         compiled from "/usr/local/lib/php/app/adm/templates/addkey.htm" */ ?>
<?php /*%%SmartyHeaderCode:9811042275df229a56a3b91-04041967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc17dcb779a5e869506548c780c1eec03503a313' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/addkey.htm',
      1 => 1576138299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9811042275df229a56a3b91-04041967',
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
  'unifunc' => 'content_5df229a56e2c53_51314219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df229a56e2c53_51314219')) {function content_5df229a56e2c53_51314219($_smarty_tpl) {?><div class="panel panel-success">
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
