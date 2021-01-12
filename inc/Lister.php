<?php
include_once "DbHandler.php";

class Lister extends DbHandler {
   protected $id;

   public function __construct ($id) {
      if ( $id > 0) {
         $this->id= trim($id);
      } else {
         echo "<h3>⛔ L'id est un Entier Positif   </h3> ";
      }      
      //$this->id= trim($id);  //  is_int($id)  C mieux un Setter
   }

   public function listerFilm() {
      $sql = "SELECT * FROM films WHERE idf = ?";
      $stmt = $this->connectDB()->prepare($sql);
      $stmt->execute([$this->id]);
      $resultat = $stmt->fetchAll();

      if ($stmt->rowCount() == 0) {
         echo "<h3>⛔ Id inexistant  </h3> ";
      } else {
         $this->AfficherRslt($resultat);//echo "<h4> Film Effacé </h4> ";
      }
      //$this->AfficherRslt($resultat); //😁 🥳
   }

   public function listerAllFilm() {
      $stmt = $this->connectDB()->prepare("SELECT * FROM films");
      $stmt->execute();
      $resultat = $stmt->fetchAll();
      $this->AfficherRslt($resultat);
   }

   public function effacerFilm() {

      $sql = "SELECT * FROM films WHERE idf = ?";
      $stmt = $this->connectDB()->prepare($sql);      
      $stmt->execute([$this->id]);
      $resultat = $stmt->fetch();

      if ($stmt->rowCount() > 0) {
         $sql = "DELETE FROM films WHERE idf = ?";
         $stmt = $this->connectDB()->prepare($sql);
         $stmt->execute([$this->id]);
         // $resultat = $stmt->fetchAll(); $titre = $resultat["titre"]; 

         if ($stmt->rowCount() > 0) {
            unlink(".".$resultat["pochette"]); 
            unlink(".".$resultat["video"]); 
            echo "<h3>🔴 Film Effacé </h3> ";
         } else {
            echo "<h3>⛔ Id invalide</h3> ";
         }
      } 

      else {
         echo "<h3>⛔ Id invalide ' </h3> ";
      }      
   }   

   public function listerMembre() {
      $sql = "SELECT * FROM membres WHERE idm = ?";
      $stmt = $this->connectDB()->prepare($sql);
      $stmt->execute([$this->id]);
      $resultat = $stmt->fetchAll(); 

      $this->AfficherRslt($resultat);
   }

   public function listerAllMembre() {
      $stmt = $this->connectDB()->prepare("SELECT * FROM membres");
      $stmt->execute();
      $resultat = $stmt->fetchAll();
      $this->AfficherRslt($resultat);
   }

   public function AfficherRslt($rslt){
      echo "<br> <br>
      <table class=\"table bg-primary text-white table-bordered \">
         <thead>
            <tr>";
      foreach ($rslt as $elem) {
         foreach($elem as $k => $v) {
            echo "<th> $k </th>";
         }
         break;
      }
      echo "</tr>
         </thead>
         <tbody>";

      foreach ($rslt as $elem) {
         echo "<tr>";
         foreach($elem as $k => $v) {
            echo "<td> $v </td>";
         }
         echo "</tr>";
      }
      echo "
         </tbody>
      </table>  <br>" ;
   }

}