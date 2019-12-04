<?php
header('Content-Type: text/html; charset=utf-8');
$nguhanh=array();

    function namtocanchi($namsinh)
    {
        $can = array(
            "Giáp",
            "Ất",
            "Bính",
            "Đinh",
            "Mậu",
            "Kỷ",
            "Canh",
            "Tân",
            "Nhâm",
            "Quý");
        $chi = array(
            "Tí",
            "Sửu",
            "Dần",
            "Mão",
            "Thìn",
            "Tỵ",
            "Ngọ",
            "Mùi",
            "Thân",
            "Dậu",
            "Tuất",
            "Hợi");
        $sodu_can = ($namsinh + 6) % 10;
        $sodu_chi = ($namsinh + 8) % 12;


        $can=$can[$sodu_can];
        $chi=$chi[$sodu_chi];
        
        $canchi=$can." ".$chi;
  

        if (($can == "Giáp" || $can == "Ất") && ($chi == "Tý" || $chi == "Sửu")) {

            $menhnien = "Mệnh niên: Hải Trung Kim (Vàng trong biển), thuộc hành KIM";

            $hanhcuamenhnien = "Kim";

        }

        if (($can == "Giáp" || $can == "Ất") && ($chi == "Dần" || $chi == "Mão")) {

            $menhnien = "Mệnh niên: Đại khe thủy (Nước khe lớn), thuộc hành THỦY";

            $hanhcuamenhnien = "Thủy";

        }

        if (($can == "Giáp" || $can == "Ất") && ($chi == "Thìn" || $chi == "Tị" || $chi ==
            "Tỵ")) {

            $menhnien = "Mệnh niên: Phú Đăng Hỏa (Lửa đèn to), thuộc hành HỎA";

            $hanhcuamenhnien = "Hỏa";

        }

        if (($can == "Giáp" || $can == "Ất") && ($chi == "Ngọ" || $chi == "Mùi")) {

            $menhnien = "Mệnh niên: Sa trung Kim (Vàng trong cát), thuộc hành KIM";

            $hanhcuamenhnien = "Kim";

        }

        if (($can == "Giáp" || $can == "Ất") && ($chi == "Thân" || $chi == "Dậu")) {

            $menhnien = "Mệnh niên: Tuyền trung Thủy (Nước trong suối), thuộc hành THỦY";

            $hanhcuamenhnien = "Thủy";

        }

        if (($can == "Giáp" || $can == "Ất") && ($chi == "Tuất" || $chi == "Hợi")) {

            $menhnien = "Mệnh niên: Sơn đầu hỏa (Lửa trên núi), thuộc hành HỎA";

            $hanhcuamenhnien = "Hỏa";

        }

        if (($can == "Bính" || $can == "Đinh") && ($chi == "Tý" || $chi == "Sửu")) {

            $menhnien = "Mệnh niên: Giản hạ Thủy (Nước khe suối), thuộc hành THỦY"; //

            $hanhcuamenhnien = "Thủy";

        }

        if (($can == "Bính" || $can == "Đinh") && ($chi == "Dần" || $chi == "Mão")) {

            $menhnien = "Mệnh niên: Lư trung Hỏa (Lửa trong lò), thuộc hành HỎA"; //

            $hanhcuamenhnien = "Hỏa";

        }

        if (($can == "Bính" || $can == "Đinh") && ($chi == "Thìn" || $chi == "Tị" || $chi ==
            "Tỵ")) {

            $menhnien = "Mệnh niên: Sa trung Thổ (Đất pha Cát), thuộc hành THỔ"; //

            $hanhcuamenhnien = "Thổ";

        }

        if (($can == "Bính" || $can == "Đinh") && ($chi == "Ngọ" || $chi == "Mùi")) {

            $menhnien = "Mệnh niên: Thiên hà Thủy (Nước trên trời), thuộc hành THỦY"; //

            $hanhcuamenhnien = "Thủy";

        }

        if (($can == "Bính" || $can == "Đinh") && ($chi == "Thân" || $chi == "Dậu")) {

            $menhnien = "Mệnh niên: Sơn hạ Hỏa (Lửa trên núi), thuộc hành HỎA"; //

            $hanhcuamenhnien = "Hỏa";

        }

        if (($can == "Bính" || $can == "Đinh") && ($chi == "Tuất" || $chi == "Hợi")) {

            $menhnien = "Mệnh niên: Ốc Thượng Thổ (Đất nóc nhà), thuộc hành THỔ";

            $hanhcuamenhnien = "Thổ";

        }

        if (($can == "Mậu" || $can == "Kỷ") && ($chi == "Tý" || $chi == "Sửu")) {

            $menhnien = "Mệnh niên: Thích lịch Hỏa Lửa sấm sét), thuộc hành HỎA";

            $hanhcuamenhnien = "Hỏa";

        }

        if (($can == "Mậu" || $can == "Kỷ") && ($chi == "Dần" || $chi == "Mão")) {

            $menhnien = "Mệnh niên: Thành đầu Thổ (Đất đắp thành), thuộc hành MỘC";

            $hanhcuamenhnien = "Mộc";

        }

        if (($can == "Mậu" || $can == "Kỷ") && ($chi == "Thìn" || $chi == "Tị" || $chi ==
            "Tỵ")) {

            $menhnien = "Mệnh niên: Đại lâm mộc (Gỗ rừng già), thuộc hành KIM";

            $hanhcuamenhnien = "Kim";

        }

        if (($can == "Mậu" || $can == "Kỷ") && ($chi == "Ngọ" || $chi == "Mùi")) {

            $menhnien = "Mệnh niên: Thiên thượng Hỏa (Lửa trên trời), thuộc hành HỎA";

            $hanhcuamenhnien = "Hỏa";

        }

        if (($can == "Mậu" || $can == "Kỷ") && ($chi == "Thân" || $chi == "Dậu")) {

            $menhnien = "Mệnh niên: Đại trạch Thổ (Đất nền nhà), thuộc hành THỔ";

            $hanhcuamenhnien = "Thổ";

        }

        if (($can == "Mậu" || $can == "Kỷ") && ($chi == "Tuất" || $chi == "Hợi")) {

            $menhnien = "Mệnh niên: Bình địa Mộc (Gỗ đồng bằng), thuộc hành KIM";

            $hanhcuamenhnien = "Kim";

        }

        if (($can == "Canh"|| $can == "Tân") && ($chi == "Tý" || $chi == "Sửu")) {

            $menhnien = "Mệnh niên: Bích thượng Thổ (Đất tò vò), thuộc hành THỔ"; //

            $hanhcuamenhnien = "Thổ";

        }

        if (($can == "Canh"|| $can == "Tân") && ($chi == "Dần" || $chi == "Mão")) {

            $menhnien = "Mệnh niên: Tùng bách mộc (Gỗ tùng bách), thuộc hành MỘC"; //

            $hanhcuamenhnien = "Mộc";

        }

        if (($can == "Canh"|| $can == "Tân") && ($chi == "Thìn" || $chi == "Tị" || $chi ==
            "Tỵ")) {

            $menhnien = "Mệnh niên: Bạch lạp Kim (Vàng sáp ong), thuộc hành KIM"; //

            $hanhcuamenhnien = "Kim";

        }

        if (($can == "Canh"|| $can == "Tân") && ($chi == "Ngọ" || $chi == "Mùi")) {

            $menhnien = "Mệnh niên: Lộ bàng Thổ (Đất bên đường), thuộc hành THỔ"; //

            $hanhcuamenhnien = "Thổ";

        }

        if (($can == "Canh"|| $can == "Tân") && ($chi == "Thân" || $chi == "Dậu")) {

            $menhnien = "Mệnh niên: Thạch lựu mộc (Cây gỗ lựu), thuộc hành MỘC"; //

            $hanhcuamenhnien = "Mộc";

        }

        if (($can == "Canh"|| $can == "Tân") && ($chi == "Tuất" || $chi == "Hợi")) {

            $menhnien = "Mệnh niên: Thoa Xuyến Kim (Vàng trang sức), thuộc hành KIM";

            $hanhcuamenhnien = "Kim";

        }

        if (($can == "Nhâm" || $can == "Quý") && ($chi == "Tý" || $chi == "Sửu")) {

            $menhnien = "Mệnh niên: Tang đố Mộc (Gỗ cây dâu), thuộc hành MỘC";

            $hanhcuamenhnien = "Mộc";

        }

        if (($can == "Nhâm" || $can == "Quý") && ($chi == "Dần" || $chi == "Mão")) {

            $menhnien = "Mệnh niên: TBạch Kim (Vàng pha Bạc), thuộc hành KIM";

            $hanhcuamenhnien = "Kim";

        }

        if (($can == "Nhâm" || $can == "Quý") && ($chi == "Thìn" || $chi == "Tị" || $chi ==
            "Tỵ")) {

            $menhnien = "Mệnh niên: Trường lưu Thủy (Nước chảy mạnh), thuộc hành THỦY"; //

            $hanhcuamenhnien = "Thủy";

        }

        if (($can == "Nhâm" || $can == "Quý") && ($chi == "Ngọ" || $chi == "Mùi")) {

            $menhnien = "Mệnh niên: Dương liễu mộc (Gỗ dương liễu), thuộc hành MỘC"; //

            $hanhcuamenhnien = "Mộc";

        }

        if (($can == "Nhâm" || $can == "Quý") && ($chi == "Thân" || $chi == "Dậu")) {

            $menhnien = "Mệnh niên: Kiếm phong Kim (Vàng chuôi kiếm), thuộc hành KIM"; //

            $hanhcuamenhnien = "Kim";

        }

        if (($can == "Nhâm" || $can == "Quý") && ($chi == "Tuất" || $chi == "Hợi")) {

            $menhnien = "Mệnh niên: Đại hải Thủy (Nước biển lớn), thuộc hành THỦY";

            $hanhcuamenhnien = "Thủy";
        }


      
      return array('canchi' => $canchi, 'menhnien' => $menhnien, 'hanhcuamenhnien' => $hanhcuamenhnien);
    }
