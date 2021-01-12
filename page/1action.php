<!DOCTYPE html>
<html>

   <head>
      <meta charset="utf-8" />
      <title>Contact</title>
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

      <!-- <div class="container pb-video-container rounded">  | <div class="container bg-info">  headerCateg -->
      <div class="container">
         <div class="jumbotron p-3 p-md-5 my-0 text-center rounded bg-dark container pb-video-container"> 
            <h2 id="headerCateg">Films d'Action</h2>
         </div>
      
         <div class="container pb-video-container rounded">
            <div> <!-- *************************************************************** -->
               <?php 
                  include_once "../inc/ViewMain.php";
                  $currentViewerCtg = new ViewMain;
                  $rslt = $currentViewerCtg->viewCateg("Action");
                  foreach($rslt as $elm) {
               ?> 
               
               <div class="movie-card card col-sm-3 col-md-3 pb-video">
                  <div class="margPadCard pb-video">
                     <div  class="modal fade" id="<?= $elm["idf"] ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                           <div class="modal-content">
                              <div class="modal-body mb-0 p-0 iframe">
                                 <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <video class="embed-responsive-item" src="<?= ".".$elm["video"] ;?>" controls autoplay=1 preload="auto" muted  frameborder="0" type="video/mp4" allowfullscreen></video>
                                 </div>
                              </div>                        
                           </div>
                        </div>
                     </div>
                     <a href="#">
                        <img src="<?php echo ".".$elm["pochette"] ;?>" class="img-fluid z-depth-1 card-img-top" data-toggle="modal" data-target="#<?= $elm["idf"] ;?>" alt="..." width="100%" height="340">
                     </a>
                  
                     <div class="pmain movie-content pb-video">
                        <div class="movie-titleC movie-content-header">
                           <a href="#">  <h4 class="text-center form-control label-warning"><b><?php echo $elm["titre"] ;?></b></h4>  </a>
                           <div class="imax-logo"></div>
                        </div>
                        <div class="movie-info">
                           <div class="info-section">
                              <label><?php echo $elm["realisateur"] ;?></label>
                           </div>
                           <div  class="row">
                              <div class="info-section col-sm-6">
                                 <label><?php echo $elm["pays"] ;?></label>  <span> - <?php echo $elm["langue"] ;?></span>
                              </div>
                              <div class="info-section text-right col-sm-5">
                                 <label><?php echo $elm["categorie"] ;?></label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> 

               <?php
                  }
               ?> <!-- *************************************************************** -->    
            </div>
         </div>
      </div>
      <br>
      
      <?php  include_once "../page/footer.php"; ?>
   </body>

</html>