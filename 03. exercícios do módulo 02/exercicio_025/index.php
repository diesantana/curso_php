<?php

/**
 * Emite uma saudação com base em um nome de usuário.
 * @param string $nome Nome do usuário.
 * @return string Mensagem de Saudação 
 */
function bemVindo($nome= 'Visitante') {
    return "Olá $nome, seja bem vindo(a)!";
}

echo bemVindo();
echo '<br>';
echo bemVindo('Alex Brown');