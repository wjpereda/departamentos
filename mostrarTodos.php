<?php
  $data = file_get_contents("data-1.json");
  $casas = json_decode($data, true);

  foreach ($casas as $casa) {
    echo "
    <div class='row card'>
      <div class='col m4' style='padding:0px'>
        <img src='img/home.jpg' style='width:100%'>
      </div>
      <div class='col m8'>
        <p><strong>Dirección:</strong> ".$casa[Direccion]."<br>
        <strong>Ciudad:</strong> ".$casa[Ciudad]."<br>
        <strong>Teléfono:</strong> ".$casa[Telefono]."<br>
        <strong>Código Postal:</strong> ".$casa[Codigo_Postal]."<br>
        <strong>Tipo:</strong> ".$casa[Tipo]."<br>
        <strong>Precio:</strong> <span class='orange-text'>".$casa[Precio]."<br>
      </div>
    </div>
    ";
  }
?>
