<?php

// Converte 
/**
 * Converte a temperatura em graus Celsius para Fahrenheit
 * @param int $tempCelsius Temperatura em Graus Celsius
 * @return float Temperatura em Fahrenheit
 */
function celsiusToFahrenheit($tempCelsius) {
    // (C×1.8)+32=F
    return ($tempCelsius * 1.8) + 32;
}

echo celsiusToFahrenheit(23);
?>