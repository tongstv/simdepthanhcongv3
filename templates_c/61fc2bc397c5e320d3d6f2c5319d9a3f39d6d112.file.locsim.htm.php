<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-07 15:28:54
         compiled from "template/locsim.htm" */ ?>
<?php /*%%SmartyHeaderCode:18762567805dc3d5c65f3373-13054167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61fc2bc397c5e320d3d6f2c5319d9a3f39d6d112' => 
    array (
      0 => 'template/locsim.htm',
      1 => 1572670798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18762567805dc3d5c65f3373-13054167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc3d5c66493f5_71875802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc3d5c66493f5_71875802')) {function content_5dc3d5c66493f5_71875802($_smarty_tpl) {?>
<?php echo $_smarty_tpl->tpl_vars['input']->value;?>








    
    
<ul class="filter" id="filter">
        <li class="frange" onclick="showFilter('listlengthFilter')">
            <span class="criteria">&nbsp;&nbsp;&nbsp;&nbsp;Đầu số</span>
            <div id="listlengthFilter" class="listprice">
                <i class="closefilter glyphicon glyphicon-remove"></i>
                <!-- <button type="button" class="closefilter"><i class="ic-closefilter"></i></button> -->
                <label id="lF0" onclick="lengthFilter(0);" class="all check">Tất cả</label>
                <label id="lF09" onclick="lengthFilter('09');">Đầu số 09 </label>
                <label id="lF08" onclick="lengthFilter('08');">Đầu số 08 </label>
                
                  <label id="lF07" onclick="lengthFilter('07');">Đầu số 07 </label>
                  
                   <label id="lF05" onclick="lengthFilter('05');">Đầu số 05 </label>
                   
                      <label id="lF03" onclick="lengthFilter('03');">Đầu số 03 </label>
            </div>
        </li>

        
        <li class="frange" onclick="showFilter('listTelcoFilter')">
            <span class="criteria"><span class="hide480">Nhà </span>Mạng</span>
            <div id="listTelcoFilter" class="listprice">
                <i class="closefilter glyphicon glyphicon-remove"></i>
                <!-- <button type="button" class="closefilter"><i class="ic-closefilter"></i></button> -->
                <label id="tF" onclick="telcoFilter()" class="all check">Tất các mạng</label>
                <label id="tFviettel" onclick="telcoFilter('viettel')">Viettel</label>
                <label id="tFvinaphone" onclick="telcoFilter('vinaphone')">Vinaphone</label>
                <label id="tFmobifone" onclick="telcoFilter('mobifone')">Mobifone</label>
                <label id="tFvietnamobile" onclick="telcoFilter('vietnamobile')">Vietnamobile</label>
                <label id="tFgmobile" onclick="telcoFilter('gmobile')">Gmobile</label>
            </div>
        </li>
        

        
        <li class="frange" onclick="showFilter('listPriceFilter');var objDiv = document.getElementById('listPriceFilter');objDiv.scrollTop = objDiv.scrollHeight;">
            <span class="criteria"><span class="hide480">Khoảng </span>Giá</span>
            <div id="listPriceFilter" class="listprice">
                <i class="closefilter glyphicon glyphicon-remove"></i>
                <!-- <button type="button" class="closefilter"><i class="ic-closefilter"></i></button> -->
                <label id="pF0" onclick="priceFilter(0);" class="all check">Tất cả mức giá</label>
                <label id="pF01" onclick="priceFilter('0,1');">Dưới 1 triệu</label>
                <label id="pF13" onclick="priceFilter('1,3');">1 - 3 triệu</label>
                <label id="pF35" onclick="priceFilter('3,5');">3 - 5 triệu</label>
                <label id="pF510" onclick="priceFilter('5,10');">5 - 10 triệu</label>
                <label id="pF1020" onclick="priceFilter('10,20');">10 - 20 triệu</label>
                <label id="pF2050" onclick="priceFilter('20,50');">20 - 50 triệu</label>
                <label id="pF50100" onclick="priceFilter('50,100');">50 - 100 triệu</label>
                <label id="pF1000" onclick="priceFilter('100,0');">Trên 100 triệu</label>
            </div>
        </li>
        
        <li class="frange" onclick="showFilter('listSortFilter')">
            <span class="criteria">Sắp xếp</span>
            <div id="listSortFilter" class="listprice">
                <i class="closefilter glyphicon glyphicon-remove"></i>
          
                <label id="sF0" onclick="sortFilter(0)" class="all check">Ngẫu nhiên</label>
                <label id="sF1" onclick="sortFilter(1)">Giá thấp đến cao</label>
                <label id="sF2" onclick="sortFilter(2)">Giá cao đến thấp</label>
               
            </div>
        </li>
    </ul>
    <form style="margin-bottom: 0px;" id="filter_form" name="filter_form" method="post" action="">
    <input type="hidden"  name="stvlocsim" value="true" />
    
    <input type="hidden" name="m10so_filter" id="m10so_filter" />
    <input type="hidden"  name="price_filter" id="price_filter" />
    <input type="hidden" name="telco_filter" id="telco_filter" />
    <input type="hidden"  name="giaban_filter" id="giaban_filter" />

    </form>
    <div class="choosedfilter">
        <a id="choosedfilter" class="reset" href="javascript:resetFilter();">Xóa tất cả<i class="ic-clearfil"></i></a>
        
        
        
    </div>
    

<?php echo '<script'; ?>
 type="text/javascript">


        function setFilterAll() {
            var price_filter1  = document.getElementById('price_filter1').value;
            var telco_filter1  = document.getElementById('telco_filter1').value;
            var giaban_filter1 = document.getElementById('giaban_filter1').value;
            var m10so_filter1  = document.getElementById('m10so_filter1').value;
            set_filter2(price_filter1,telco_filter1,giaban_filter1,m10so_filter1);
        }
        window.onload = setFilterAll;
        
        function ctsim(sosim)
        {
        sosim = sosim.replace(/\D/g, "");
        document.getElementById("chitietsim").action = sosim;
        document.getElementById("chitietsim").submit();
        }
    
    
    


function showFilter(e) {
    "listPriceFilter" == e ? ($("#listPriceFilter").slideToggle(400), $("#listTelcoFilter").slideUp(100), $("#listSortFilter").slideUp(100), $("#listlengthFilter").slideUp(100)) : "listTelcoFilter" == e ? ($("#listTelcoFilter").slideToggle(400), $("#listPriceFilter").slideUp(100), $("#listSortFilter").slideUp(100), $("#listlengthFilter").slideUp(100)) : "listSortFilter" == e ? ($("#listTelcoFilter").slideUp(100), $("#listPriceFilter").slideUp(100), $("#listSortFilter").slideToggle(400), $("#listlengthFilter").slideUp(100)) : "listlengthFilter" == e && ($("#listTelcoFilter").slideUp(100), $("#listPriceFilter").slideUp(100), $("#listSortFilter").slideUp(100), $("#listlengthFilter").slideToggle(400))
}

function set_filter2(e, t, l, i) {
    "" == i && (i = "0"), "" == e && (e = "0"), "" == l && (l = "0"), "" == t && (t = "0"), html = "", "0" != i && (document.getElementById("lF0").className = "all", document.getElementById("lF" + i.replace(",", "")).className = "check", html += '<a href="javascript:;" onclick="lengthFilter(0)">' + document.getElementById("lF" + i.replace(",", "")).textContent + ' <i class="glyphicon glyphicon-remove"></i></a>'), "0" != e && (document.getElementById("pF0").className = "all", document.getElementById("pF" + e.replace(",", "")).className = "check", html += '<a href="javascript:;" onclick="priceFilter(0)">' + document.getElementById("pF" + e.replace(",", "")).textContent + ' <i class="glyphicon glyphicon-remove"></i></a>'), "0" != t && (document.getElementById("tF").className = "all", document.getElementById("tF" + t.replace(",", "")).className = "check", html += '<a href="javascript:;" onclick="telcoFilter(0)">' + document.getElementById("tF" + t.replace(",", "")).textContent + ' <i class="glyphicon glyphicon-remove"></i></a>'), "0" != l && (document.getElementById("sF0").className = "all", document.getElementById("sF" + l.replace(",", "")).className = "check", html += '<a href="javascript:;" onclick="sortFilter(0)">' + document.getElementById("sF" + l.replace(",", "")).textContent + ' <i class="glyphicon glyphicon-remove"></i></a>'), document.getElementById("choosedfilter").insertAdjacentHTML("beforebegin", html), document.getElementById("m10so_filter").value = i, document.getElementById("price_filter").value = e, document.getElementById("telco_filter").value = t, document.getElementById("giaban_filter").value = l
}

function priceFilter(e) {
    document.getElementById("price_filter").value = e + "", submit_filter()
}

function telcoFilter(e) {
    document.getElementById("telco_filter").value = e + "", submit_filter()
}

function sortFilter(e) {
    document.getElementById("giaban_filter").value = e + "", submit_filter()
}

function lengthFilter(e) {
    document.getElementById("m10so_filter").value = e + "", submit_filter()
}

function resetFilter() {
    document.getElementById("m10so_filter").value = 0, document.getElementById("price_filter").value = 0, document.getElementById("telco_filter").value = 0, document.getElementById("giaban_filter").value = 0, submit_filter()
}

function submit_filter() {
    document.getElementById("filter_form").submit()
}
ishowPrice = !1, ishowTelco = !1, ishowSort = !1, ishowLength = !1;

    <?php echo '</script'; ?>
>
        

    
    <style>
.filter {
    float: left;
    display: block;
    background: #ccc !important;   /** Mầu nền**/
    border-top: 1px solid #ccc;
    width: 100%;
    padding: 0;
    margin: 0;
    position: relative;
}
    
    .filter li .criteria,
    .filter li .selected,
    .criteria {
        display: inline-block;
        overflow: hidden;
        font-size: 14px;
        color: #fff;   /** Mầu chữ **/
        padding-left: 10px;
        cursor: pointer;
        line-height: 40px;
    }
    
    .filter li {
        display: table-cell;
        height: 40px;
        width: 1%;
        vertical-align: top;
        font-size: 14px;
        position: relative;
        white-space: nowrap;
        margin-left: 4px;
    }
    
    .filter li .listprice {
        width: 190px;
        right: -20px;
    }
    
    .filter li label {
        display: block;
        padding: 6px 0 7px;
        cursor: pointer;
    }
    
    .filter li > a {
        color: #fff;
        display: inline-block;
        vertical-align: top;
        padding-left: 10px;
        line-height: 40px;
    }
    
    .filter li .criteria:after {
        content: '';
        width: 0;
        height: 0;
        border-top: 6px solid #ffffff;  /* mầu icon drop **/
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        display: inline-block;
        vertical-align: middle;
        margin-left: 1px;
    }
    
    .filter li div:before {
        content: '';
        width: 0;
        height: 0;
        position: absolute;
        bottom: 100%;
        left: 45%;
        border-bottom: 10px solid #d9d9d9;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
    }
    
    .filter li div:after {
        content: '';
        width: 0;
        height: 0;
        position: absolute;
        bottom: 99%;
        left: 45%;
        border-bottom: 10px solid #fff;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
    }
    
    .filter li .listprice {
        width: 190px;
        right: -20px;
    }
    
    .filter li div {
        display: none;
        overflow: visible;
        background: #ac0909;  /* mầu nền bộ lọ */
        border: 1px solid #d9d9d9;
        border-radius: 4px;
        box-shadow: 0 10px 10px 0 rgba(0, 0, 0, .1);
        padding: 5px 10px;
        position: absolute;
        right: -45%;
        top: 40px;
        z-index: 11;
    }
    
    .choosedfilter {
        display: block;
        overflow: hidden;
        background: #fff;
        margin: 10px 0 0 0;
        clear: both;
    }
    
    .choosedfilter a {
        display: inline-block;
        vertical-align: text-bottom;
        padding: 6px;
        background: #288ad6;
        font-size: 12px;
        font-weight: bold;
        color: #fff;
        border-radius: 4px;
        margin-right: 5px;
        line-height: 18px;
        margin-top: 1px;
        margin-bottom: 1px;
    }
    
    .choosedfilter a.reset {
        background: #c10017;
    }
    
    [class^="ic-"],
    [class*="ic-"],
    [class^="iconmobile-"],
    [class*="iconmobile-"] display:inline-block;
    height:30px;
    width:30px;
    line-height:30px;
    vertical-align:middle;
}
.ic-clearfil {
    background-position: -115px -69px;
    width: 10px;
    height: 10px;
    margin: -1px 0 0 3px;
    vertical-align: middle;
}
.ic-checkbox {
    background-position: -10px -69px;
    width: 20px;
    height: 20px;
}
.ic-checkbox-active {
    background-position: -30px -69px;
    width: 20px;
    height: 20px;
}
.choosedfilter .reset {
    display: none
}
.choosedfilter a+a+.reset {
    display: inline-block
}
.filter li .closefilter {
    border: 0;
    background: none;
    width: 20px;
    height: 20px;
    position: absolute;
    right: 8px;
    top: 10px;
    cursor: pointer;
}
.ic-closefilter {
    background-position: -71px -69px;
    width: 19px !important;
    height: 18px !important;
}
.filter li .listprice label {
    text-indent: 20px;
}
.filter li div .all {
    display: block;
    overflow: hidden;
    border-bottom: 1px solid #d9d9d9;   
    font-size: 14px;
    color: #6fa510;   /* Tất cả */
    padding: 10px 0;
}
.filter li .check .ic-checklist {
    display: inline-block;
    margin-left: -20px;
}
.filter li div .prevent {
    pointer-events: none;
}
.filter li div a {
    color: #6fa510;
    vertical-align: top;
    display: inline;
    padding: 0;
    margin: 0;
    line-height: normal;
}
.ic-checklist {
    background-position: -49px -67px;
    width: 16px !important;
    height: 14px !important;
    display: none !important;
}
.filter li .check .ic-checklist {
    display: inline-block !important;
    margin-left: -20px;
}
.filter label:hover a {
    color: #288ad6;
}
.show_more {
    text-align: center;
}
.show_more:before {
    height: 55px;
    margin-top: -45px;
    content: -webkit-gradient(linear, 0% 100%, 0% 0%, from(#fff), color-stop(.2, #fff), to(rgba(255, 255, 255, 0)));
    display: block;
}
.btn_show_more_pt {
    width: 90px;
    display: block;
    overflow: hidden;
    position: relative;
    line-height: 40px;
    font-size: 14px;
    color: #288ad6;
    margin: 10px auto;
    cursor: pointer;
}
.btn_show_more_pt:after {
    content: '';
    width: 0;
    right: 0;
    border-top: 6px solid #288ad6;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    display: inline-block;
    vertical-align: middle;
    margin: -2px 0 0 5px;
}
.btn_show_more_pt:hover {}
.box-about-sim1 {
    background-color: #FFF;
    overflow: hidden;
    padding: 10px;
}
.filter li:first-child .listprice {
    width: 164px;
    left: 0px;
}
.filter li:last-child .listprice {
    right: 0px;
}
.filter .check {
    position: relative;
}
.filter li div .all {
    padding: 6px 0 7px;
}
.filter .check:before {
   content:"\e013";
   
   
   position: relative;top: 1px;display: inline-block;font-family: 'Glyphicons Halflings';font-style: normal;font-weight: normal;line-height: 1;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;
   
   

    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    color: #288ad6;
    font-size: 16px;
    position: absolute;
    top: 5px;
    left: -18px;
}
.filter label {
    font-weight: normal;
    margin-bottom: 0px;
}
.filter li label {
    padding: 6px 0 0px
}
.filter label:hover {
    color: #288ad6;
    font-weight: normal;
}
.filter li div .all:hover {
    color: #288ad6;
}
.filter.w_20_li li {
    width: 20%
}
    </style>
    
       <?php }} ?>
