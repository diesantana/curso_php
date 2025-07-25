<?php

$number = 15;

function isEven($number) {
    if($number % 2 == 0) {
        echo "$number é PAR";
        return true;
    } else {
        echo "$number é IMPAR";
        return false;
    }
}

$result = isEven($number);