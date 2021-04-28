<?php

function contar($cadena1, $cadena2)
{
    $longitud = strlen($cadena1) + strlen($cadena2);
    return $longitud;
}


function convertirCadena($cadena)
{
    $cadConvertida = strtoupper($cadena);
    echo "La cadena convertida: $cadConvertida";
}

function siEsVocalOno($letra2)
{
    $vocales = array('a', 'e', 'i', 'o', 'u');
    foreach ($vocales as  $value) {
        if ($value = $letra2) {
            return true;
        } else {
            return false;
        }
    }
}
