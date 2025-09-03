##  **Exercício: `ContaBancaria`**

**Crie uma classe `ContaBancaria` em PHP com os seguintes requisitos:**

### 📌 **Propriedades**:

- públicas:
    - `titular`
- privadas:
    - `saldo`

### 📌 **Métodos**:

- **Setters e Getters** para propriedade privada:
    - `setSaldo($valor)`
    - `getSaldo()`
- **Métodos gerais:**
    - `depositar($valor)` → adiciona valor ao saldo.
    - `sacar($valor)` → subtrai valor do saldo (verifique se há saldo suficiente).
    - `mostrarSaldo()` → exibe uma mensagem formatada com o saldo atual.

---

### 🧪 **Teste seu código**:

Após criar a classe acima, faça exatamente isso:

1. Instancie um objeto chamado `$conta`.
2. Modifique diretamente a propriedade pública `titular`, atribuindo seu nome.
3. Use o método setter para definir o saldo inicial em 500.
4. Utilize o método geral `depositar()` para depositar 200.
5. Utilize o método geral `sacar()` para sacar 100.
6. Chame o método geral `mostrarSaldo()` para exibir o saldo final.

**Exemplo esperado ao executar seu código:**

```
Titular: Diego
Saldo atual: R$600

```

---

## ✅ **Dicas**:

- Use o operador `->` para acessar métodos e propriedades públicas.
- Lembre-se que para acessar propriedades privadas, você precisa usar os métodos getters/setters.
- Valide no método `sacar()` se o saldo é suficiente antes de realizar a operação.