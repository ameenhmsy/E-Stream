<!DOCTYPE html>
<html>
<body>

<?php 
   $str = "Hello"; 
   $strHash1= password_hash($str, PASSWORD_DEFAULT);
   $strHash2= password_hash($str, PASSWORD_DEFAULT); 


   echo "<hr>";
   echo $strHash1 . "<br>";
   echo $strHash2 . "<br>";

   if ( password_verify($str, $strHash1) )   { echo " True Hash1 <br>"; }    
   else                                      { echo " False Hash1 <br>";}
      
   if ( password_verify($str, $strHash1) )   { echo " True Hash2 <br>"; }    
   else                                      { echo " False Hash2 <br>";}

   // password_hash($passd, PASSWORD_DEFAULT);      //  return $passdHashed
	// password_verify($passd, $passdHashed);        //  ($_POST['passd'], $resultat[passwd])
    
   /* Reste
      1.Hash passwd
      2.session 
      3.userManager 
       */

?>

</body>
</html>
