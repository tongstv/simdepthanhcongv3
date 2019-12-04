<?php
if(isset($_POST['submit']))
{
    
     
     
     $f=file_get_contents("fixcss.less");

    $color= $_POST['color'];
    
    foreach($color AS $ks => $vs)
    {
        
        $color2[$ks]=$vs;
    }
    
  

    
    
    $new=str_replace(array_keys($color2),array_values($color2),$f);



    file_put_contents("fixcss.less",$new);
    
    
}


  $ft=file_get_contents("fixcss.less");
preg_match_all('/#([a-zA-Z0-9]+);/',$ft,$array);

   


foreach($array[1] AS $c1)
{
    
    if(!isset($cc[$c1]))
    $cc[$c1]=$c1;
}

ksort($cc);


?>
<!DOCTYPE html>
<html>

<title>Đổi mầu sắc</title>
<meta charset="utf8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>

<div class="w3-card-4">
<div class="w3-container w3-theme w3-card">
  <h1>Đổi mầu sắc website </h1>
</div>

<div class="w3-card  w3-col l4 m4 w3-margin w3-display-middle">

<form method="post">

<div class="w3-row"><button name="submit" class="w3-btn w3-blue-gray">Lưu mầu sắc</button></div>
<?php
foreach($cc AS $cl):?>


<div class="w3-right">

 <input type="color" class="select" value="#<?php echo $cl;?>">
   
   <input   name="color[#<?=$cl?>]" class="cl" value="#<?php echo $cl;?>" />
</div>


<?php
endforeach;?>

</form>



</div>
<script>

$(".select").change(function(){

$(this).parent().find('.cl').val($(this).val());    
});

$(".cl").keyup(function(){
    


$(this).parent().find('.select').val($(this).val());    
});


</script>
</body>
</html>