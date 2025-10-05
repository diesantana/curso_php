<?php
declare(strict_types=1); // Ativa a tipagem de dados


// Importa os recursos necessários
require_once('classes/CartaoCredito.php');
require_once('classes/BoletoBancario.php');
require_once('utils/functions.php');

// Testando o sistema
$pagamentoCartao = new CartaoCredito();
$pagamentoBoleto = new BoletoBancario();

$processarPagamento1 = processarPagamento($pagamentoCartao);
echo '<br>';
$processarPagamento1 = processarPagamento($pagamentoBoleto);
