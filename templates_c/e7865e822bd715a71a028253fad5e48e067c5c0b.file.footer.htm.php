<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-07 15:28:54
         compiled from "template/footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:19620628175dc3d5c6932305-10045464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7865e822bd715a71a028253fad5e48e067c5c0b' => 
    array (
      0 => 'template/footer.htm',
      1 => 1573041755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19620628175dc3d5c6932305-10045464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dienthoai' => 0,
    'dichvukhac' => 0,
    'menuloai' => 0,
    'new' => 0,
    'hotlinemobile' => 0,
    'newfooter' => 0,
    'connect' => 0,
    'des' => 0,
    'share' => 0,
    'copy' => 0,
    'giamgiamobile' => 0,
    'body' => 0,
    'hotline' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc3d5c6c55819_25757204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc3d5c6c55819_25757204')) {function content_5dc3d5c6c55819_25757204($_smarty_tpl) {?></div>
</div>
<div class="col-md-3 right-page visible-lg visible-md">
    
    <?php if (isset($_GET['do'])&&$_GET['do']=='tintuc') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('tintuc_right.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['dienthoai']->value['status']==1) {?>
    <div class="panel panel-primary hidden-xs">
        <div class="panel-heading">
            <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['dienthoai']->value['title'];?>
</h2>
        </div>
        <div class="panel-body">
            <?php echo $_smarty_tpl->tpl_vars['dienthoai']->value['detail'];?>

        </div>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['dichvukhac']->value['status']==1) {?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['dichvukhac']->value['title'];?>
</h2>
        </div>
        <div class="panel-body">
            <?php echo $_smarty_tpl->tpl_vars['dichvukhac']->value['detail'];?>

        </div>
    </div>
    <?php }?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><span style="background: url(/data/images/image/icon-news.png) no-repeat left;padding-left: 45px">Đơn hàng mới</span></h2>
        </div>
        <div class="panel-body">
            <div id="order" ></div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><span class="icon-ds"><span class="text">Tìm sim theo mạng</span></span></h2>
        </div>
        <div class="panel-body">
            <ul class="loaisim columb2">
                <li><a href="Sim-So-Dep-Vinaphone.html">VinaPhone </a></li>
                <li><a href="Sim-So-Dep-Mobifone.html">Mobifone</a></li>
                <li><a href="Sim-So-Dep-Viettel.html">Viettel</a></li>
                <li><a href="Sim-So-Dep-Vietnamobile.html">VietNamobile</a></li>
                <li><a href="Sim-So-Dep-Gmobile.html">Gmobile</a></li>
            </ul>
        </div>
    </div>
    <div class="panel panel-primary hidden-xs">
        <div class="panel-heading">
            <h2 class="panel-title">
                <span class="icon-ds"><span class="text">tìm sim theo giá</span></span>
            </h2>
        </div>
        <div class="panel-body">
            <ul class="loaisim columb2">
                <li><a class="list-group-item lgit" href="/sim-theo-gia/duoi-500-nghin.html">Dưới 500K</a></li>
                <li><a href="/sim-theo-gia/tu-500-nghin-den-1-trieu.html">500K - 1tr</a></li>
                <li><a href="/sim-theo-gia/tu-1-trieu-den-3-trieu.html"> 1tr - 3tr</a></li>
                <li><a href="/sim-theo-gia/tu-3-trieu-den-5-trieu.html">3tr - 5tr</a></li>
                <li><a href="/sim-theo-gia/tu-5-trieu-den-10-trieu.html">5tr - 10tr</a></li>
                <li><a href="/sim-theo-gia/tu-10-trieu-den-50-trieu.html">10tr - 50tr</a></li>
                <li><a href="/sim-theo-gia/tu-50-trieu-den-100-trieu.html">50tr - 100tr</a></li>
                <li><a href="/sim-theo-gia/tu-100-trieu-den-200-trieu.html">100tr - 200tr</a></li>
                <li><a href="/index.php?do=search&sim=0*&network=0&giatu=200%2C000%2C000&den=500%2C000%2C000&tongdiem=&tongnut=&submit=true">200tr - 500tr</a></li>
                <li><a href="/index.php?do=search&amp;sim=0*&amp;network=0&amp;giatu=500%2C000%2C000&amp;den=100%2C000%2C000%2C000&amp;tongdiem=&amp;tongnut=&amp;submit=true">Trên 500tr</a></li>
            </ul>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><span class="icon-ds"><span class="text">Chọn sim theo thể loại</span></span></h2>
        </div>
        <div class="panel-body">
            <ul class="loaisim">
              <!-- <?php echo $_smarty_tpl->tpl_vars['menuloai']->value;?>
 -->
              <li><a href="sim-tu-quy.html">Sim Tứ Quý</a></li>
              <li><a href="sim-luc-quy.html">Sim Lục Quý</a></li>
              <li><a href="sim-ngu-quy.html">Sim Ngũ Quý</a></li>
              <li><a href="sim-tu-quy-giua.html">Sim tứ quý giữa</a></li>
              <li><a href="sim-luc-quy-giua.html">Sim lục quý giữa</a></li>
              <li><a href="sim-ngu-quy-giua.html">Sim ngũ quý giữa</a></li>
              <li><a href="sim-lap.html">Sim Lặp</a></li>
              <li><a href="sim-dac-biet.html">Sim Đặc Biệt</a></li>
              <li><a href="sim-nam-sinh.html">Sim Năm Sinh</a></li>
              <li><a href="dau-so-co.html">Sim đầu số cổ</a></li>
              <li><a href="tam-hoa-don.html">Sim tam Hoa Đơn</a></li>
              <li><a href="tam-hoa-kep.html">Sim tam Hoa Kép</a></li>
              <li><a href="sim-ngay-thang-nam-sinh.html">Năm sinh dd/mm/YY</a></li>
              <li><a href="sim-loc-phat.html">Sim Lộc Phát</a></li>
              <li><a href="tam-hoa-giua.html">Sim Tam hoa giữa</a></li>
            </ul>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><span class="icon-ds"><span class="text">sim theo đầu số</span></span></h2>
        </div>
        <div class="panel-body">
            <ul class="loaisim dau-so-mang">
                <li> <a href="dau-so/Viettel-096">Đầu số 096 (Viettel)</a></li>
                <li> <a href="dau-so/Viettel-097">Đầu số 097 (Viettel)</a></li>
                <li> <a href="dau-so/Viettel-098">Đầu số 098 (Viettel)</a></li>
                <li> <a href="dau-so/Viettel-086">Đầu số 086 (Viettel)</a></li>
                <li> <a href="dau-so/Mobifone-090">Đầu số 090 (Mobifone)</a></li>
                <li> <a href="dau-so/Mobifone-093">Đầu số 093 (Mobifone)</a></li>
                <li> <a href="dau-so/Mobifone-070">Đầu số 070 (Mobifone)</a></li>
                <li> <a href="dau-so/Mobifone-076">Đầu số 076 (Mobifone)</a></li>
                <li> <a href="dau-so/Vinaphone-077">Đầu số 077 (Mobifone)</a></li>
                <li> <a href="dau-so/Vinaphone-078">Đầu số 078 (Mobifone)</a></li>
                <li> <a href="dau-so/Vinaphone-091">Đầu số 091 (Vinaphone)</a></li>
                <li> <a href="dau-so/Vinaphone-094">Đầu số 094 (Vinaphone)</a></li>
                <li> <a href="dau-so/Vinaphone-081">Đầu số 081 (Vinaphone)</a></li>
                <li> <a href="dau-so/Vinaphone-082">Đầu số 082 (Vinaphone)</a></li>
                <li> <a href="dau-so/Vinaphone-083">Đầu số 083 (Vinaphone)</a></li>
                <li> <a href="dau-so/Vinaphone-084">Đầu số 084 (Vinaphone)</a></li>
                <li> <a href="dau-so/Vinaphone-085">Đầu số 085 (Vinaphone)</a></li>
                <li> <a href="dau-so/Vietnamobile-092">Đầu số 092 (Vietnamobile)</a></li>
                <li> <a href="dau-so/Vietnamobile-052">Đầu số 052 (Vietnamobile)</a></li>
                <li> <a href="dau-so/Vietnamobile-056">Đầu số 056 (Vietnamobile)</a></li>
                <li> <a href="dau-so/Vietnamobile-058">Đầu số 058 (Vietnamobile)</a></li>
                <li> <a href="dau-so/Gmobile-099">Đầu số 099 (Gmobile)</a></li>
                <li> <a href="dau-so/Gmobile-059">Đầu số 059 (Gmobile)</a></li>
            </ul>
        </div>
    </div>
    <div class="panel panel-primary hidden-xs">
        <div class="panel-heading">
            <h2 class="panel-title"><span class="icon-ds"><span class="text">Sim theo phong thủy</span></span></h2>
        </div>
        <div class="panel-body">
            <form method="GET" action="index.php">
                <input name="do" value="search" type="hidden">
                <div class="form-group"><label>Tổng nút</label><input name="tongnut" class="form-control input-sm" placeholder="Tổng nút 1-10" type="text"></div>
                <div class="form-group"><label>Tổng điểm</label><input name="tongdiem" class="form-control input-sm" placeholder="Tổng điểm < 81" type="text"></div>
                <div class="form-group" style="font-size: 11px; font-weight: normal;">
                    <div class="col-xs-12 text-center margin-top"><input class="btn btn-primary btn-sm" value="Tìm sim" type="submit"></div>
                </div>
                <input type="hidden" name="submit" value="true">
            </form>
        </div>
    </div>
    
    <!-- <div class="panel panel-success visible-lg visible-md">
        <div class="panel-heading">
          <h2 class="panel-title"><i class="glyphicon glyphicon-star-empty"></i> Tin Tức</h2>
        </div>
        <div class="panel-body" style="max-height: 480px; overflow: auto;">
        <ul class="new">
          <?php echo $_smarty_tpl->tpl_vars['new']->value;?>

        </ul>
        </div>
        </div> -->

    
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><span style="background: url(/data/images/image/icon-news.png) no-repeat left;padding-left: 45px">Bạn cần biết</span></h2>
        </div>
        <div class="panel-body">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            echo gettintuc('bancanbiet');
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>
    <div class="panel panel-primary" style="display: none">
        <div class="panel-heading">
            <h2 class="panel-title"><span class="icon-ds"><span class="text">Đơn sim số đẹp mới</span></span></h2>
        </div>
        <div class="panel-body">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            $api = new querycache();
            echo $api->panel('donhang');
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><span style="background: url(/data/images/image/icon-news.png) no-repeat left;padding-left: 45px">Tin Mới Nhất</span></h2>
        </div>
        <div class="panel-body mp0">
            <div class="table-responsive" style="max-height: 500px; overflow: auto;">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                echo gettintuc('tintuc');
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
    </div>
    <?php }?>
