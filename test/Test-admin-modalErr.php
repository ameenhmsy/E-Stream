<div class="row">
            <div class="col-sm-3">
               1
               <!-- ----------------------------------------------------------------- Lister -->
               <div class="dropdown ">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                     Lister Un Film&nbsp;&nbsp;
                  </button> 
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">
                        <div class="form-inline">
                           <div class="form-group container row">  
                              <form action="" method="post" class="form-inline "> 
                              <div class="col-sm-6 mb-4">
                                 <input type="text" name="idListFilm" class="form-control" placeholder=" ID  film à lister"/>  
                                 <input type="submit" name="submitListFilm" class="btn btn-primary btn-small" value=" Lister ">
                              </div> 
                              <div class="col-sm-4 mt-3">
                                 <input type="submit" class="btn btn-primary btn-small" value="Lister Tous les Films"/>
                              </div>
                              </form>
                           </div>
                        </div>
                     </a>
                  </div>
                  <?php // code lister ici ........................................... ?>    
               </div>
               1
            </div>
            <div class="col-sm-3">
               2
               <!-- ----------------------------------------------------------------- Supp -->
               <div class="dropdown">
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                     Effacer Un Film
                  </button> 
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">
                        <div class="form-inline ">
                           <div class="form-group container row">  
                              <form action="" method="post" class="form-inline "> 
                              <div class="col-sm-6 mb-4">
                                 <input type="text" class="form-control" placeholder=" ID  film à Effacer"/>  
                                 <input type="submit" class="btn btn-danger btn-small" value="Effacer">
                              </div> 
                              <div class="col-sm-4 mt-3">
                                 <input type="submit" class="btn btn-danger btn-small" value="Effacer Tous les Films" disabled/>
                              </div>
                              </form>
                           </div>
                        </div>
                     </a>
                  </div>
                  <?php // code lister ici ........................................... ?>    
               </div>
               2
            </div>
            <div class="col-sm-3">
               3
               <!-- ----------------------------------------------------------------- Ajout -->
               <div class="dropdown dropleft">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                     Ajouter Un Film
                  </button>
                  <div class="dropdown-menu dropdown-menu-center">
                     <a class="dropdown-item row" href="#">
                        <div class="">
                           <div class="form-group container">  
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
                                 <input type="submit" class="btn btn-success btn-small col-xs-2" value=" Ajouter">
                              </div>
                              </form>
                           </div>
                        </div>
                     </a>
                  </div>
                  <?php // code lister ici ........................................... ?>    
               </div>
               3
            </div>
            <div class="col-sm-3">
               4
               <!-- ----------------------------------------------------------------- Modif -->
               <div class="dropdown dropright">
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                     Modifier Un Film
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                     <a class="dropdown-item row" href="#">
                        <div class="">
                           <div class="form-group container">  
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
                                 <input type="submit" class="btn btn-warning btn-small col-xs-2" value=" Modifier Film">
                              </div>
                              </form>
                           </div>
                        </div>
                     </a>
                  </div>
                  <?php // code lister ici ........................................... ?>    
               </div>
               4
            </div>
         </div> <hr>