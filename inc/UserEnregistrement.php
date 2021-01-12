<?php
include_once "DbHandler.php";

class UserEnregistrement extends DbHandler {           
   protected $prenomE;
   protected $nomE;
   protected $emailE;
   protected $passwdE;      
   protected $passwdE2;
   protected $sexeE;       
   protected $naissanceE;     

   public function __construct ($prenomE, $nomE, $emailE, $passwdE, $passwdE2, $sexeE, $naissanceE) {
      $this->prenomE = $prenomE;
      $this->nomE = $nomE;      
      $this->emailE = $this->setEmailE($emailE);                  // $_POST["emailE"];
      $this->passwdE = $this->setPasswdE($passwdE, $passwdE2);    // $_POST["passwdE"];
      $this->passwdE2 = $passwdE2;
      $this->sexeE = $sexeE;
      $this->naissanceE = $naissanceE;
   }

   public function setPasswdE ($passwdE, $passwdE2) {
      $regExpPasswd = "/^[A-Za-z0-9\-\_]{8,10}$/";

      if ($passwdE != $passwdE2 || !preg_match($regExpPasswd, $passwdE) ) {
         echo "Mot de passe Invalide"; 
     }
      else {
         return $this->passwdE = $passwdE;
      }
   }

   public function setEmailE ($emailE) {
      $regExpEmail = "/^[a-zA-Z0-9\_\-\.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+$/";

      if (!preg_match($regExpEmail, $emailE)) {
         echo "Email Invalide";  // if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
     }
      else {
         return $this->emailE = $emailE;
      }
   }

   public function userEnregistre(){
      $sql = "SELECT * FROM membres WHERE email = ?";
      $stmt = $this->connectDB()->prepare($sql);      
      $stmt->execute([$this->emailE]);
      $resultat = $stmt->fetch(); // return [email]
      // print_r($resultat["email"]);  echo strlen($this->emailE);    

      if ($stmt->rowCount() > 0) { 
         //if ($resultat["email"] || $resultat["email"] == $this->emailE) {
         echo "<h2>❗ L'utilisateur , $this->emailE , existe déjà </h3> ";
      }
      else if ($stmt->rowCount() == 0) { 
         //if (!$resultat["email"] || $resultat["email"] != $this->emailE) {
         $sql = "INSERT INTO membres VALUES (0, ?, ?, ?, ?, ?, ?, 'I', 'USER' )";
         $stmt = $this->connectDB()->prepare($sql);      
         $stmt->execute([$this->prenomE, $this->nomE, $this->emailE, $this->passwdE, $this->sexeE, $this->naissanceE]);
         
               
         if ($stmt->rowCount() > 0) {
            //$resultat = $stmt->fetch();   # confirme enregistrement ..  
            echo "<h3>✔ Vous êtes désormais membre, Connectez-vous </h3> ";
         }
      }
      else {
         echo "<h2>⁉ Bizarrrrrrre: Err Access Boolean Array ! ---> resultat[] </h3> ";
      }
   }
   
}

// ---------------------------------------------------------------