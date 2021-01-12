<?php
include_once "DbHandler.php";

class StatutMembre extends DbHandler {
   protected $id;

   public function __construct ($id){
      $this->id = $id;
   }

   public function activerM() {
      $sql = "UPDATE membres SET statut = 'A' WHERE idm = ?";
      $stmt = $this->connectDB()->prepare($sql);
      $stmt->execute([$this->id]);

      //$resultat = $stmt->rowCount();   //var_dump($resultat);
      // try {$stmt->execute([$this->id])} catch(excepActv eAct) { echo "Err Actv";}

      if ( $stmt->rowCount() == 0 ) {
         echo "<h4>⛔ Id invalide </h4> ";
      }
      else {
         echo "<h3>🟢 Membre Activé </h3> ";
      }
   }

   public function desactiverM() {
      $sql = "UPDATE membres SET statut = 'I' WHERE idm = ?";
      $stmt = $this->connectDB()->prepare($sql);
      $stmt->execute([$this->id]);
 
      if ($stmt->rowCount() == 0 ) {
         echo "<h4>⛔ Id invalide </h4> ";
      }
      else {
         echo "<h3>🔴 Membre Désactivé </h3> ";
      }
   }
}