$nguhanh['Kim']=[
'#DAD8D9',
'#F4EC44',
'#F5F6F8',
'#C5C3B7',
'#A6A4A5',
'#938954',
'#F8972E',
'#FFCC70',
'#633615',
'#544435'
];
$nguhanh['Thủy']=[
'#588ECA',
'#20ADE3',
'#30869D',
'#96B4D6',
'#0B71B9',
'#DAD8D9',
'#F4EB44',
'#F5F6F8',
'#C5C3B7',
'#A6A4A5'
];
$nguhanh['Mộc']=[
'#94C957',
'#789241',
'#19AE53',
'#C1C75D',
'#50612B',
'#588ECA',
'#20ADE3',
'#30869D',
'#96B4D6',
'#0B71B9'
];
$nguhanh['Hỏa']=[
'#ED212A',
'#BD2027',
'#EC1F6A',
'#B0356B',
'#933838',
'#94C957',
'#799241',
'#19AE53',
'#C1C75D',
'#50612B'
];
$nguhanh['Thổ']=[
'#938954',
'#F8972E',
'#FFCC70',
'#633615',
'#544435',
'#ED212A',
'#BD2127',
'#FDEBF2',
'#B0356B',
'#933838'
];

if(isset($_POST['submit']))
{
    
    $nguhanhmenh=namtocanchi($_POST['namsinh']);
    
    $color=$nguhanh[$nguhanhmenh['hanhcuamenhnien']];
}

