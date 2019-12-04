<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-07 15:31:59
         compiled from "template/ordered.htm" */ ?>
<?php /*%%SmartyHeaderCode:4947882795dc3d67f381a34-82556960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81c8e029ae0d4473d7b6bfd2214c9e502b7669e5' => 
    array (
      0 => 'template/ordered.htm',
      1 => 1556238731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4947882795dc3d67f381a34-82556960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'mycart' => 0,
    'tt' => 0,
    'city' => 0,
    'datmua' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc3d67f4c8ac5_57023919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc3d67f4c8ac5_57023919')) {function content_5dc3d67f4c8ac5_57023919($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?><link rel="stylesheet" href="/apps/css/chosen.css?s=999">
<?php echo '<script'; ?>
 src="/apps/js/jquery.min.js?d=9999"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/js/chosen.js?s=000"><?php echo '</script'; ?>
>
<div class="panel panel-success">
    <div class="panel-heading">
        <h1 class="panel-title" style="font-size: 10px;">Đặt mua sim <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['sim1'];?>
 giá gốc rẻ nhất thị trường</h1>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="POST" id="ordered" action="index.php?do=ordered.done"
              onsubmit="return checkorder()">
            <table class="table table-hover table-condensed table-bordered">
                <!-- <thead>
                <tr>
                 <th class="active text-center col-md-1">STT</th>
                  <th class="active text-center">Số sim</th>
                   <th class="active"></th>
                   <th class="active"></th>

                </tr>
                </thead> -->

                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
$_smarty_tpl->tpl_vars['row']->value = $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]; $_smarty_tpl->tpl_vars['row']->nocache = null; $_smarty_tpl->tpl_vars['row']->scope = 0;
} else $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']], null, 0);?>

                <tr>

                    <td class="text-center"> <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['d']['index']+1;?>
</td>
                    <td style="vertical-align: baseline;">
                        <input type="hidden" name="simdlx[<?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['simdl'];?>
"/>
                        <input type="hidden" name="sim[<?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
]" value="<?php echo ($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000);?>
"/>
                        <div>Số sim: <strong style="font-size: 22px; color: gold;"><?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
</strong></div>
                        <div>Giá bán: <strong style="font-size: 17px; color: gold;"><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000));?>
</strong>
                            <sup>vnđ</sup></div>
                        <div>(<?php echo $_smarty_tpl->tpl_vars['row']->value['doctien'];?>
)</div>

                    </td>
                    <td>


                        <img width="200" class="img-responsive" src="<?php echo ($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
.jpg"
                             alt="sim <?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
"/>

                    </td>
                    <td class="text-center"><a href="javascript://" class="delcart" data-sim="<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
"> <i
                            class="glyphicon glyphicon-trash text-danger"></i></a></td>

                </tr>


                <?php endfor; endif; ?>
                <?php if (isset($_smarty_tpl->tpl_vars['mycart']->value)) {?>
                <tr>
                    <td colspan="4" class="active">
                        <?php if (isset($_smarty_tpl->tpl_vars['tt']->value)) {?>
                        <h5 class="pull-right">
                            Tổng tiền: <span id="total"><?php echo number_format(($_smarty_tpl->tpl_vars['tt']->value*1000000));?>
</span> VNĐ
                        </h5>
                        <?php }?>
                    </td>
                </tr>
                <?php }?>
            </table>

            <div class="clearfix"></div>
            <br/>
            <div class="row">
                <div class="col-md-12">


                    <div class="form-group">
                        <label class="control-label col-md-4 col-xs-3">Họ và tên: <span class="red">(*)</span></label>
                        <div class="col-md-7 col-xs-9">
                            <input name="fullname" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-xs-3">Điện thoại: <span class="red">(*)</span></label>
                        <div class="col-md-7 col-xs-9">
                            <input name="phone" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4 col-xs-3">Địa chỉ: <span class="red">(*)</span></label>

                        <div class="col-md-7 col-xs-9">

                            <textarea name="address" class="form-control "></textarea>
                        </div>
                    </div>


                    <div class="form-group hidden-xs">
                        <label class="control-label col-md-4 col-xs-3">Tỉnh/TP: <span
                                class="red hidden-xs">(*)</span></label>
                        <div class="col-md-7 col-xs-9">
                            <input type="hidden" name="city"/>
                            <input type="hidden" name="qh"/>
                            <input type="hidden" name="px"/>
                            <select id="city" class="form-control city">
                                <option value="0">Chọn Tỉnh/TP</option>
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['city']->value),$_smarty_tpl);?>

                            </select>
                        </div>
                    </div>


                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-4 col-xs-3">Ghi chú:</label>
                        <div class="col-md-7 col-xs-9">
                            <textarea class="form-control" name="note" style="height: 50px;"></textarea>

                        </div>
                    </div>


                    <div class="form-group form-group-sm">
                        <div class="col-md-12">
                            <div class="text-center">
                                <button name="submit" class="btn btn-success">Đặt mua</button>
                                <button type="reset" class="btn btn-default">Làm lại</button>
                            </div>
                        </div>
                    </div>

        </form>
    </div>


</div>

</div>
</div>

<div class="panel ">
    <div class="panel-heading">
        <h2><?php echo $_smarty_tpl->tpl_vars['datmua']->value['title'];?>
</h2>
    </div>
    <div class="panel-body">
        <?php echo $_smarty_tpl->tpl_vars['datmua']->value['detail'];?>

    </div>
</div>

<?php echo '<script'; ?>
>
    $(function () {

        $("#city").change(function () {
            index = $(this).find('option:selected').val();
            $(".district").remove();
            $(".se1").remove();
            $.get('{$thisdomain}/index.php?ajax=city.getdistrict&id=' + index).done(function (data) {

                $("#city").parents('.form-group').after(data);

            });

            city = $("#city").find('option:selected').text();
            $("input[name='city']").val(city);

        });
        $(document).on('change', '.district', function () {
            index = $(this).find('option:selected').val();
            $(".se2").remove();
            $.get('{$thisdomain}/index.php?ajax=city.getward&id=' + index).done(function (data) {

                $(".district").parents('.form-group').after(data);


            });
            qh = $(".se1").find('option:selected').text();
            $("input[name='qh']").val(qh);
        });


        $(document).on('change', '.ward', function () {

            px = $(".se2").find('option:selected').text();
            $("input[name='px']").val(px);
        });


        $(".city").chosen({search_contains: true, width: "100%"});
    })

<?php echo '</script'; ?>
>

<?php }} ?>
