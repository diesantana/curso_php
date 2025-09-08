<?php

class User {
    public $name;
    public $email;
    protected static $totalUsers = 0;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        self::$totalUsers++; // Incrementa o totalUsers a cada instância
        echo self::creationLog() . '<br>'; 
    }

    public static function getTotalUsers() {
        return self::$totalUsers;
    }

    protected static function creationLog() {
        return 'Usuário criado com sucesso';
    }
}

class Admin extends User {

    public function showType() {
        return "Sou um administrador";
    }
}

// Area de testes
$user1 = new User('Diego', 'diego@email.com');
$user2 = new User('Maria', 'maria@email.com');
$userAdmin = new Admin('Carlos', 'carlos@email.com');

echo "$user1->name - $user1->email" . '<br>';
echo "$user2->name - $user2->email" . '<br>';
echo "$userAdmin->name - $userAdmin->email - ";
echo $userAdmin->showType() . '<br>';
echo 'Total de usuários criados: ' . User::getTotalUsers();