<?php

$colors = ['azul', 'verde', 'azul', 'vermelho', 'verde'];

$colorCount = array_count_values($colors);


foreach($colorCount as $key => $value) {
    echo "A cor  <strong>$key</strong>, aparece $value" . "x <br>";
}