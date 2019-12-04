<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-10-20 10:11:03
         compiled from "/usr/local/lib/php/app/adm/templates/pagegroup.add.htm" */ ?>
<?php /*%%SmartyHeaderCode:6999396405bca9cc7d36fe5-46440030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89d5fc21ce552a1c2cb79297c2c6bece99c85df0' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/pagegroup.add.htm',
      1 => 1418069032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6999396405bca9cc7d36fe5-46440030',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bca9cc7d793e3_21379483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bca9cc7d793e3_21379483')) {function content_5bca9cc7d793e3_21379483($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm nhóm tin</h4>
      </div>
      <div class="modal-body">
     
       <div class="form-group form-group-sm">
       <label class="control-label col-md-4">Tên nhóm tin</label>
       <div class="col-md-6">
       <input name="groupname" class="form-control" />
       </div>
       </div>
        
        <div class="form-group form-group-sm">
        <label class="control-label col-md-4">Mã nhóm</label>
        <div class="col-md-6">
        <input name="groupcode" class="form-control" />
        </div>
        </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Thứ tự</label>
     <div class="col-md-6">
     <input name="pos" class="form-control" />
     </div>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit">Thêm mới</button>
      </div>
    </div>
      </form><?php }} ?>
