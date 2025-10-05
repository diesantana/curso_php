<?php
require_once ('MetodoPagamento.php');
class BoletoBancario implements MetodoPagamento {
    public function processarPagamento() :string
    {
        return "Pagamento processado via Boleto Bancário";
    }
}