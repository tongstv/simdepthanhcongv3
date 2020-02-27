<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-12-13 17:30:38
         compiled from "/usr/local/lib/php/app/adm/templates/edittool.htm" */ ?>
<?php /*%%SmartyHeaderCode:10931079035df3684eee9608-20738454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da1e3965bb21a59e267ed0ea8b653ec0fb44277e' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/edittool.htm',
      1 => 1576138299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10931079035df3684eee9608-20738454',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5df3684eeec8e0_34966016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df3684eeec8e0_34966016')) {function content_5df3684eeec8e0_34966016($_smarty_tpl) {?>  
<?php echo '<script'; ?>
>

	
    function html()
    {
        var html = prompt("Paster mã html vào vị trí chuột", "");
        
        if(html)
        {
              CKEDITOR.instances['detail'].insertHtml(html);
        }
      
    }
    

    $(document).ready(function(){
       
       CKEDITOR.config.contentsCss = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css';






       $(document).on('click','.select',function(){
        
        var html=$(this).data('html');
        
        var option=$(this).data('option');
        
        if(option)
        {
              var vidu=$(this).data('vidu');
             var html2 = prompt(option, vidu);
             
             html = html.replace('#key#',html2);
        }
        
        
        CKEDITOR.instances['detail'].insertHtml(html);
        
        $('#myModal').modal('hide');
       });
        
    });
<?php echo '</script'; ?>
>


  
<div class="btn-group">

<a href="#" onclick="html(); return false;" class="btn btn-sm btn-info">Nhúng html</a>

<a href="index.php?ajax=page.api" class="ajax btn btn-sm btn-success">API chức năng</a>
</div><?php }} ?>
