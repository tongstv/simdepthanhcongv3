<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-03 17:43:18
         compiled from "/usr/local/lib/php/app/adm/templates/doisim.htm" */ ?>
<?php /*%%SmartyHeaderCode:9820960585bdd7bc634b2e2-02512993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2c655f3c19463c366d1197030d6cf2f41a84316' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/doisim.htm',
      1 => 1537169971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9820960585bdd7bc634b2e2-02512993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'submit' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bdd7bc63a41e9_58046861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bdd7bc63a41e9_58046861')) {function content_5bdd7bc63a41e9_58046861($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Đổi sim 11 số về 10 số</h2>
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

<form method="POST" class="form-horizontal">

  <div class="form-group">
  
  <label class="control-label col-md-4">Đầu cũ</label>
  <div class="col-md-7">
  
  <input class="form-control" name="daucu" placeholder="0125" />
  </div>
  </div>
  
    <div class="form-group">
    
    <label class="control-label col-md-4">Đầu mới</label>
    <div class="col-md-7">
    
    <input class="form-control" name="daumoi" placeholder="085" />
    </div>
    </div>



<input type="hidden" name="submit" value="<?php if ($_smarty_tpl->tpl_vars['submit']->value) {
echo $_smarty_tpl->tpl_vars['submit']->value;
} else { ?>1<?php }?>" />
<button class="btn btn-lg btn-primary center-block" name="doisim">Thực hiện đổi sim 11 số sang 10 số</button>




</form>
<div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
  </div>
</div>

<?php echo '<script'; ?>
>



$(document).ready(function(){
    
});
<?php echo '</script'; ?>
><?php }} ?>
