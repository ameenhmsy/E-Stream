<?php
include_once "DbHandler.php";

class ViewMain extends DbHandler {
   // protected $categ;

   public function __construct (){
      // $categ
   }

   public function viewAll() {
      $sql = "SELECT * FROM films ORDER BY idf DESC";
      $stmt = $this->connectDB()->prepare($sql);
      $stmt->execute();
      $resultat = $stmt->fetchAll(); 

      return $resultat;   // print_r($resultat);
   }

   public function viewCateg($categ) {
      $sql = "SELECT * FROM films WHERE categorie = ? ORDER BY idf DESC";
      $stmt = $this->connectDB()->prepare($sql);
      $stmt->execute([$categ]);     // ? ([$this->categorie]);
      $resultat = $stmt->fetchAll(); 
      return $resultat;
   }
}