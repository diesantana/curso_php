# 🧑‍💻 Exercício:  Getters e setters

## 🚀 Cenário
Crie uma classe chamada `Produto` que possua duas propriedades privadas:

- `nome` (string)
- `preco` (float)

### 📌 **Instruções:**

1. Para cada propriedade, implemente os métodos getters e setters correspondentes.
2. Dentro do método setter do `preco`, faça uma validação para garantir que o preço nunca seja negativo. Caso seja passado um valor negativo, defina o preço como 0 e exiba uma mensagem informativa na tela.
3. Crie um objeto da classe `Produto` e defina o nome como "Notebook" e o preço como `2500.00`.
4. Exiba o nome e o preço usando os métodos getters.
5. Teste o setter definindo um preço negativo e observe a validação funcionando.

### 🖥️ **Resultado Esperado:**

Ao executar seu código, você deve obter a seguinte saída:

```
Produto: Notebook
Preço: 2500

Preço inválido! Definido para 0.
Preço após validação: 0

```