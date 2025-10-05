## **Exercício: Utilizando final em PHP**

Você está desenvolvendo uma pequena biblioteca de autenticação simples. Essa biblioteca terá uma classe base chamada `Autenticacao`, que contém métodos sensíveis que não devem ter seu comportamento alterado em subclasses.

---

## 📋 **Instruções:**

**1)** Crie uma classe chamada `Autenticacao` contendo:

- Um método público chamado `login()`, que exiba:

```
Usuário logado com sucesso!
```

- Um método público chamado `logout()`, que exiba:

```
Usuário deslogado com sucesso!
```

**2)** Torne o método `login()` um método **final**, para que nenhuma classe derivada possa alterar sua implementação.

**3)** Crie uma classe filha chamada `AutenticacaoAdmin` que estenda `Autenticacao` usando `extends`:

- Sobrescreva o método `logout()` exibindo:

```
Administrador deslogado com sucesso!
```

- Tente sobrescrever também o método `login()` (que é final). Ao executar seu código, perceba o que ocorre.

**Importante:**

Essa tentativa de sobrescrever o método final é proposital, para você entender o comportamento do PHP neste caso.

---

## 🧪 **Teste seu código:**

- Crie um objeto de `AutenticacaoAdmin`.
- Chame o método `login()`.
- Chame o método `logout()`.

Observe atentamente o resultado e o comportamento do método marcado como `final`.

---