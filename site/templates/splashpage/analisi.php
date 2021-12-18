<?php 
  $bordo_sx_onoff = "";
  $padding_sx_onoff = "";
  $padding_dx_onoff = "";
  
  if ($occhio == "tranky" && $blocksize == "small") {
    $padding_dx_onoff = "padding_dx_on";
    $occhio = "occhio";
  }elseif ($occhio == "occhio" && $blocksize == "BIG") {
    $occhio = "tranky";
    $coniglio = "coniglio";
  }elseif ($occhio == "occhio" && $blocksize == "small") {
    $padding_sx_onoff = "padding_sx_on";
    $bordo_sx_onoff = "bordo_sx_on";
    $occhio = "tranky";
   }
?>
