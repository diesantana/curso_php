# 🧑‍💻 Exercício: Herança em PHP

## 🚀 Cenário
Imagine que você está criando um sistema para representar veículos. Seu objetivo é organizar características e métodos comuns entre veículos diferentes, reaproveitando o máximo de código possível.

### Instruções:

**1)** Crie uma classe base chamada `Veiculo`. Ela deve conter:

- Uma propriedade protegida (`protected`) chamada `marca`.
- Uma propriedade protegida chamada `modelo`.
- Um método construtor (`__construct`) que receba e inicialize os valores para essas propriedades.
- Um método público chamado `exibirDetalhes()` que exiba uma mensagem com a marca e o modelo do veículo.

**2)** Crie duas classes filhas que estendam a classe `Veiculo` usando a palavra-chave `extends`:

- Uma classe chamada `Carro`, com um método adicional chamado `abrirPorta()`, exibindo uma mensagem específica para esta ação.
- Uma classe chamada `Moto`, com um método adicional chamado `empinar()`, exibindo uma mensagem específica para esta ação.

**Importante:**

Ambas as classes filhas herdam automaticamente as propriedades e métodos da classe pai (`Veiculo`) e têm seus próprios métodos específicos.

---

### Testando o código:

- Instancie um objeto da classe `Carro` com a marca `"Toyota"` e modelo `"Corolla"`.
- Instancie um objeto da classe `Moto` com a marca `"Honda"` e modelo `"CG 160"`.
- Chame o método `exibirDetalhes()` em cada objeto criado.
- Chame o método específico de cada classe (`abrirPorta` para `Carro` e `empinar` para `Moto`).

---