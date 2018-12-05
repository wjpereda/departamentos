<?php
  function cmp($a, $b)
  {
    return strcmp($a["Tipo"], $b["Tipo"]);
  }

  $data = file_get_contents("data-1.json");
  $casas = json_decode($data, true);
  usort($casas,"cmp");
  echo "<option value=''>Elige un Tipo</option>";
  $tipo="Vacio";
  foreach ($casas as $casas) {
    if($tipo!=$casas[Tipo]){
      echo "<option value='".$casas[Tipo]."'>".$casas[Tipo]."</option>";
      $tipo=$casas[Tipo];
    }
  }
?>
