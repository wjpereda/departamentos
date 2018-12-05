<?php
  function cmp($a, $b)
  {
    return strcmp($a["Ciudad"], $b["Ciudad"]);
  }

  $data = file_get_contents("data-1.json");
  $casas = json_decode($data, true);
  usort($casas,"cmp");
  echo "<option value=''>Elige una Ciudad</option>";
  $ciudad="Vacio";
  foreach ($casas as $casas) {
    if($ciudad!=$casas[Ciudad]){
      echo "<option value='".$casas[Ciudad]."'>".$casas[Ciudad]."</option>";
      $ciudad=$casas[Ciudad];
    }
  }
?>
