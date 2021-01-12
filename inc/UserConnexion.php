<?php
include_once "DbHandler.php";

class UserConnexion extends DbHandler {
   protected $emailC;
   protected $passwdC;

   public function __construct ($emailC, $passwdC){
      $this->emailC = $emailC;       // $_POST["emailC"];
      $this->passwdC = $passwdC;     // $_POST["passwdC"];
   }

   public function userConnect(){
      $sql = "SELECT * FROM membres WHERE email=? AND passwd =?";
      $stmt = $this->connectDB()->prepare($sql);      
      $stmt->execute([$this->emailC, $this->passwdC]);
      $resultat = $stmt->fetch();    // $stmt->fetch(PDO::FETCH_ASSOC) return [id, nom, .., role]

      if ($resultat["email"] == $this->emailC && $resultat["passwd"] == $this->passwdC){

         /* if ($resultat["statut"] != "A") {
            echo "Compte Dèsactivé";
         } else {
            return true ;
         }   */       
         
         if ($resultat["role"] == "ADMIN"){
            // ($this->$emailC == "admin@Compagnie.com")
            header("Location: ../admin.php");
         }
         else {
            header("Location: ../membre.php");
         }
      }
      else {
         header("Location: ../../page/erreur.php"); // var_dump($resultat);
      }

   }
}