</div>
</div>
<div class="panel panel-primary visible-xs">
    <div class="panel-heading">
        <h2 class="panel-title"><span class="icon-ds"><span class="text">nhà mạng sim số đẹp</span></span></h2>
    </div>
    <div class="panel-body">
        <ul class="loaisim columb2">
            <li><a href="Sim-So-Dep-Vinaphone.html">VinaPhone </a></li>
            <li><a href="Sim-So-Dep-Mobifone.html">Mobifone</a></li>
            <li><a href="Sim-So-Dep-Viettel.html">Viettel</a></li>
            <li><a href="Sim-So-Dep-Vietnamobile.html">VietNamobile</a></li>
            <li><a href="Sim-So-Dep-Gmobile.html">Gmobile</a></li>
        </ul>
    </div>
</div>
<div class="panel panel-primary visible-xs">
    <div class="panel-heading">
        <h2 class="panel-title">
            <span class="icon-ds"><span class="text">tìm theo giá tiền</span></span>
        </h2>
    </div>
    <div class="panel-body">
        <ul class="loaisim columb2">
            <li><a class="list-group-item lgit" href="/sim-theo-gia/duoi-500-nghin.html">Dưới 500K</a></li>
            <li><a href="/sim-theo-gia/tu-500-nghin-den-1-trieu.html">500K - 1tr</a></li>
            <li><a href="/sim-theo-gia/tu-1-trieu-den-3-trieu.html"> 1tr - 3tr</a></li>
            <li><a href="/sim-theo-gia/tu-3-trieu-den-5-trieu.html">3tr - 5tr</a></li>
            <li><a href="/sim-theo-gia/tu-5-trieu-den-10-trieu.html">5tr - 10tr</a></li>
            <li><a href="/sim-theo-gia/tu-10-trieu-den-50-trieu.html">10tr - 50tr</a></li>
            <li><a href="/sim-theo-gia/tu-50-trieu-den-100-trieu.html">50tr - 100tr</a></li>
            <li><a href="/sim-theo-gia/tu-100-trieu-den-200-trieu.html">100tr - 200tr</a></li>
            <li><a href="/index.php?do=search&sim=0*&network=0&giatu=200%2C000%2C000&den=500%2C000%2C000&tongdiem=&tongnut=&submit=true">200tr - 500tr</a></li>
            <li><a href="/index.php?do=search&amp;sim=0*&amp;network=0&amp;giatu=500%2C000%2C000&amp;den=100%2C000%2C000%2C000&amp;tongdiem=&amp;tongnut=&amp;submit=true">Trên 500tr</a></li>
        </ul>
    </div>
