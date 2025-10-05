# 🧑‍💻 Exercício – Cadastro de Personagen

## 🚀 Cenário
Você foi contratado para desenvolver um **mini-sistema de cadastro de personagens** para um jogo de RPG.

Cada personagem terá características básicas e poderá se apresentar para o jogador.

O objetivo é praticar **classes, objetos, propriedades e construtores** em PHP.

---

## 📌 Regras de Negócio

1. Crie uma classe chamada `Personagem`.
2. Cada personagem deve ter as seguintes propriedades:
    - `nome` (string)
    - `classe` (string – exemplo: "Mago", "Guerreiro", "Arqueiro")
    - `nivel` (int)
3. Ao criar um novo objeto `Personagem`, o construtor deve receber **nome e classe**.
    - O nível sempre deve começar em `1`.
4. Crie um método chamado `apresentar()`, que retorna uma mensagem no formato:
    
    ```
    Olá, eu sou {nome}, um {classe} de nível {nivel}!
    
    ```
    
5. Crie um segundo método chamado `uparNivel()`, que aumenta o nível do personagem em +1.

---

## 📊 Saída Esperada

Exemplo de execução do teste:

```
Olá, eu sou Bob Blue, um Guerreiro de nível 1!
Olá, eu sou Maria Green, uma Maga de nível 1!

Após upar o Guerreiro duas vezes:
Olá, eu sou Bob Blue, um Guerreiro de nível 3!
```

---