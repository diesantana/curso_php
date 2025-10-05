# 🧑‍💻 Exercício – Sistema de Contagem de Usuários

## 🚀 Cenário

Você foi contratado para criar um pequeno sistema de cadastro de usuários em PHP.

O sistema precisa **controlar a quantidade de usuários criados** sem precisar percorrer todos os objetos. Para isso, você usará **propriedades e métodos estáticos**.

---

## 📌 Regras de Negócio

1. Crie uma classe chamada `Usuario`.
2. A classe deve conter:

   * Uma **propriedade estática** `$totalUsuarios`, que armazena quantos usuários já foram criados.
   * Propriedades comuns (não estáticas) para `nome` e `email`.
3. Sempre que um novo objeto `Usuario` for instanciado:

   * O contador estático `$totalUsuarios` deve ser incrementado automaticamente.
4. Crie um **método estático** `getTotalUsuarios()` que retorne a quantidade total de usuários criados.
5. Adicione uma segunda classe chamada `Admin`, que **herda de `Usuario`**.

   * Essa classe deve incrementar o mesmo contador de usuários da classe `Usuario`.
   * Crie um método específico `mostrarTipo()` que diga: `"Sou um administrador"`.
6. Faça um pequeno fluxo de teste no final (criando alguns usuários e administradores) e mostre:

   * O nome e email de cada usuário.
   * O total de usuários criados (utilizando o método estático).

---

## 🎯 Desafios Extras (opcional)

* Implemente um **método estático protegido** na classe `Usuario` chamado `logCriacao()` que mostre a mensagem `"Usuário criado com sucesso"`.

  * Esse método deve ser chamado dentro do construtor.
  * Na classe `Admin`, use `parent::logCriacao()` para reaproveitar a lógica.
* Garanta que `$totalUsuarios` **não pode ser acessado diretamente de fora da classe** (use modificadores de acesso).

---

## 📊 Saída Esperada

Quando o fluxo de teste for executado, a saída deve ser semelhante a:

```
Usuário criado com sucesso
Usuário criado com sucesso
Usuário criado com sucesso
Diego - diego@email.com
Maria - maria@email.com
Carlos - carlos@email.com - Sou um administrador
Total de usuários criados: 3
```