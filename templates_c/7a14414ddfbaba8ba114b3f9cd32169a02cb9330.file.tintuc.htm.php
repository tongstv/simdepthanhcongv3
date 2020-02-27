<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-12-12 15:54:41
         compiled from "template/tintuc.htm" */ ?>
<?php /*%%SmartyHeaderCode:3572239125df20051716fb4-96182631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a14414ddfbaba8ba114b3f9cd32169a02cb9330' => 
    array (
      0 => 'template/tintuc.htm',
      1 => 1576138664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3572239125df20051716fb4-96182631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5df200517c4885_03177850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df200517c4885_03177850')) {function content_5df200517c4885_03177850($_smarty_tpl) {?><div class="panel panel-success" style="text-align: left !important;">
  <div class="panel-heading">
    <h1 class="panel-title">Tin tức</h1>
  </div>
  <div class="panel-body" style="background-color: #fff !important;">

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
     <div class="row" style="padding: 25px;">

         <div class="row">
     <h3><a href="/p/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_url'];?>
"  style="color: #ad0909;margin-left: 10px !important;font-size: 15px"><?php echo $_smarty_tpl->tpl_vars['row']->value['page_title'];?>
</a></h3>

         </div>
     
     <div class="row">
     
     <div class="col-md-4 col-lg-4">
     
    <?php if (isset($_smarty_tpl->tpl_vars['row']->value['img'])) {?>
    
<a href="/p/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_url'];?>
">
 <div class="img-thumbnail" style="max-height: 90px; overflow: hidden;">
    <?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>

    </div>
</a>
    <?php } else { ?>
        
        <?php }?>
     </div>
     
          <div class="col-md-8 col-lg-8">
          
          <?php echo substr($_smarty_tpl->tpl_vars['row']->value['page_detail'],0,350);?>
..
          </div>
     </div>
     </div>
    <?php endfor; endif; ?>

  </div>
</div>

<div class="pagination"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div><?php }} ?>
