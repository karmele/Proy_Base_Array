<?php
  $tienda = array(
    array(
        "nombre" => "Acelga",
        "precio" => 1.80
    ),
    array(
        "nombre" => "Ajo tierno",
        "precio" => 1.69
    ),
    array(
        "nombre" => "Apio verde",
        "precio" => 1.42
    ),
    array(
        "nombre" => "Berenjena",
        "precio" => 0.54
    )
);


$resultado = "";

$resul = array();
foreach ($tienda as $clave => $valor) {
    if ($valor['precio'] < 1.5) {
        $resul[] = $valor;
    }
}
$resultado = "";
foreach ($resul as $valor) {
    $resultado = $resultado . "<div class='articulo'>
        <span class='descripcion'> Nombre "
        . $valor['nombre'] . "<br>Precio " . $valor['precio'] .
        "</span>
    </div>";
}

include 'vistas/vista_resultado.php';
