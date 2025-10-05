<?php

class Autenticacao
{
    final public function login() {
        echo 'Usuário logado com sucesso!';
    }

    public function logout() {
        echo 'Usuário deslogado com sucesso!';
    }
}

class AutenticacaoAdmin extends Autenticacao 
{
    public function logout() {
        echo 'Administrador deslogado com sucesso!';
    }
    
    // public function login() {
    //     echo 'Administrador logado com sucesso!';
    // }
    // Fatal error: Cannot override final method Autenticacao::login(
}

$authAdmin = new AutenticacaoAdmin();
$authAdmin->login();
echo '<br>';
echo '<br>';
$authAdmin->logout();