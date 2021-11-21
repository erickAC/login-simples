<?php

use App\Model\Login;
use App\Dao\LoginDAO;

require '../../vendor/autoload.php';

$login = new Login();
$logindao = new LoginDAO();

$data = filter_input_array(INPUT_POST);

try {

  $login->setLogin($data['login']);
  $login->setSenha($data['senha']);

  $logindao->login($login);


} catch (\Exception $e) {
  echo $e->getMessage();
}
