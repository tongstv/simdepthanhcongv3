<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-07 22:54:00
         compiled from "template/tintuc_right.htm" */ ?>
<?php /*%%SmartyHeaderCode:14275115405dc43e188ed6d6-84609263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19255f5ad824f5ae067a0147275008ed31e2e996' => 
    array (
      0 => 'template/tintuc_right.htm',
      1 => 1547019528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14275115405dc43e188ed6d6-84609263',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc43e18936207_47658130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc43e18936207_47658130')) {function content_5dc43e18936207_47658130($_smarty_tpl) {?><div class="panel panel-success">
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