</div>
<div class="panel panel-primary visible-xs">
    <div class="panel-heading">
        <h2 class="panel-title"><span class="icon-ds"><span class="text">CHỌN SIM THEO THỂ LOẠI</span></span></h2>
    </div>
    <div class="panel-body">
        <ul class="loaisim">
            <?php echo $_smarty_tpl->tpl_vars['menuloai']->value;?>

        </ul>
    </div>
</div>
<!-- <div class="panel panel-success visible-xs">
    <div class="panel-heading">
        <h2 class="panel-title">    <i class="glyphicon glyphicon-star-empty"></i>SIM SỐ ĐẸP THEO MẠNG</h2>
      </div>
      <div class="panel-body">
     <div class="panel-body" style="padding: 5px;"><ul class="list-group">
     
     
     <a class="list-group-item" href="/chon-mang/VinaPhone">Sim số đẹp VinaPhone</a>
      <a class="list-group-item" href="/chon-mang/MobiFone">Sim số đẹp Mobifone</a>
       <a class="list-group-item" href="/chon-mang/VietTel">Sim số đẹp Viettel</a>
        <a class="list-group-item" href="/chon-mang/VietNamobile">Sim số đẹp Vietnamobile</a>
         <a class="list-group-item" href="/chon-mang/Gmobile">Sim số đẹp Gmobile</a>
    </ul></div>
    </div>
    
    
    </div> -->
