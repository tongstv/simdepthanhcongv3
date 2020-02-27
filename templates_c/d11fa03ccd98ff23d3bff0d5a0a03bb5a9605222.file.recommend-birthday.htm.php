<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-05 21:28:43
         compiled from "template/recommend-birthday.htm" */ ?>
<?php /*%%SmartyHeaderCode:16583440015e3a2ccf3a4804-40118383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd11fa03ccd98ff23d3bff0d5a0a03bb5a9605222' => 
    array (
      0 => 'template/recommend-birthday.htm',
      1 => 1580912917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16583440015e3a2ccf3a4804-40118383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e3a2ccf3aa5f5_80211785',
  'variables' => 
  array (
    'recommend' => 0,
    'recommend_value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e3a2ccf3aa5f5_80211785')) {function content_5e3a2ccf3aa5f5_80211785($_smarty_tpl) {?><div class="panel">
  <div class="panel-heading">
    <h2 class="panel-title">CHỌN THÁNG SINH TRONG NĂM <?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</h2>
  </div>
  <div class="panel-body">
    <ul class="nam-tab">
      <li onclick="openRecommend('thang-1')">Tháng 1</li>
      <li onclick="openRecommend('thang-2')">Tháng 2</li>
      <li onclick="openRecommend('thang-3')">Tháng 3</li>
      <li onclick="openRecommend('thang-4')">Tháng 4</li>
      <li onclick="openRecommend('thang-5')">Tháng 5</li>
      <li onclick="openRecommend('thang-6')">Tháng 6</li>
      <li onclick="openRecommend('thang-7')">Tháng 7</li>
      <li onclick="openRecommend('thang-8')">Tháng 8</li>
      <li onclick="openRecommend('thang-9')">Tháng 9</li>
      <li onclick="openRecommend('thang-10')">Tháng 10</li>
      <li onclick="openRecommend('thang-11')">Tháng 11</li>
      <li onclick="openRecommend('thang-12')">Tháng 12</li>
    </ul>

    <ul class="nam-items">

      <li class="nam-hide" id="thang-1">
        <div class="nam-title">Chọn sim theo ngày sinh của bạn trong tháng 01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</div>
        <ul class="nam-item">
          <li><a href="index.php?do=search&date=01/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 01/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=02/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 02/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=03/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 03/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=04/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 04/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=05/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 05/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=06/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 06/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=07/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 07/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=08/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 08/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=09/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 09/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=10/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 10/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=11/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 11/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=12/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 12/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=13/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 13/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=14/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 14/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=15/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 15/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=16/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 16/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=17/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 17/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=18/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 18/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=19/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 19/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=20/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 20/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=21/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 21/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=22/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 22/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=23/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 23/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=24/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 24/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=25/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 25/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=26/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 26/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=27/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 27/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=28/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 28/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=29/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 29/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=30/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 30/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=31/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 31/01/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
        </ul>
      </li>


      <li class="nam-hide" id="thang-2">
        <div class="nam-title">Chọn sim theo ngày sinh của bạn trong tháng 02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</div>
        <ul class="nam-item">
          <li><a href="index.php?do=search&date=01/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 01/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=02/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 02/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=03/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 03/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=04/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 04/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=05/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 05/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=06/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 06/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=07/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 07/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=08/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 08/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=09/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 09/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=10/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 10/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=11/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 11/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=12/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 12/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=13/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 13/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=14/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 14/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=15/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 15/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=16/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 16/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=17/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 17/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=18/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 18/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=19/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 19/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=20/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 20/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=21/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 21/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=22/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 22/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=23/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 23/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=24/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 24/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=25/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 25/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=26/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 26/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=27/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 27/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=28/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 28/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=29/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 29/02/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
        </ul>
      </li>

      <li class="nam-hide" id="thang-3">
        <div class="nam-title">Chọn sim theo ngày sinh của bạn trong tháng 03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</div>
        <ul class="nam-item">
          <li><a href="index.php?do=search&date=01/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 01/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=02/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 02/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=03/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 03/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=04/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 04/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=05/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 05/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=06/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 06/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=07/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 07/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=08/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 08/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=09/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 09/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=10/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 10/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=11/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 11/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=12/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 12/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=13/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 13/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=14/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 14/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=15/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 15/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=16/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 16/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=17/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 17/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=18/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 18/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=19/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 19/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=20/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 20/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=21/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 21/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=22/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 22/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=23/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 23/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=24/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 24/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=25/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 25/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=26/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 26/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=27/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 27/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=28/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 28/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=29/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 29/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=30/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 30/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=31/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 31/03/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
        </ul>
      </li>

      <li class="nam-hide" id="thang-4">
        <div class="nam-title">Chọn sim theo ngày sinh của bạn trong tháng 04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</div>
        <ul class="nam-item">
          <li><a href="index.php?do=search&date=01/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 01/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=02/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 02/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=03/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 03/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=04/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 04/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=05/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 05/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=06/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 06/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=07/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 07/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=08/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 08/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=09/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 09/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=10/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 10/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=11/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 11/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=12/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 12/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=13/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 13/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=14/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 14/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=15/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 15/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=16/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 16/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=17/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 17/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=18/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 18/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=19/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 19/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=20/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 20/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=21/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 21/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=22/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 22/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=23/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 23/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=24/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 24/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=25/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 25/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=26/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 26/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=27/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 27/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=28/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 28/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=29/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 29/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=30/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 30/04/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
        </ul>
      </li>


      <li class="nam-hide" id="thang-5">
        <div class="nam-title">Chọn sim theo ngày sinh của bạn trong tháng 05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</div>
        <ul class="nam-item">
          <li><a href="index.php?do=search&date=01/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 01/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=02/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 02/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=03/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 03/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=04/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 04/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=05/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 05/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=06/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 06/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=07/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 07/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=08/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 08/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=09/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 09/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=10/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 10/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=11/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 11/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=12/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 12/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=13/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 13/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=14/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 14/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=15/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 15/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=16/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 16/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=17/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 17/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=18/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 18/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=19/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 19/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=20/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 20/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=21/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 21/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=22/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 22/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=23/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 23/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=24/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 24/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=25/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 25/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=26/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 26/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=27/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 27/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=28/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 28/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=29/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 29/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=30/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 30/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=31/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 31/05/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
        </ul>
      </li>

      <li class="nam-hide" id="thang-6">
        <div class="nam-title">Chọn sim theo ngày sinh của bạn trong tháng 06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</div>
          <ul class="nam-item">
            <li><a href="index.php?do=search&date=01/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 01/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=02/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 02/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=03/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 03/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=04/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 04/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=05/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 05/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=06/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 06/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=07/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 07/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=08/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 08/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=09/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 09/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=10/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 10/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=11/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 11/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=12/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 12/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=13/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 13/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=14/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 14/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=15/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 15/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=16/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 16/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=17/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 17/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=18/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 18/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=19/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 19/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=20/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 20/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=21/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 21/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=22/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 22/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=23/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 23/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=24/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 24/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=25/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 25/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=26/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 26/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=27/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 27/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=28/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 28/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=29/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 29/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
            <li><a href="index.php?do=search&date=30/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 30/06/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          </ul>
        </ul>
      </li>

      <li class="nam-hide" id="thang-7">
        <div class="nam-title">Chọn sim theo ngày sinh của bạn trong tháng 07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</div>
        <ul class="nam-item">
          <li><a href="index.php?do=search&date=01/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 01/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=02/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 02/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=03/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 03/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=04/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 04/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=05/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 05/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=06/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 06/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=07/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 07/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=08/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 08/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=09/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 09/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=10/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 10/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=11/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 11/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=12/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 12/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=13/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 13/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=14/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 14/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=15/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 15/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=16/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 16/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=17/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 17/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=18/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 18/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=19/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 19/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=20/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 20/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=21/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 21/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=22/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 22/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=23/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 23/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=24/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 24/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=25/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 25/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=26/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 26/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=27/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 27/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=28/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 28/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=29/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 29/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=30/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 30/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=31/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 31/07/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
        </ul>
      </li>

      <li class="nam-hide" id="thang-8">
        <div class="nam-title">Chọn sim theo ngày sinh của bạn trong tháng 08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</div>
        <ul class="nam-item">
          <li><a href="index.php?do=search&date=01/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 01/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=02/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 02/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=03/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 03/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=04/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 04/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=05/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 05/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=06/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 06/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=07/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 07/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=08/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 08/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=09/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 09/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=10/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 10/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=11/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 11/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=12/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 12/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=13/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 13/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=14/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 14/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=15/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 15/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=16/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 16/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=17/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 17/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=18/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 18/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=19/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 19/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=20/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 20/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=21/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 21/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=22/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 22/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=23/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 23/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=24/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 24/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=25/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 25/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=26/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 26/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=27/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 27/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=28/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 28/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=29/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 29/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=30/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 30/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=31/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 31/08/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
        </ul>
      </li>

      <li class="nam-hide" id="thang-9">
        <div class="nam-title">Chọn sim theo ngày sinh của bạn trong tháng 09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</div>
        <ul class="nam-item">
          <li><a href="index.php?do=search&date=01/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 01/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=02/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 02/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=03/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 03/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=04/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 04/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=05/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 05/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=06/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 06/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=07/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 07/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=08/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 08/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=09/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 09/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=10/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 10/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=11/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 11/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=12/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 12/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=13/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 13/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=14/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 14/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=15/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 15/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=16/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 16/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=17/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 17/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=18/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 18/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=19/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 19/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=20/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 20/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=21/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 21/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=22/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 22/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=23/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 23/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=24/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 24/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=25/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 25/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=26/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 26/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=27/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 27/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=28/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 28/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=29/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 29/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=30/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 30/09/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
        </ul>
      </li>

      <li class="nam-hide" id="thang-10">
        <div class="nam-title">Chọn sim theo ngày sinh của bạn trong tháng 10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</div>
        <ul class="nam-item">
          <li><a href="index.php?do=search&date=01/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 01/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=02/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 02/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=03/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 03/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=04/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 04/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=05/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 05/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=06/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 06/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=07/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 07/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=08/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 08/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=09/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 09/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=10/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 10/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=11/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 11/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=12/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 12/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=13/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 13/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=14/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 14/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=15/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 15/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=16/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 16/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=17/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 17/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=18/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 18/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=19/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 19/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=20/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 20/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=21/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 21/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=22/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 22/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=23/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 23/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=24/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 24/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=25/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 25/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=26/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 26/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=27/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 27/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=28/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 28/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=29/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 29/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=30/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 30/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=31/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 31/10/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
        </ul>
      </li>

      <li class="nam-hide" id="thang-11">
        <div class="nam-title">Chọn sim theo ngày sinh của bạn trong tháng 11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</div>
        <ul class="nam-item">
          <li><a href="index.php?do=search&date=01/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 01/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=02/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 02/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=03/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 03/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=04/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 04/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=05/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 05/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=06/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 06/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=07/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 07/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=08/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 08/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=09/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 09/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=10/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 10/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=11/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 11/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=12/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 12/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=13/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 13/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=14/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 14/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=15/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 15/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=16/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 16/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=17/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 17/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=18/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 18/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=19/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 19/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=20/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 20/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=21/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 21/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=22/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 22/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=23/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 23/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=24/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 24/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=25/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 25/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=26/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 26/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=27/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 27/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=28/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 28/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=29/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 29/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=30/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 30/11/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
        </ul>
      </li>

      <li class="nam-hide" id="thang-12">
        <div class="nam-title">Chọn sim theo ngày sinh của bạn trong tháng 12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</div>
        <ul class="nam-item">
          <li><a href="index.php?do=search&date=01/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 01/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=02/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 02/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=03/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 03/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=04/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 04/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=05/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 05/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=06/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 06/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=07/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 07/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=08/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 08/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=09/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 09/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=10/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 10/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=11/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 11/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=12/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 12/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=13/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 13/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=14/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 14/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=15/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 15/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=16/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 16/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=17/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 17/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=18/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 18/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=19/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 19/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=20/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 20/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=21/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 21/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=22/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 22/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=23/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 23/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=24/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 24/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=25/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 25/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=26/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 26/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=27/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 27/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=28/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 28/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=29/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 29/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=30/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 30/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
          <li><a href="index.php?do=search&date=31/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
&dtp=2&submit=true">Sinh ngày 31/12/<?php echo $_smarty_tpl->tpl_vars['recommend']->value;
echo $_smarty_tpl->tpl_vars['recommend_value']->value;?>
</a></li>
        </ul>
      </li>
    </ul>
  </div>


  <?php echo '<script'; ?>
>
    function openRecommend(cityName) {
      var i;
      var x = document.getElementsByClassName("nam-hide");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      document.getElementById(cityName).style.display = "block";
    }
    openRecommend('thang-1');
  <?php echo '</script'; ?>
>
  <style>
    /* Style the list */
    ul.nam-tab {
      list-style-type: none;
      margin: 0px 0px 10px 0px;
      padding: 0;
      overflow: hidden;
      border-left: 1px solid #ccc;
      border-top: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    /* Float the list items side by side */
    ul.nam-tab li {
      float: left;
      display: inline-block;
      color: black;
      text-align: center;
      padding: 3px 0px 3px 0px;
      text-decoration: none;
      transition: 0.3s;
      font-size: 15px;
      border-right: 1px solid #CCC;
      border-bottom: 1px solid #CCC;
      width: 16.5%;
    }

    /* Change background color of links on hover */
    ul.nam-tab li:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    ul.nam-tab li:focus,
    .active {
      background-color: #ccc;
    }

    .nam-title {
      font-weight: bold;
      text-align: center;
      font-size: 13px;
    }

    ul.nam-items {
      list-style-type: none;
      padding: 0px;
    }

    /* Style the tab content */
    ul.nam-item {
      margin: 10px 0px 10px 0px;
    }

    ul.nam-item li a {
      color: black !important;
      font-size: 13px;
    }

    ul.nam-item li {
      float: left;
      width: 25%;
      text-align: left;
      padding-bottom: 3px;
    }

    @media only screen and (max-width: 600px) {
      ul.nam-tab li {
        font-size: 13px;
      }

      ul.nam-item li {
        float: left;
        width: 50%;
      }
    }
  </style>
</div><?php }} ?>
