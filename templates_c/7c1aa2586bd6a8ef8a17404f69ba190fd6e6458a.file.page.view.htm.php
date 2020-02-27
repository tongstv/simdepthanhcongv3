<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-12-12 15:25:30
         compiled from "template/page.view.htm" */ ?>
<?php /*%%SmartyHeaderCode:18955625695df1f97a3816b6-20766907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c1aa2586bd6a8ef8a17404f69ba190fd6e6458a' => 
    array (
      0 => 'template/page.view.htm',
      1 => 1576138698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18955625695df1f97a3816b6-20766907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'page_detail' => 0,
    'more' => 0,
    'thisurl' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5df1f97a3d6155_12815701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df1f97a3d6155_12815701')) {function content_5df1f97a3d6155_12815701($_smarty_tpl) {?><div class="panel panel-success">
    <div class="panel-heading">
        <h1 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)) {
echo $_smarty_tpl->tpl_vars['page_title']->value;
}?></h1>
    </div>
    <div class="panel-body">
        <div class="table-condensed">

            <?php if (isset($_smarty_tpl->tpl_vars['page_detail']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['page_detail']->value;?>
 <?php }?>

        </div>
    </div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['more']->value)) {?>
<div class="panel panel-success">
    <?php echo '<script'; ?>
>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
    <div class="panel panel-success">
        <div class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['thisurl']->value;?>
" data-layout="standard" data-action="like" data-size="small"
             data-show-faces="true" data-share="true"></div>
        <div class="panel-heading">
            <h2 class="panel-title">Tin liên quan</h2>
        </div>
        <div class="panel-body">
            <ul>

                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['more']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['more']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']], null, 0);?>
                <li style="text-align: left;">
                    <a href="/p/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_url'];?>
" style="color: black"><?php echo $_smarty_tpl->tpl_vars['row']->value['page_title'];?>
</a>
                </li>
                <?php endfor; endif; ?>


            </ul>
        </div>
    </div>
</div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ('seo.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
