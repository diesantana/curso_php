<?php

/**
 * Verifica se é maior de idade
*/
function ofLegalAge($age) {
    return $age >= 18 ? 'Maior de idade' : 'Menor de idade';
}

echo ofLegalAge(17);