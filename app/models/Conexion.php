<?php

require_once '../config/Server.php';

class Conexion
{

  /** 
   *Retirna una conexion activa al servidor y base de datos
   */
  protected static function getConexion()
  {
    try {
      $pdo = new PDO(SGBD, USER, PASS);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (PDOException $e) {
      error_log("Error: " . $e->getMessage());
    }
  }

  public function encryption($string)
  {

  }

  public function decryption($string)
  {

  }

  public function getAll($storeProcedure)
  {

  }

  public function search($params = []){
    
  }
}
