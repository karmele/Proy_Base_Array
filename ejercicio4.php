<?php

$tienda = array(
    "P1"=>array(
        "nombre" => "Acelga",
        "precio" => 1.80,
        "unidades" => 15
    ),
    "P2"=>array(
        "nombre" => "Ajo tierno",
        "precio" => 1.69,
        "unidades" => 20
    ),
    "P3"=>array(
        "nombre" => "Apio verde",
        "precio" => 1.42,
        "unidades" => 35
    ),
    "P4"=>array(
        "nombre" => "Coliflor",
        "precio" => 1.29,
        "unidades" => 30
    )
);

$total = 0;
foreach ($tienda as $producto) {
    $total += $producto['precio'] * $producto['unidades'];
}

$resul = array();
foreach ($tienda as $key=>$valor) {
    if ($valor['precio'] < 1.5) {
        $resul[$key] = $valor;
    }
}
$resultado = "";

foreach ($resul as $key=>$valor) {
    $resultado .= "<div class='articulo'>
        <span class='descripcion'> Clave ". $key. "<br /> Nombre "
        . $valor['nombre'] . "<br>Precio " . $valor['precio'] .
        "</span>
    </div>";
}


$resultado .= " <br /> Total tienda $total";
include 'vistas/vista_resultado.php';