<div class="panel panel-primary visible-xs ">
    <div class="panel-heading">
        <h2 class="panel-title"><span class="icon-ds"><span class="text">CHỌN SIM THEO ĐẦU SỐ</span></span></h2>
    </div>
    <div class="panel-body" style="padding: 5px;">
        <ul class="loaisim">
            <li> <a href="dau-so/Viettel-096">096(Viettel)</a></li>
            <li> <a href="dau-so/Viettel-097"> 097(Viettel)</a></li>
            <li> <a href="dau-so/Viettel-098"> 098(Viettel)</a></li>
            <li> <a href="dau-so/Viettel-086"> 086(Viettel)</a></li>
            <li> <a href="dau-so/Viettel-039"> 039(Viettel)</a></li>
            <li> <a href="dau-so/Viettel-038"> 038(Viettel)</a></li>
            <li> <a href="dau-so/Viettel-037"> 037(Viettel)</a></li>
            <li> <a href="dau-so/Viettel-036"> 036(Viettel)</a></li>
            <li> <a href="dau-so/Viettel-035"> 035(Viettel)</a></li>
            <li> <a href="dau-so/Viettel-034"> 034(Viettel)</a></li>
            <li> <a href="dau-so/Viettel-033"> 033(Viettel)</a></li>
            <li> <a href="dau-so/Viettel-032"> 032(Viettel)</a></li>
            <li> <a href="dau-so/Mobifone-090"> 090(Mobifone)</a></li>
            <li> <a href="dau-so/Mobifone-093"> 093(Mobifone)</a></li>
            <li> <a href="dau-so/Mobifone-070"> 070(Mobifone)</a></li>
            <li> <a href="dau-so/Mobifone-076"> 076(Mobifone)</a></li>
            <li> <a href="dau-so/Vinaphone-077"> 077(Mobifone)</a></li>
            <li> <a href="dau-so/Vinaphone-078"> 078(Mobifone)</a></li>
            <li> <a href="dau-so/Vinaphone-091"> 091(Vinaphone)</a></li>
            <li> <a href="dau-so/Vinaphone-094"> 094(Vinaphone)</a></li>
            <li> <a href="dau-so/Vinaphone-081"> 081(Vinaphone)</a></li>
            <li> <a href="dau-so/Vinaphone-082"> 082(Vinaphone)</a></li>
            <li> <a href="dau-so/Vinaphone-083"> 083(Vinaphone)</a></li>
            <li> <a href="dau-so/Vinaphone-084"> 084(Vinaphone)</a></li>
            <li> <a href="dau-so/Vinaphone-085"> 085(Vinaphone)</a></li>
            <li> <a href="dau-so/Vietnamobile-092"> 092(Vietnamobile)</a></li>
            <li> <a href="dau-so/Vietnamobile-052"> 052(Vietnamobile)</a></li>
            <li> <a href="dau-so/Vietnamobile-056"> 056(Vietnamobile)</a></li>
            <li> <a href="dau-so/Vietnamobile-058"> 058(Vietnamobile)</a></li>
            <li> <a href="dau-so/Gmobile-099"> 099(Gmobile)</a></li>
            <li> <a href="dau-so/Gmobile-059"> 059(Gmobile)</a></li>
        </ul>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['dienthoai']->value['status']==1) {?>
<div class="panel panel-primary visible-xs">
    <div class="panel-heading">
        <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['dienthoai']->value['title'];?>
</h2>
    </div>
    <div class="panel-body">
        <?php echo $_smarty_tpl->tpl_vars['dienthoai']->value['detail'];?>

    </div>
</div>
<?php }?>
<!-- <div class="panel panel-success visible-xs">
    <div class="panel-heading">
      <h2 class="panel-title"><i class="glyphicon glyphicon-shopping-cart"></i>Đơn Đặt Hàng Mới</h2>
    </div>
    <div class="panel-body">
    
      <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

      $api = new querycache();
      echo $api->panel('donhang');
      <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

          
    </div>
    </div> -->
