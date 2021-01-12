<?php
// include_once "../page/header.php";

class DbHandler {
   private $dsn = "mysql:host=127.0.0.1; dbname=a20bdfilms";
   private $user= "root";
   private $password = "";
   private $options = [
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
   ];   // $this->pdo->setAttribute(PDO::ATTR_x, PDO::x_x1);    // options [Att..]

   protected function connectDB(){
      try{
         $pdo= new PDO($this->dsn, $this->user, $this->password, $this->options);         
      }
      catch(monException $e){
         echo "Erreur Connexion DB" . $e->getMessage();
      }
      return $pdo;
   }

   // protected function deconnectDB(){
   //    if ($pdo) { unset($pdo); }
   // }   
}


