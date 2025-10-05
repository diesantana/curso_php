<?php
require_once ('MetodoPagamento.php');

class CartaoCredito implements MetodoPagamento {
    public function processarPagamento() :string
    {
        return "Pagamento processado via Cartão de Crédito";
    }
}