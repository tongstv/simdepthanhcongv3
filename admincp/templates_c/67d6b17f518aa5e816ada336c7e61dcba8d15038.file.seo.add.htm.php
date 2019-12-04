<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-03-05 13:52:58
         compiled from "/usr/local/lib/php/app/adm/templates/seo.add.htm" */ ?>
<?php /*%%SmartyHeaderCode:16801793575c7e1cca65a8b8-14523259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67d6b17f518aa5e816ada336c7e61dcba8d15038' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/seo.add.htm',
      1 => 1488530579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16801793575c7e1cca65a8b8-14523259',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c7e1cca69c7d6_53672374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7e1cca69c7d6_53672374')) {function content_5c7e1cca69c7d6_53672374($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm seo</h4>
      </div>
      <div class="modal-body">
     
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Url:</label>
    <div class="col-md-6">
    <input name="url" class="form-control" placeholder="http://domain.com/url" />
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Tiêu đề:</label>
    <div class="col-md-6">
    <input onkeyup="checkchar(this)" maxlength="200" name="title" class="form-control" id="title" />
    <span id="etitle"></span>
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Mô tả:</label>
    <div class="col-md-6">
    
    <textarea onkeyup="checkchar(this)" maxlength="250" name="des" cols="40" rows="5" id="des" placeholder="Sim #sim# đang có sãn tại #domain#"></textarea>
    <span id="edes"></span>
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Từ khóa:</label>
    <div class="col-md-6">
    <input name="keyword" class="form-control" />
    </div>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Thêm mới</button>
      </div>
    </div>
      </form>
      
      <?php echo '<script'; ?>
>
      function checkchar(input)
{
	var id=$(input).attr('id');
	
	if(id=='title')var max=69;
	else if(id=='des') var max=165;
	
	$('#e'+id).html('<br>Số ký tự còn lại: '+(max -input.value.length)+' ký tự');
		

}
<?php echo '</script'; ?>
><?php }} ?>
