<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-10-15 10:13:06
         compiled from "/usr/local/lib/php/app/adm/templates/daily.add.htm" */ ?>
<?php /*%%SmartyHeaderCode:9401256495bc405c2c8f7c0-90184193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2f28da709b09744517806df84e9d0c2a1bf4462' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/daily.add.htm',
      1 => 1456844610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9401256495bc405c2c8f7c0-90184193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'city' => 0,
    'dlid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bc405c2ce8665_80796099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc405c2ce8665_80796099')) {function content_5bc405c2ce8665_80796099($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm đại lý</h4>
      </div>
      <div class="modal-body">
     
       <div class="form-group form-group-sm">
       <label class="control-label col-md-4">Tên đại lý:</label>
       <div class="col-md-6">
       <input name="fullname" class="form-control" />
       </div>
       </div>

     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Địa chỉ:</label>
     <div class="col-md-6">
     <input name="address" class="form-control" />
     </div>
     </div>
     
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Điện thoại:</label>
     <div class="col-md-6">
     <input name="mobile" class="form-control" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Tỉnh thành:</label>
     <div class="col-md-6">
     <select data-placeholder="Chọn tỉnh thành" class="form-control chosen" id="select" data-type="select2" name="city">
     <option value="0">Chọn tỉnh</option>
     <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['city']->value,'output'=>$_smarty_tpl->tpl_vars['city']->value),$_smarty_tpl);?>

     </select>
     

     </div>
     </div>
     
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Email:</label>
     <div class="col-md-6">
     <input name="email" class="form-control" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Website:</label>
     <div class="col-md-6">
     <input name="website" class="form-control" />
     </div>
     </div>
     

<?php echo '<script'; ?>
 src="/apps/js/prism.js" type="text/javascript"><?php echo '</script'; ?>
>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Thứ tự:</label>
     <div class="col-md-6">
     <input name="pos" class="form-control" />
     </div>
     </div>
     <?php if (isset($_smarty_tpl->tpl_vars['dlid']->value)) {?>
       <div class="form-group">
       
        
     <div class="col-md-12 col-xs-12 text-center">
      <a href="index.php?ajax=daily.hh&id=<?php echo $_smarty_tpl->tpl_vars['dlid']->value;?>
" class="btn btn-info btn-sm">Thiết lập hoa hồng</a>
       <a href="index.php?ajax=daily.tg&id=<?php echo $_smarty_tpl->tpl_vars['dlid']->value;?>
" class="btn btn-danger btn-sm">Thiết lập tăng giảm giá</a>
      </div>
       </div>
     <?php }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Thêm mới</button>
      </div>
    </div>
      </form>
      
                <?php }} ?>
