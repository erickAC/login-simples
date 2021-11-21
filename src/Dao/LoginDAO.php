<?php

namespace App\Dao;
use App\Model\Login;
use App\Db\Database;

session_start();

require '../../vendor/autoload.php';

class LoginDAO {

  public function login(Login $login) {
    try{
    $sql = "SELECT *  FROM user WHERE user = ? and password = ?";

    $stmt = Database::getDatabase()->prepare($sql);
    $stmt->bindValue(1, $login->getLogin());
    $stmt->bindValue(2, $login->getSenha());
    $stmt->execute();

    if($stmt->rowCount() == 1){
      $_SESSION['login'] = $login->getLogin();
      header('Location: ../../status.php');
    }else{
      header('Location: ../../status.php'); 
    }
  }catch(\Exception $e ){
    echo $e->getMessage();
  }
}

}