if(isset($_POST['mycolor']) AND $_POST['mycolor'])
{
    file_put_contents("mycolor.less","@panel-bg: ".$_POST['mycolor'].";\n@panel-h-bg:".$_POST['panel'].";\n");
    echo "<center><strong>Lưu mầu sắc thành công</strong></center>!";
}

?>

<html>

<head>
<title>Chọn mầu sắc theo ngũ hành</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="/apps/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<br />
<br />
<br />
<div class="panel panel-success" style="width: 500px; margin: auto;">
  <div class="panel-heading">
    <h4 class="panel-title">Chọn mầu theo ngũ hành năm sinh</h4>
  </div>
  <div class="panel-body">
   <form method="POST" class="form-horizontal">


<div class="form-group" style="padding: 5px 20px;">

    <div class="input-group">
    
    <input type="text" name="namsinh" class="form-control" placeholder="Nhập năm sinh của bạn" />
    <span class="input-group-btn">
    
    <button class="btn btn-success" name="submit">Tìm mầu hợp ngũ hành</button>
    </span>
    </div>
</div>
</form>
  </div>
</div>


<?php if(isset($color))
{
  
  ?>
  <br />
  <form method="post">
  <div class="panel panel-danger" style="width: 500px; margin: auto;">
    <div class="panel-heading">
      <h4 class="panel-title">Bảng mã mầu hợp ngũ hành của bạn</h4>
    </div>
    <div class="panel-body">
      <strong>Năm sinh của bạn: <?php echo $_POST['namsinh'];?></strong>
      <br />
      
 <strong>     <?php echo $nguhanhmenh['menhnien'];?></strong>
      <div class="clearfix"></div>
      
      
      <br />
      
      
      <button class="center-block btn btn-inf">Sửa dụng mầu đã chọn cho web</button>
      
         <br />
          <ul style="margin: 0; padding: 0;">
          
                  <li style="list-style: none; clear: both;">
        <div class="col-md-5">
        <div  style="line-height: 50px; text-align: center; background-color: <?php echo $value;?>"><strong>Mã mầu</strong></div>
             
        
        </div>
          <div class="col-md-3" style="line-height: 50px; border: 1px solid #ccc; text-align: center;"></div>
        
                  <div class="col-md-2" style="height: 50px; border: 1px solid #ccc; text-align: center; vertical-align: baseline;">Mầu nền</div>
       
         <div class="col-md-2" style="height: 50px; border: 1px solid #ccc; text-align: center; vertical-align: baseline;">Mầu menu</div>
        </li>
      <?php 
      
      $i=0;
      foreach($color AS $value)
      {
        $i++;
        if($i <= 5)$x="Bản mệnh";
        
        
        else
        
        $x="Tương Sinh";
        ?>
        
    
        <li style="list-style: none; clear: both;">
        <div class="col-md-5">
        <div  style="line-height: 50px; text-align: center; background-color: <?php echo $value;?>"><strong><?php echo $value;?></strong></div>
             
        
        </div>
          <div class="col-md-3" style="line-height: 50px; border: 1px solid #ccc; text-align: center;"><strong><?php echo $x;?></strong></div>
        
                  <div class="col-md-2" style="height: 50px; border: 1px solid #ccc; text-align: center; vertical-align: baseline;"><input class="form-control" type="radio" name="mycolor" value="<?php echo $value;?>" /></div>
       
         <div class="col-md-2" style="height: 50px; border: 1px solid #ccc; text-align: center; vertical-align: baseline;"><input class="form-control" type="radio" name="panel" value="<?php echo $value;?>" /></div>
        </li>
  
        
        <?
        
      }
      ?>
      
          <li style="list-style: none; clear: both;">
        <div class="col-md-5">
        <div  style="line-height: 50px; text-align: center; background-color: #ffffff"><strong>#ffffff</strong></div>
             
        
        </div>
          <div class="col-md-3" style="line-height: 50px; border: 1px solid #ccc; text-align: center;"><strong>Trung hòa</strong></div>
        
                  <div class="col-md-2" style="height: 50px; border: 1px solid #ccc; text-align: center; vertical-align: baseline;"><input class="form-control" type="radio" name="mycolor" value="#ffffff" /></div>
       
         <div class="col-md-2" style="height: 50px; border: 1px solid #ccc; text-align: center; vertical-align: baseline;"><input class="form-control" type="radio" name="panel" value="#ffffff" /></div>
        </li>
            </ul>
            
    </div>
  </div>
  </form>
  <?  
}
?>
</body>



</html>