<style>
    @media (max-width:768px)
    {
    .list-group
    {
    width:100%;
    display: block;
    padding: 0;
    margin: 0;
    }
    .list-group-item
    {
    width:100%;
    display: inline-block;
    font-weight: bold;
    padding: 5px;
    }
    .loaisim li
    {
    display: inline-block;
    width: 50%;
    }
    }
</style>
<?php if ($_smarty_tpl->tpl_vars['hotlinemobile']->value['status']==1) {?>
<div class="panel panel-primary visible-xs">
    <div class="panel-heading">
        <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['hotlinemobile']->value['title'];?>
</h2>
    </div>
    <div class="panel-body">
        <?php echo $_smarty_tpl->tpl_vars['hotlinemobile']->value['detail'];?>

    </div>
</div>
<?php }?>
<footer>
    <div class="clearfix"></div>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['newfooter']->value;?>

        <div class="col-md-3 col4 col-xs-12">
            <h3 class="font-14"><strong><?php echo $_smarty_tpl->tpl_vars['connect']->value['title'];?>
</strong></h3>
            <hr />
            <?php echo $_smarty_tpl->tpl_vars['connect']->value['detail'];?>

            <ul class="share">
                <li>  <a href="#" class="facebook wow fadeInRight wowhover" data-effect="flip" data-wow-duration="1s" data-wow-delay=".2s " title="Chia sẻ lên Facebook"></a></li>
                <li>  <a href="http://twitter.com/share?text=<?php echo $_smarty_tpl->tpl_vars['des']->value;?>
