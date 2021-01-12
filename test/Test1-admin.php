<!DOCTYPE html>
<html>

   <head>
      <meta charset="utf-8" />
      <title>Admin</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
      <link rel="stylesheet" href="../css/index.css" />
      <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css" />
      <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../js/index.js"></script>
   </head>
   <!-- --------------------------------------------------------------------- -->

   <body>
      <?php include_once "../page/header.php"; ?>
      <!-- ----------------------- -->
      <div class="container bg-info page-header text-center">
         <h1> Bienvenue <a class="btn btn-info btn-lg" href="admin.php">Admin</a>  </h1>
      </div> <br>

      <div class="container bg-info">
         <h2>Gestion Film</h2>
         <!-- ----------------------- Lister Film -->
         <div class="row">  
            <div class="col-sm-2 ">  <h4> 1. Lister</h4> </div>          
            <div class="col-sm-5">                 
               <form action="" method="post" class="form-inline "> 
                  <input type="text" name="idListFilm" class="form-control" placeholder=" ID  film à lister"/>  
                  <input type="submit" name="submitListFilm" class="btn btn-primary btn-small" value=" Lister ">
               </form> 
            </div>

            <div class="col-sm-4">               
               <form action="" method="post" class="form-inline ">
                  <input type="submit" class="btn btn-primary btn-small" value="Lister Tous les Films"/> 
               </form>
            </div>  
            <?php // code lister ici ........................................... ?>     
         </div> 
         <!-- ----------------------- Effacer Film -->
         <div class="row">  
            <div class="col-sm-2 ">  <h4>2. Effacer</h4> </div>            
            <div class="col-sm-5"> 
               <form action="" method="post" class="form-inline "> 
                  <input type="text" class="form-control" placeholder=" ID  film à Effacer"/>  
                  <input type="submit" class="btn btn-danger btn-small" value="Effacer">
               </form> 
            </div>

            <div class="col-sm-4">               
               <form action="" method="post" class="form-inline "> 
                  <input type="submit" class="btn btn-danger btn-small" value="Effacer Tous les Films" disabled/>
               </form>
            </div>   
         </div> <br>
         <!-- ----------------------- Ajouter Film -->
         <div class="">
            <div class="">  <h4>3. Ajouter</h4> </div>
            <div class="form-group">  
               <form action="" method="post" class=""> 
               <div class="row mb-3">
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Titre"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Catégorie"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Réalisateur"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Langue"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Pays"/> </div> 
               </div> 
               <div class="row mt-3">
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Durée hh:mm"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Date yy-mm-dd"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Pochette"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Video"/> </div>
                  <input type="submit" class="btn btn-success btn-small col-xs-2" value=" Ajouter Film">
               </div>
               </form>
            </div>
         </div> <br>
         <!-- -----------------------Modifier Film -->
         <div class="">
            <div class="">  <h4>4. Modifier</h4> </div>  
            <div class="form-group">  
               <form action="" method="post" class=""> 
               <div class="row">
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Titre"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Catégorie"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Réalisateur"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Langue"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Pays"/> </div> 
               </div>  
               <div class="row">
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Durée hh:mm"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Date yy-mm-dd"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Pochette"/> </div>  
                  <div class="col-xs-2"> <input type="text" class="form-control" placeholder="Video"/> </div>
                  <input type="submit" class="btn btn-warning btn-small col-xs-2" value=" Modifier Film">
               </div>
               </form>
            </div>
         </div> 
         <!-- ----------------------- -->
      </div>
      <br> 
      <!-- ======================================================================================= -->
      <br>      
      <div class="container bg-info">
         <h2>Gestion Membres</h2>
         <!-- ----------------------- Lister Membre -->
         <div class="row">  
            <div class="col-sm-2 ">  <h4> 1. Lister</h4> </div>          
            <div class="col-sm-5">                 
               <form action="" method="post" class="form-inline "> 
                  <input type="text" class="form-control" placeholder=" ID  Membre à lister"/>  
                  <input type="submit" class="btn btn-primary btn-small" value=" Lister ">
               </form> 
            </div>

            <div class="col-sm-4">               
               <form action="" method="post" class="form-inline ">
                  <input type="submit" class="btn btn-primary btn-small" value="Lister Tous les Membre"/> 
               </form>
            </div>       
         </div> 
         <!-- ----------------------- Activer Membre -->
         <div class="row">  
            <div class="col-sm-2 ">  <h4>2. Activer</h4> </div>            
            <div class="col-sm-5"> 
               <form action="" method="post" class="form-inline "> 
                  <input type="text" class="form-control" placeholder=" ID  Membre à Activer"/>  
                  <input type="submit" class="btn btn-success btn-small" value="Activer">
               </form> 
            </div>

            <div class="col-sm-4">               
               <form action="" method="post" class="form-inline "> 
                  <input type="submit" class="btn btn-success btn-small" value="Activer Tous les Membres" />
               </form>
            </div>   
         </div>         
         <!-- ----------------------- Désactiver Membre -->
         <div class="row">  
            <div class="col-sm-2 ">  <h4>3. Désactiver</h4> </div>            
            <div class="col-sm-5"> 
               <form action="" method="post" class="form-inline "> 
                  <input type="text" class="form-control" placeholder=" ID  film à Désactiver"/>  
                  <input type="submit" class="btn btn-danger btn-small" value="Désactiver">
               </form> 
            </div>

            <div class="col-sm-4">               
               <form action="" method="post" class="form-inline "> 
                  <input type="submit" class="btn btn-danger btn-small" value="Désactiver Tous Membres" disabled/>
               </form>
            </div>   
         </div> <br>
         <!-- ----------------------- -->
      </div>

      <br> <br> <br>
      <!-- ----------------------- -->
      <?php  include_once "../page/footer.php"; ?>
   </body>
</html>

<?php

