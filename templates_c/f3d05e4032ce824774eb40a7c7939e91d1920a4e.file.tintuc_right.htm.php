<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-12-12 15:54:41
         compiled from "template/tintuc_right.htm" */ ?>
<?php /*%%SmartyHeaderCode:14019703635df20051806b22-68405568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3d05e4032ce824774eb40a7c7939e91d1920a4e' => 
    array (
      0 => 'template/tintuc_right.htm',
      1 => 1576138697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14019703635df20051806b22-68405568',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5df20051812718_82886786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df20051812718_82886786')) {function content_5df20051812718_82886786($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Tin tức sim số đẹp</h2>
  </div>
  <div class="panel-body">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  
      $box = new querycache();
  
      echo $box->tintuclink(24);
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  </div>
</div>



<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Tin khuyến mãi</h2>
  </div>
  <div class="panel-body">
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

      
      $box = new querycache();
  
      echo $box->tintuclink(23);
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
  </div>
</div>



<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Tin Tức</h2>
  </div>
  <div class="panel-body">
  
  <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  
  $box = new querycache();
  
  echo $box->tintuclink(9);
  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  </div>
</div><?php }} ?>