&url=<?php echo $_smarty_tpl->tpl_vars['share']->value['link'];?>
" target="_blank" class="twitter wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s " title="Chi sẻ lên Twitter"></a></li>
                <li>  <a href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['share']->value['link'];?>
" target="_blank" class="plusone wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s " title="Chia sẻ lên Google+"></a></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php echo $_smarty_tpl->tpl_vars['copy']->value['detail'];?>

</footer>
<?php if ($_smarty_tpl->tpl_vars['giamgiamobile']->value['status']==1) {?>
<br />
<div class="panel panel-primary visible-xs">
    <div class="panel-heading">
        <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['giamgiamobile']->value['title'];?>
</h2>
    </div>
    <div class="panel-body">
        <?php echo $_smarty_tpl->tpl_vars['giamgiamobile']->value['detail'];?>

    </div>
</div>
<?php }?>
</div>
</div>
<a style="position: absolute;right: 10px" href="//www.dmca.com/Protection/Status.aspx?ID=91744229-a39d-4f97-b990-aa9feeeaf66b" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120n.png?ID=91744229-a39d-4f97-b990-aa9feeeaf66b"  alt="DMCA.com Protection Status" /></a>  <?php echo '<script'; ?>
 src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> <?php echo '</script'; ?>
>
<span class="pull-right" id="codeby" style="margin-top: -20px; color: #555;">Design by: www.stv.vn - sv2</span>
<a class="scrollToTop to" href="javascript://"></a>
<a class="scrollTobottom to" href="javascript://"></a>
<div class="mobile-ctv" onclick="simphongthuyHotLine()"></div>
<div id="mobile-ctv-hotline" class="mobile-ctv-hotline" style="display: none;">
    <h3 class="box-title" style="margin-top: 0px;"><span class="icon-sp"><span class="text">Hỗ Trợ Khách Hàng</span></span></h3>
    <div class="box-support">
        <div class="icon-sp-hotline"></div>
        <div class="list-hotline" style="margin-top: 10px;">
            <table class="hidden">
                <tbody>
                    <tr>
                        <td class="left">
                            <img src="/data/images/icon-sp-1.png" alt="icon sp 1">
                        </td>
                        <td class="right" style="font-weight: bold;color: black;font-size: 18px;display: block; padding: 3px 0;margin-left: 15px;">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            $box = new querycache();
                            echo $box->Page('somayban');
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td class="left"><img src="/data/images/icon-sp-2.png" alt="icon sp 2"></td>
                        <td class="right">
                            <a href="tel:<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                $box = new querycache();
                                echo $box->Page('sodidong');
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            $box = new querycache();
                            echo $box->Page('sodidong');
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td class="left">
                            <img src="/data/images/icon-sp-2.png" alt="icon sp 2">
                        </td>
                        <td class="right">
                            <b class="gopy">GÓP Ý &amp;KHIẾU NẠI</b>
                            <a href="tel:<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                $box = new querycache();
                                echo $box->Page('gopy');
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            $box = new querycache();
                            echo $box->Page('gopy');
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- back to top -->
<style>
    .carousel-item
    {
    display: none;
    }
    .carousel-item.active
    {
    display: block;
    }
    #o-wrapper > div.container > div:nth-child(4) > div.col-md-3.right-page.visible-lg.visible-md > div > div.panel-body > form{
    margin :0px !important;
    }
    #order{
    margin: 0px !important;
    }
    .mobile-ctv {
    position: fixed;
    left: 20px;
    bottom: 20px;
    width: 64px;
    height: 64px;
    background: url("/data/images/phone_w.png") center no-repeat #f6001d;
    border-radius: 50%;
    cursor: pointer;
    z-index: 9999
    }
    .box-title {
    background: #ad0909;
    color: #FFFFFF;
    font-weight: bold;
    padding: 4px 0;
    border-radius: 8px 8px 0 0;
    font-size: 13px;
    text-align: center;
    position: relative;
    }
    .box-title .text {
    text-transform: uppercase;
    }
    .box-title > span {
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 36px;
    display: inline-block;
    vertical-align: middle;
    }
    .box-title .icon-sp {
    background: url("/data/images/icon-sp.png") left no-repeat;
    }
    .box-support {
    text-align: center;
    font-size: 14px;
    }
    .box-support .icon-sp-hotline {
    text-align: center;
    display: block;
    }
    .box-support .list-hotline table {
    width: 100%;
    margin-bottom: 10px;
    }
    .box-support .list-hotline table .left {
    vertical-align: middle;
    border-right: 1px solid #DDDDDD;
    width: 60px;
    }
    .box-support .list-hotline table .right {
    text-align: left;
    padding: 0 15px;
    }
    .box-support .list-hotline a {
    font-weight: bold;
    color: black;
    font-size: 18px;
    display: block;
    padding: 3px 0;
    }
    .box-support .list-hotline .gopy {
    font-size: 0.82em;
    color: red;
    }
    .mobile-ctv-hotline {
    position: fixed;
    left: 20px;
    bottom: 88px;
    background: #FFFFFF;
    box-shadow: 0 5px 30px rgba(0, 0, 0, .16);
    display: none;
    border-radius: 8px;
    z-index: 99;
    overflow: hidden;
    }
    @media only screen and (min-device-width:320px) and (max-device-width:736px) {
    .box-title {
    border-radius: 0;
    font-size: 16px;
    }
    .mobile-ctv-hotline .box-title {
    font-size: 14px;
    }
    }
