<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-13 08:32:41
         compiled from "/usr/local/lib/php/app/adm/templates/users.resetpass.htm" */ ?>
<?php /*%%SmartyHeaderCode:4777173085e44a739d947e9-97660495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '020967d0b6177a0096cdd979d9dde74fe16d4f3b' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/users.resetpass.htm',
      1 => 1576138299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4777173085e44a739d947e9-97660495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'echo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e44a739def750_42473278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e44a739def750_42473278')) {function content_5e44a739def750_42473278($_smarty_tpl) {?><div class="container">
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Lấy lại mật khẩu</h2>
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
    <form class="form-horizontal" method="POST"  action="index.php?do=<?php echo $_GET['do'];?>
">
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Email:</label>
    <div class="col-md-6">
    <div class="form-group">
    <div class="col-md-7">
     <input name="email" class="form-control" />
     </div>
     <div class="co-md-5"><button class="btn btn-success input-sm">Tạo mật khẩu mới</button></div>
       
       
    </div>
   

    </div>
    </div>
    </form>
    <?php if (isset($_smarty_tpl->tpl_vars['echo']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['echo']->value;?>

    <?php }?>

  </div>
</div>
</div><?php }} ?>
