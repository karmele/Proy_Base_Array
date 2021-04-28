<?php

$tienda = array(
    array(
        "nombre" => "Acelga",
        "precio" => 1.80,
        "unidades" => 15
    ),
    array(
        "nombre" => "Ajo tierno",
        "precio" => 1.69,
        "unidades" => 20
    ),
    array(
        "nombre" => "Apio verde",
        "precio" => 1.42,
        "unidades" => 35
    ),
    array(
        "nombre" => "Coliflor",
        "precio" => 2.29,
        "unidades" => 30
    )
);

$total = 0;
foreach ($tienda as $producto) {
    $total += $producto['precio'] * $producto['unidades'];
}

$resul = array();
foreach ($tienda as $valor) {
    if ($valor['precio'] < 1.5) {
        $resul[] = $valor;
    }
}
$resultado = "";

foreach ($resul as $valor) {
    $resultado .= "<div class='articulo'>
        <span class='descripcion'> Nombre "
        . $valor['nombre'] . "<br>Precio " . $valor['precio'] .
        "</span>
    </div>";
}


$resultado .= " <br /> Total tienda $total";
include 'vistas/vista_resultado.php';
