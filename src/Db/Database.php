<?php

namespace App\Db;

use Exception;

class Database {

  public static function getDatabase() {
    try{
      $conn = new \PDO("mysql:host=localhost;dbname=login", 'root' , '');
    }catch(\Exception $e) {
      echo $e->getMessage();
    }
    return $conn;
  }
  
}
