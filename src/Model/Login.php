<?php

namespace App\Model;

class Login {

  //variavel de login
  private $login;

  //variavel de senha
  private $senha;

  public function getLogin() {
    return $this->login;
  }

  public function setLogin($login) {
    $this->login = $login;
  }

  public function getSenha() {
    return $this->senha;
  }

  public function setSenha($senha) {
    $this->senha = $senha;
  }

}
