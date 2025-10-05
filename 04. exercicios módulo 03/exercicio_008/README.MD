# 🧑‍💻 Exercício: Sistema de Pagamento

## 🚀 Cenário
Implemente um sistema simples de **pagamento** usando interfaces em PHP.

### Descrição do Exercício:

Você vai criar uma interface chamada `MetodoPagamento`, que define um contrato para diferentes tipos de pagamento. Então, criará classes para diferentes tipos de pagamento, como **Cartão de Crédito** e **Boleto Bancário**, que implementam essa interface. Por fim, você escreverá uma função que simula o pagamento usando qualquer método implementado.

### Passos:

1. **Criar a Interface `MetodoPagamento`**:
    - A interface deve ter um método chamado `processarPagamento()`, que será implementado por todas as classes de pagamento.
2. **Criar as Classes `CartaoCredito` e `BoletoBancario`**:
    - Ambas as classes devem implementar a interface `MetodoPagamento`.
    - A classe `CartaoCredito` pode simular o processamento de um pagamento com o texto "Pagamento processado via Cartão de Crédito".
    - A classe `BoletoBancario` pode simular o processamento com o texto "Pagamento processado via Boleto Bancário".
3. **Criar uma Função para Processar o Pagamento**:
    - Essa função receberá um objeto que implementa a interface `MetodoPagamento` e chamará o método `processarPagamento()`.
4. **Testar o Sistema**:
    - Crie instâncias de `CartaoCredito` e `BoletoBancario` e passe essas instâncias para a função que processa o pagamento. A função deve imprimir qual método de pagamento foi usado.
        
        ```php
        <?php
        
        // Testar o sistema
        $pagamentoCartao = new CartaoCredito();
        $pagamentoBoleto = new BoletoBancario();
        
        processarPagamento($pagamentoCartao);  // Saída: Pagamento processado via Cartão de Crédito
        processarPagamento($pagamentoBoleto); // Saída: Pagamento processado via Boleto Bancário
        
        ?>
        ```