</style>
<?php echo '<script'; ?>
>function topFunction() {
    document.body.scrollTop=0;
    document.documentElement.scrollTop=0;
    }
    
<?php echo '</script'; ?>
><!-- menu mobile --><?php echo '<script'; ?>
>document.body.addEventListener('click',
    menu_close,
    true);
    function menu_left() {
        var div=document.getElementsByClassName("menu-mobile-navleft")[0];
        div.style.display='block';
    }
    
    function menu_right() {
        var div=document.getElementsByClassName("menu-mobile-navright")[0];
        div.style.display='block';
    }
    
    function menu_close() {
        var div_left=document.getElementsByClassName("menu-mobile-navleft")[0];
        if(div_left) {
            div_left.style.display='none';
        }
        var div_right=document.getElementsByClassName("menu-mobile-navright")[0];
        if(div_right) {
            div_right.style.display='none';
        }
    }
    
    document.getElementById("loc").addEventListener("change",
    function() {
        document.getElementById("loc").submit();
    }
    
    );
    function simphongthuyHotLine() {
        var x=document.getElementsByClassName("mobile-ctv-hotline")[0];
        if (x.style.display==="none") {
            x.style.display="block";
        }
        else {
            x.style.display="none";
        }
    }
    
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="/template/js/js.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/js/menu.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/js/script.js?s=v" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['body']->value;?>

<div class="navbar-fixed-bottom visible-xs visible-sm" style="zoom: 1; -moz-transform:scale(1);">
    <!-- <?php if (isset($_smarty_tpl->tpl_vars['hotline']->value['detail'])) {?>
        <?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['hotline']->value['detail']);?>

        
        <?php } else { ?>
         0988888888 - 0999999999
        <?php }?> -->
    <span class="pull-right mobi" style="font-size: 11px;"><span style="font-size: 16px;margin-top: 10px;
        margin-right: 5px;" class="stv-display"></span><a style="color: #FFFF00;" href="/?desktop=1">Xem bản Desktop</a> </span>
