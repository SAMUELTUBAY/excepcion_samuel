<?php

try {
    echo "Hola, ingrese un número:\n";
    $nombre = trim(fgets(STDIN));
    $numero1 = 0;

    try {
        if (is_numeric($nombre)) {
            $numero1 = (int)$nombre;
            echo "El número ingresado es: " . $numero1 . "\n";
        } else {
            throw new Exception("El valor ingresado no es válido");
        }
    } catch (Exception $ex) {
        throw $ex;
    }
} catch (Exception $ex) {
    echo "Ocurrió un error al ejecutar el programa: " . $ex->getMessage() . "\n";
    echo "Por favor comuníquese con el área de TI\n";
} finally {
    echo "Presione ENTER para salir del programa...";
    fgets(STDIN);
}