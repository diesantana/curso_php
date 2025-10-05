<?php

/**
 * Processa o tipo de pagamento e exibe uma mensagem informando o tipo.
 * @param MetodoPagemento $pagamento Pagemento a ser processado
 * @return void
 */
function processarPagamento(MetodoPagamento $pagamento) :void {
    echo $pagamento->processarPagamento();
}