<?php
include_once "DbHandler.php";

class ManageFilm extends DbHandler {
   protected $titre;
   protected $categorie;   protected $realisateur;      
   protected $langue;      protected $pays;       
   protected $duree;       protected $dateAjout;       
   protected $pochette;    protected $video;     

   public function __construct ($titre, $categorie, $realisateur, $langue, $pays, $duree, $dateAjout, $pochette, $video) {
      $this->titre = trim($titre);      
      $this->categorie = trim($categorie);
      $this->realisateur = trim($realisateur);
      $this->langue = trim($langue);
      $this->pays = trim($pays);
      $this->duree = $duree;
      $this->dateAjout = $dateAjout;
      $this->pochette = $pochette;  //$this->hashPath($pochette, ".jpg");  // $_FILES["pochAjoutF"];
      $this->video =   $video ;     //$this->hashPath($video, ".mp4");
   }

      
   public function hashPath($upFile, $exts) {
      // $upFile --> $_FILES["pochette" ou "video"]  et  $exts --> ".jpg" ou ".mp4" 
      $tmpPath = $upFile["tmp_name"];
      $dossier = "./donnees/Cover/";
      //$newFileName = str_replace(" ", "", $this->titre)."-".$this->dateAjout."-".str_replace(":", "-", $this->duree).$exts ;  // ou sha1($this->titre)
      $newFileName = str_replace(" ", "", $this->titre)."-".date("Y-m-d-H-i-s").$exts ; // chamger pr la modification
      // print_r($newFileName);            // me suis compliqué la vie
      $newPath = $dossier.$newFileName;    //stocké ds DB
      $relativePath = ".".$newPath;        // a aprtir de ici admin.php

      @move_uploaded_file($tmpPath, $relativePath ); 
      //unlink($tmpPath); Err
      return $newPath;
   }


   public function ajoutFilm () {
      $sql = "SELECT * FROM films WHERE titre = ?";
      $stmt = $this->connectDB()->prepare($sql);      
      $stmt->execute([$this->titre]);
      $resultat = $stmt->fetch();

      if ($stmt->rowCount() > 0) { 
         echo "<h3>❗ Le Film <b> $this->titre </b> existe déjà </h3> ";
      } 
      else if ($stmt->rowCount() == 0) {
         $sql = "INSERT INTO films VALUES (0, ?, ?, ?, ?, ?, ?, ?, ?, ? )";   // CURDATE()
         $stmt = $this->connectDB()->prepare($sql);
         $stmt->execute([ $this->titre, $this->categorie, $this->realisateur, $this->langue, $this->pays, $this->duree, $this->dateAjout, 
                           $this->hashPath($this->pochette, ".jpg"), $this->hashPath($this->video, ".mp4")
                        ]);         
         if ($stmt->rowCount() > 0) {
            echo "<h3>🟢 Film Ajouté avec Succès</h3> ";
            // echo $stmt->lastInsertId();
         }         
      }
      else {
         echo "<h3>⛔ Erreur d'Ajout du Film </h3> ";
      }      
   }  

    
   public function modifierFilm($idmf) {
      $sql = "SELECT * FROM films WHERE idf = ?";
      $stmt = $this->connectDB()->prepare($sql);      
      $stmt->execute([$idmf]);
      $resultat = $stmt->fetch();
      
      if ($stmt->rowCount() == 0) {
         echo "<h3>⛔ Id invalide</h3> ";
      } 

      else {
         if ($this->titre != "" && trim($this->titre) != $resultat["titre"]) {
            $stmt = $this->connectDB()->prepare("UPDATE films SET titre=? WHERE idf=?");  
            $stmt->execute([$this->titre, $idmf]);
         }
         if ($this->categorie != "" && trim($this->categorie) != $resultat["categorie"]) {
            $stmt = $this->connectDB()->prepare("UPDATE films SET categorie=? WHERE idf=?");  
            $stmt->execute([$this->categorie, $idmf]);
         }
         if ($this->realisateur != "" && trim($this->realisateur) != $resultat["realisateur"]) {
            $stmt = $this->connectDB()->prepare("UPDATE films SET realisateur=? WHERE idf=?");  
            $stmt->execute([$this->realisateur, $idmf]);
         }
         if ($this->langue != "" && trim($this->langue) != $resultat["langue"]) {
            $stmt = $this->connectDB()->prepare("UPDATE films SET langue=? WHERE idf=?");  
            $stmt->execute([$this->langue, $idmf]);
         }
         if ($this->pays != "" && trim($this->pays) != $resultat["pays"]) {
            $stmt = $this->connectDB()->prepare("UPDATE films SET pays=? WHERE idf=?");  
            $stmt->execute([$this->pays, $idmf]);
         }
         if ($this->duree != "" && trim($this->duree) !=$resultat["duree"]) {
            $stmt = $this->connectDB()->prepare("UPDATE films SET duree=? WHERE idf=?");  
            $stmt->execute([$this->duree, $idmf]);
         }
         if ($this->dateAjout != "" && trim($this->dateAjout) != $resultat["dateAjout"]) {
            $stmt = $this->connectDB()->prepare("UPDATE films SET dateAjout=? WHERE idf=?");  
            $stmt->execute([$this->dateAjout, $idmf]);
         }
         if ($this->pochette["tmp_name"] != "" && trim($this->hashPath($this->pochette, ".jpg")) != $resultat["pochette"]) {
            $stmt = $this->connectDB()->prepare("UPDATE films SET pochette=? WHERE idf=?");  
            $stmt->execute([$this->hashPath($this->pochette, ".jpg"), $idmf]);

            $oldPochette = ".".$resultat["pochette"];
            if (file_exists($oldPochette)) {
               unlink($oldPochette); 
            }
         }
         if ($this->video["tmp_name"] != "" && trim($this->hashPath($this->video, ".mp4")) != $resultat["video"]) {
            $stmt = $this->connectDB()->prepare("UPDATE films SET video=? WHERE idf=?");  
            $stmt->execute([$this->hashPath($this->video, ".mp4"), $idmf]);

            $oldVideo = ".".$resultat["video"];
            if (file_exists($oldVideo)) {
               unlink($oldVideo); 
            }
         }
         // var_dump($resultat);         // var_dump(get_object_vars($this));
         
         if ($stmt->rowCount() > 0) {
            echo "<h3>🟢 Film Modifié </h3> ";   // echo $stmt->lastInsertId();
         }
         else {
            echo "<h3>⛔ Film NON Modifié </h3> ";
         }  
      }
   } 
}