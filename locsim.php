<?php

function locsim()
{




    $khoangia = [];


    $loc_dauso = $_POST['m10so_filter'];
    $loc_khoanggia = $_POST['price_filter'];


    $loc_mang = $_POST['telco_filter'];

    $loc_sort = $_POST['giaban_filter'];


    if (isset($loc_dauso) and $loc_dauso !== 0) {
        $_SESSION['locsim']['sdauso'] = $loc_dauso;
    }


    if (isset($loc_mang) and $loc_mang !="") {
        $_SESSION['locsim']['smang'] = $loc_mang;
    }

    if (isset($loc_khoanggia)) {
        $_SESSION['locsim']['skhoanggia'] = $loc_khoanggia;
    }

    if (isset($loc_sort)) {
        $_SESSION['locsim']['ssort'] = $loc_sort;
    }


}

if (isset($_POST['stvlocsim'])) {


    locsim();

unset($_POST['price_filter']);
unset($_POST['stvlocsim']);

unset($_POST['telco_filter']);

unset($_POST['m10so_filter']);

unset($_POST['giaban_filter']);

}




if (isset($_SESSION['locsim'])) {

    $input = "";


    if (isset($_SESSION['locsim']['sdauso']) AND $_SESSION['locsim']['sdauso']!=0) {


        $where .= " AND (left(sim2,2) = '" . $_SESSION['locsim']['sdauso'] . "')";


     
    }


    if (isset($_SESSION['locsim']['smang']) AND $_SESSION['locsim']['smang']) {

      

        global $mangpos;

        $mangid = $mangpos[ucfirst($_SESSION['locsim']['smang'])];


        $where .= " AND (mang =" . $mangid . ")";


    } 


    if (isset($_SESSION['locsim']['skhoanggia'])) {

      
      if($_SESSION['locsim']['skhoanggia']!='0')
      {
        
        $ex= explode(',',$_SESSION['locsim']['skhoanggia']);
        
        if($ex[0] ==100 AND $ex[1]  ==0)
        {
            
            $where .= " AND (giaban > 100)";
        }
        else
        {
            
            $where .=" AND (giaban >= ".$ex[0]." AND giaban <= ".$ex[1].")";
        }
        
        
      }
    } 

    if (isset($_SESSION['locsim']['ssort'])) {

       

        if ($_SESSION['locsim']['ssort'] == 1) {
            $orderby = "order by giaban ASC";
        }

        if ($_SESSION['locsim']['ssort'] == 2) {
            $orderby = "order by giaban DESC";
        }

    } 


}

extract($_SESSION['locsim']);


  $input .= '<input style="display: none;" id="m10so_filter1" value="'.(isset($sdauso) ? $sdauso : "").'">';
  $input .= '<input style="display: none;" id="telco_filter1"  value="'.(isset($smang) ? $smang : "").'">';
   $input .= '<input style="display: none;" id="price_filter1" value="'.(isset($skhoanggia) ? $skhoanggia : '').'">';
     $input .= '<input style="display: none;" id="giaban_filter1" value="'.(isset($ssort) ? $ssort : '').'">';

$this->assign("input", (isset($input) ? $input : ""));




?>