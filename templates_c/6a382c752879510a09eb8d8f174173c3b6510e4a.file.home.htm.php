<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-12-12 00:47:36
         compiled from "template/home.htm" */ ?>
<?php /*%%SmartyHeaderCode:19329406135df12bb85054d6-88958977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a382c752879510a09eb8d8f174173c3b6510e4a' => 
    array (
      0 => 'template/home.htm',
      1 => 1573810627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19329406135df12bb85054d6-88958977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'simkm' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5df12bb8592c80_55038548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df12bb8592c80_55038548')) {function content_5df12bb8592c80_55038548($_smarty_tpl) {?>
<div class="panel panel-success visible-xs">
    <div class="panel-body sns-wrap">
        <h4 class="sns-text">TÌM SIM <br> THEO NGÀY SINH</h4>
        <form method="GET" id="nsFh" action="index.php">
                <input name="do" value="search" type="hidden">
                <input id="date" name="date" value="" type="hidden">
                <div class="form-group dn-group">
                    <label style="width: 100%;">Ngày / Tháng / Năm</label>
                    <select id="dh">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select id="mh">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <select id="yh">
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 text-center p-0" style="padding: 0px !important;"><label> <input name="dtph" value="0" type="radio"> Tất cả</label> <label> <input name="dtph" value="2" type="radio" checked> DD/MM/YY</label> <label> <input name="dtph" value="1" type="radio" class="">YYYY</label></div>
                    <div class="col-xs-12 text-center margin-top"><input class="btn btn-primary btn-sm btn-blue" value="Tìm sim" type="submit" id="nsSubmit"></div>
                </div>
                <input name="submit" value="true" type="hidden">
            </form>
    </div>
  <div class="panel-heading">
    <h2 class="panel-title"><span class="icon-ds"><span class="text">SIM SỐ ĐẸP THEO MẠNG</span></span></h2>
  </div>
  <div class="panel-body"><div class="panel-body" style="padding: 5px;">
    <ul class="list-group">
      <a class="list-group-item" href="/index.php?do=search&network=3&giatu=&den=&sim=*&tongdiem=&tongnut=&submit=true">Sim số đẹp VinaPhone</a>
      <a class="list-group-item" href="/index.php?do=search&network=2&giatu=&den=&sim=*&tongdiem=&tongnut=&submit=true">Sim số đẹp Mobifone</a>
      <a class="list-group-item" href="/index.php?do=search&network=1&giatu=&den=&sim=*&tongdiem=&tongnut=&submit=true">Sim số đẹp Viettel</a>
      <a class="list-group-item" href="/index.php?do=search&network=4&giatu=&den=&sim=*&tongdiem=&tongnut=&submit=true">Sim số đẹp Vietnamobile</a>
      <a class="list-group-item" href="/index.php?do=search&network=5&giatu=&den=&sim=*&tongdiem=&tongnut=&submit=true">Sim số đẹp Gmobile</a>
    </ul>
  </div>
</div>
</div>


<div id="wrapper" class="wrapper">
    <div class="panel-heading">
        <h2 class="panel-title"><span class="icon-ds"><span class="text">Sim khuyến mãi trong ngày</span></span> 
            <span><img style="height: 35px !important; margin-top: -3px;" src="/data/new.gif" alt=""></span>
            <a target="_blank" href="index.php?ajax=home&amp;page=1&amp;print=true" class="pull-right glyphicon glyphicon-print"></a>

        </h2>
    </div> 
    <div id="container-home" class="container-home">
        <div class="photo-grid clearfix">
            <ul class="clearfix">
                
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['simkm']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
                
                <?php if (isset($_smarty_tpl->tpl_vars['row'])) {$_smarty_tpl->tpl_vars['row'] = clone $_smarty_tpl->tpl_vars['row'];
$_smarty_tpl->tpl_vars['row']->value = $_smarty_tpl->tpl_vars['simkm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]; $_smarty_tpl->tpl_vars['row']->nocache = null; $_smarty_tpl->tpl_vars['row']->scope = 0;
} else $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['simkm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']], null, 0);?>
                <li>
                    <div style=" padding: 2px; ">
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
.html">
                            <div class="simcard">
                            
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['mang']==1) {?>
                            
                            <div class="nha-mang-viettel spritestlvn"></div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['mang']==2) {?>
                            <div class="nha-mang-mobifone spritestlvn"></div>
                            
                            
                               <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['mang']==3) {?>
                            <div class="nha-mang-vinaphone spritestlvn"></div>
                            
                            
                               <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['mang']==4) {?>
                            <div class="nha-mang-vietnamobile spritestlvn"></div>
                            
                                  <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['mang']==5) {?>
                            <div class="nha-mang-gmobile spritestlvn"></div>
                            <?php } else { ?>
                             <div class="nha-mang-mayban spritestlvn"></div>
                            <?php }?>
                            
                  
                            <div class="so-sim-home"><?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
</div>
                            
                            <div class="gia-sim-home"><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000));?>
₫</div>
                            </div>
                        </a>
                    </div>
                </li>
        <?php endfor; endif; ?>
            </ul>
        </div>
        <a href="sim-hot.html" class="btn btn-success btn-sm">Xem thêm ...</a>
    </div>
</div>



<style type="text/css">
.wrapper {
    text-align: center;
    margin-bottom: 20px;
    background: #ffffff;
    border-color: #030202;
}
.wrapper .panel-heading {
    background-color: #c60a0a;
    border-radius: 4px 4px 0px 0px;
    font-weight: bold;
    max-width: 100%;
    text-align: left;
    height: 45px;
}
.spritestlvn {
    background-image: url("https://simthanglong.vn/images/spritestlvn.png");
    background-repeat: no-repeat;
    display: inline-block;
    height: 30px;
    width: 30px;
    line-height: 30px;
    vertical-align: middle;
}

.photo-grid {
    position: relative;
    max-width: 100%;
    word-wrap: break-word;
}
.photo-grid ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
.photo-grid li {
    float: left;
    position: relative;
    width: 33.333%;
}
.photo-grid ul a {
    color: #000;
    text-decoration: none;
}
#container-home .photo-grid ul li .simcard {
    text-align: center;
}
.photo-grid ul li .simcard {
    background: #fff;
    height: auto;
    border: 1px solid #ccc;
    padding: 13px;
    text-align: center;
    border-radius: 5px;
    box-shadow: 1px 1px #dadada;
}
.photo-grid ul li:hover .simcard {
    border: 1px solid #ff9800;
    color: #ff9800;
    background: #fef3df;
}
.nha-mang-viettel {
    border-left: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    width: 40px;
    height: 40px;
    background-color: #fff;
    border-radius: 50%;
    position: absolute;
    background-position: -360px -8px;
}
.nha-mang-mayban {
    border-left: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    width: 40px;
    height: 40px;
    background-color: #fff;
    border-radius: 50%;
    position: absolute;
    background-position: -9px -8px;
}
.nha-mang-gmoblie {
    border-left: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    width: 40px;
    height: 40px;
    background-color: #fff;
    border-radius: 50%;
    position: absolute;
    background-position: -9px -8px;
}
.nha-mang-vinaphone {
    border-left: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    width: 40px;
    height: 40px;
    background-color: #fff;
    border-radius: 50%;
    position: absolute;
    background-position: -427px -8px;
}
.nha-mang-mobiphone {
    border-left: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    width: 40px;
    height: 40px;
    background-color: #fff;
    border-radius: 50%;
    position: absolute;
    background-position: -147px -8px;
}
.nha-mang-vietnamobile {
    border-left: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    width: 40px;
    height: 40px;
    background-color: #fff;
    border-radius: 50%;
    position: absolute;
    background-position: -290px -8px;
}
.spritestlvn {
    background-image: url(/images/spritestlvn.png);
    background-repeat: no-repeat;
    display: inline-block;
    height: 40px;
    width: 40px;
    line-height: 30px;
    vertical-align: middle;
    position: absolute;
    top: 15px;
    left: 2px;
}
.so-sim-home {
    color: #161616;
    font-size: 14px;
    font-weight: 700;
    padding-bottom: 2px;
    position: relative;
}

</style>



<div class="panel panel-success">
  <div class="panel-heading">
    <h1 class="panel-title"><span class="icon-ds"><span class="text">Sim giá rẻ</span></span> <a target="_blank" href="index.php?ajax=home&amp;page=1&amp;print=true" class="pull-right glyphicon glyphicon-print"></a>
    </h1>
  </div>
  <div class="panel-body mp0">
  
  <?php echo $_smarty_tpl->getSubTemplate ('locsim.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
  
<table class="table table-bordered table-striped">

<!-- <thead>
<tr>

<th class="active center ">STT</th>
<th class="active" style="text-align: center;">
Số sim

</th>
<th class="active sortprice">Giá Tiền <span class="glyphicon"> <a class="pricetoogle" href="javascript://">
<?php if (!isset($_SESSION['toggleprice'])) {?>
<span class="glyphicon-arrow-up"></span><span class="glyphicon-arrow-down"></span>
<?php } elseif ($_SESSION['toggleprice']=='ASC') {?>
<span class="glyphicon-arrow-up text-warning"></span>
<?php } else { ?>
<span class="glyphicon-arrow-down text-warning"></span>
<?php }?>

</a>


</span></th>
<th class="active  text-center">Tổng</th>
<th class="active  text-center">Mạng</th>

<th class="active  text-center">Đặt Mua</th>
<th class="active  text-center">Giỏ hàng</th>

</tr>
</thead> -->

<?php echo $_smarty_tpl->getSubTemplate ('tbody.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<tfoot>
<tr>
<td colspan="6" class="text-right"><ul class="pagination pagination-sm pagination-xs"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</ul></td>
</tr>
</tfoot>
</table>
<?php echo $_smarty_tpl->getSubTemplate ('seo.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 </div>
</div>

<?php }} ?>
