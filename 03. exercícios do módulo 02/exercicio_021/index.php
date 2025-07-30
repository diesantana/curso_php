<?php

/**
 * Retorna a soma de todos os elementos de um array
 * @param array<int|float> $numbers array contendo valores numéricos
 * @return float Soma total de todos os elementos do array
 */
function totalSum($numbers) {
    if(!is_array($numbers)) {
        throw new InvalidArgumentException('O parâmetro $numbers deve ser um array');
    }
    return array_sum($numbers);
}

$num = [1, 3, 6];

echo totalSum($num);
// echo totalSum(7); // Fatal error: Uncaught InvalidArgumentException

?>