</div>
<?php if (isset($_SESSION['desktop'])) {?>
<div class="navbar-fixed-bottom" style="line-height: 60px;font-size: 35px;zoom: 1; scale(1);">
    <?php if (isset($_smarty_tpl->tpl_vars['hotline']->value['detail'])) {?>
    <?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['hotline']->value['detail']);?>

    <?php } else { ?>
    0988888888 - 0999999999
    <?php }?>
    <span class="pull-right mobi" style="font-size: 35px;"><span style="font-size: 35px;" class="stv-mobile"></span><a href="/?desktop=2"  style="color: #FFFF00;">Xem bản Mobile</a> </span>
</div>
<?php echo '<script'; ?>
>
    $("meta[name='viewport']").attr('content','width=1024');
<?php echo '</script'; ?>
>
<?php } else { ?>
<?php echo '<script'; ?>
>
    $("meta[name='viewport']").attr('content','width=device-width, initial-scale=1,user-scalable=no');
<?php echo '</script'; ?>
>
<?php }?>
</div>

<?php echo '<script'; ?>
>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-30841980-1', 'auto');
    ga('send', 'pageview');
<?php echo '</script'; ?>
>
<!-- Google Code dành cho Thẻ tiếp thị lại -->
<!--------------------------------------------------
    Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
    --------------------------------------------------->
<?php echo '<script'; ?>
 type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 955561810;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"><?php echo '</script'; ?>
>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/955561810/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

<div id="c-mask" class="c-mask"></div>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        

                    $("#nsF").bind('submit',function(){

                                y=$( "#nsF #y").find(":selected").val();
                                d=$("#nsF #d").find(":selected").val();
                                m=$("#nsF #m").find(":selected").val();
                                dtp=$("#nsF input[name='dtp']:checked").val();
                                window.location.href='index.php?do=search&date='+d+'/'+m+'/'+y+'&dtp='+dtp+'&submit=true';
                                return false;

                    });
                    $("#nsFh").bind('submit',function(){

                                y=$( "#nsFh #yh").find(":selected").val();
                                d=$("#nsFh #dh").find(":selected").val();
                                m=$("#nsFh #mh").find(":selected").val();
                                dtph=$("#nsFh input[type='radio'][name='dtph']:checked").val();
                                window.location.href='index.php?do=search&date='+d+'/'+m+'/'+y+'&dtp='+dtph+'&submit=true';
                                return false;

                    });
        var elements = document.getElementsByName("sim");
        for (var i = 0; i < elements.length; i++) {
            elements[i].oninvalid = function(e) {
                e.target.setCustomValidity("");
                if (!e.target.validity.valid) {
                    e.target.setCustomValidity("Quý khách vui lòng nhập những ký tự cho phép ([0-9] * x) VD: 09* , 09*999, 09*99x99, *1990");
                }
            };
            elements[i].oninput = function(e) {
                e.target.setCustomValidity("");
            };
        }
        $(".facebook").click(function(){
            
            window.open('http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo $_smarty_tpl->tpl_vars['share']->value['link'];?>
&p[images][0]=<?php echo $_smarty_tpl->tpl_vars['share']->value['img'];?>
&p[title]=<?php echo $_smarty_tpl->tpl_vars['share']->value['title'];?>
&p[summary]=', 'sharer', 'toolbar=0,status=0,width=548,height=425');
            return false;
            
        });
    })
    
<?php echo '</script'; ?>
>

<style>
    .img-responsive, .thumbnail > img, .thumbnail a > img {
    display: inline !important;
    max-width: 100%;
    height: auto;
    }
    #simgiamgia
    {
    margin: 0px;
    }
    #b {
    background: #1D1B1B;
    margin-top: 0px;
    padding-left: 15px;
    padding-top: 5px;
    padding-bottom: 5px;
    margin-bottom: -10px !important;
    }
    #b > a
    {
    color: #777;
    }
</style>
</body>
</html><?php }} ?>
