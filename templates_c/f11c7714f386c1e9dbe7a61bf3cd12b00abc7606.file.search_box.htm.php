<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-12-12 15:25:25
         compiled from "template/search_box.htm" */ ?>
<?php /*%%SmartyHeaderCode:1388195995df1f975817fc2-22061795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f11c7714f386c1e9dbe7a61bf3cd12b00abc7606' => 
    array (
      0 => 'template/search_box.htm',
      1 => 1576138662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1388195995df1f975817fc2-22061795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thiskey' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5df1f9758297e8_09337364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df1f9758297e8_09337364')) {function content_5df1f9758297e8_09337364($_smarty_tpl) {?><div class="panel"> 
   <div class="panel-body" style="padding-bottom: 0; padding-top: 10px; background: none !important;">
   <div class="clearfix"></div>
      <form id="search" action="index.php" class="form-horizontal">
         <input name="do" value="search" type="hidden">

            <div class="form-group" style="display: none;">
         
               <div class="col-md-4  col-xs-12 col-sm-12 selectnetwork">
                  <select name="network" class="form-control input-sm">
                     <option value="0">Chọn mạng di động</option>
                     <option value="1">Viettel</option>
                     <option value="2">Mobifone</option>
                     <option value="3">Vinaphone</option>
                     <option value="4">Vietnamobile</option>
                     <option value="5">Gmobile</option>
                  </select>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-6 search-hiden">
                  <div class="input-group">
                     <div class="input-group-addon font-12 font-b"> Giá từ:</div>
                     <input name="giatu" class="form-control input-sm price" placeholder="100,000" />
                  </div>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-6 search-hiden">
                  <div class="input-group">
                     <div class="input-group-addon font-12 font-b">Đến:</div>
                     <input name="den" class="form-control input-sm price" placeholder="1,000,000,000" />
                  </div>
               </div>
              
               </div>
               
               <div class="form-group" style="padding:0px 35px;">
                  <div class="input-group">
                     <input name="sim" id="sim" required="" pattern="[0-9Xx*. ]+"  title="Vui lòng nhập đúng định dạng tìm kiếm " value="<?php if (isset($_smarty_tpl->tpl_vars['thiskey']->value)) {
echo $_smarty_tpl->tpl_vars['thiskey']->value;
}?>" class="form-control pull-left popover-dismiss" placeholder="Nhập số sim bạn cần tìm" data-container="body" data-toggle="popover" data-placement="bottom" data-content=" - Sử dụng dấu <span class='red'>x</span> đại điện cho 1 số và dấu <span class='red'>*</span> đại điện cho một chuỗi số. <br /> + Để tìm sim bắt đầu bằng 098, quý khách nhập vào 098*<br /> + Để tìm sim kết thúc bằng 888, quý khách nhập vào *888<br /> + Để tìm sim bắt đầu bằng 098 và kết thúc bằng 888, nhập vào 098*888<br /> + Để tìm sim bên trong có số 888, nhập vào 888<br /> + Để tìm sim bắt đầu bằng 098 và kết thúc bằng 808, 818, 828, 838, 848, 858, 868, 878, 888, 898 nhập vào 098*8x8<br /> " title="Hướng dẫn tìm kiếm sim"  />
                     <span class="input-group-btn">  <button class="btn btn-success">TÌM KIẾM</button></span>
                  </div>
               </div>
       

         <div class="form-group text-center">
          <strong class="red font-12">Hot key:</strong> <span class="hotkey">
               <a href="09*9999" class="hotkey">09*9999</a>, <a href="*9999" class="hotkey">*9999</a>, <a href="*6868" class="hotkey">*6868</a>
               , <a href="*1989" class="hotkey">*1989</a>
               , <a href="09*99x99" class="hotkey">09*99x99</a>
               </span>
           
         </div>
         
         <div class="form-group text-center search-hiden" style="padding: 0px 10px;">
          Dãy số không gồm:
            <input name="n[]" value="1" type="checkbox"><span> 1 </span>
            <input name="n[]" value="2" type="checkbox"><span> 2 </span>
            <input name="n[]" value="3" type="checkbox"><span> 3 </span>
            <input name="n[]" value="4" type="checkbox"><span> 4 </span>
            <input name="n[]" value="5" type="checkbox"><span> 5 </span>
            <input name="n[]" value="6" type="checkbox"><span> 6 </span>
            <input name="n[]" value="7" type="checkbox"><span> 7 </span>
            <input name="n[]" value="8" type="checkbox"><span> 8 </span>
            <input name="n[]" value="9" type="checkbox"><span> 9 </span>
         </div>
         
         
            
            
               <div class="form-group text-center search-hiden" style="padding: 0 25px 0 25px;">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="input-group">
                        <div class="input-group-addon font-12">Tổng điểm:</div>
                        <input name="tongdiem" maxlength="2" class="form-control input-sm" style="padding: 0;" placeholder=" < 81" />
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="input-group">
                        <div class="input-group-addon font-12">Tổng Nút:</div>
                        <input name="tongnut" maxlength="2" class="form-control input-sm" style="padding: 0;" placeholder=" 1 -10" />
                     </div>
                  </div>
               </div>

        
            <div class="visible-xs form-group text-right">
            
            <a href="#" id="timnangcao" style="margin-right: 20px; font-weight: bold; color: #FFFF00;">Tìm kiếm nâng cao</a>
            </div>
         <input type="hidden" name="submit" value="true" />
      </form>
   </div>
</div>
<!-- <?php if ($_smarty_tpl->tpl_vars['nav']->value) {?>
<div class="panel panel-success hidden-xs">
   <div class="panel-body">
      <div class="row">
         <ul id="navigation">
            <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>

         </ul>
      </div>
   </div>
</div>
<?php }?> -->


<?php }} ?>
