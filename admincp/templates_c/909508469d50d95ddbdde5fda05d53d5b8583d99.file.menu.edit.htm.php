<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-12-05 09:29:18
         compiled from "/usr/local/lib/php/app/adm/templates/menu.edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:4819908285c0737fe2aebf2-82339217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '909508469d50d95ddbdde5fda05d53d5b8583d99' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/menu.edit.htm',
      1 => 1417625086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4819908285c0737fe2aebf2-82339217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'url' => 0,
    'class' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c0737fe30b014_85323989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0737fe30b014_85323989')) {function content_5c0737fe30b014_85323989($_smarty_tpl) {?><h2>Sửa Menu</h2>
<form method="post" action="index.php?ajax=menu.save">
	<p>
		<label for="edit-menu-title">Tiêu đề</label>
		<input type="text" name="title" id="edit-menu-title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
	</p>
	<p>
		<label for="edit-menu-url">URL</label>
		<input type="text" name="url" id="edit-menu-url" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
	</p>
	<p>
		<label for="edit-menu-class">Class</label>
		<input type="text" name="class" id="edit-menu-class" value="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	</p>
	<input type="hidden" name="menu_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
</form><?php }} ?>
