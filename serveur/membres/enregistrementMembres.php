   <head>
      <meta charset="utf-8" />
      <title>E-Stream</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css" />
      <link rel="stylesheet" href="../../css/index.css" />
      <link rel="stylesheet" type="text/css" href="../../font-awesome/css/font-awesome.min.css" />
      <script type="text/javascript" src="../../js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../../js/index.js"></script>
   </head>
   
<div class="container bg-info">

<?php

include_once "../../inc/UserEnregistrement.php";

$newUser = new UserEnregistrement(
   $_POST["prenomE"],
   $_POST["nomE"],
   $_POST["emailE"],
   $_POST["passwdE"],
   $_POST["passwdE2"],
   $_POST["sexeE"],
   $_POST["naissanceE"]
);

$newUser->userEnregistre();

echo "<h2> ";
echo "<a href=\"../../index.php\" class=\"btn btn-primary btn-lg active\" role=\"button\" aria-pressed=\"true\">Page d'Accueil</a>";
echo "</h2> ";

// ---------------------------------------------------------------
// include_once dirname(__DIR__).DIRECTORY_SEPARATOR."page". DIRECTORY_SEPARATOR."header.php";
// echo "Sauvgarder membre ds /donnees/membres.txt <br>"; print_r($_POST);
// include_once "../../page/header.php";

// $nomE = $_POST["nomE"];
// $prenomE = $_POST["prenomE"];
// $emailE = $_POST["emailE"];
// $passwdE = $_POST["passwdE"];
// $passwdE2 = $_POST["passwdE2"];
// $sexeE = $_POST["sexeE"];
// $naissanceE = $_POST["naissanceE"];
// $regExpPasswd = "/^[A-Za-z0-9\-\_]{8,10}$/";
// $regExpEmail = "/^[a-zA-Z0-9\_\-\.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+$/";
// $tabErreur = [];
// // ---------------------------------------------------------------

// if ($passwdE != $passwdE2 || !preg_match($regExpPasswd, $passwdE)) {
//     array_push($tabErreur, "Mot de passe Invalide ou ne Correspond pas");
// }

// if (!preg_match($regExpEmail, $emailE)) {
//     // if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//     array_push($tabErreur, "Email Invalide");
// }
// // ---------------------------------------------------------------

// $fichier = fopen("../../donnees/membres.txt", "a+");
// if (!$fichier) {
//     array_push($tabErreur, "Problème du fichier");
// }

// $ligne = "I;USER;".$emailE.";".$passwdE.";".$prenomE.";".$nomE.";".$sexeE.";".$naissanceE."\n";
// fputs($fichier, $ligne);

// // fclose($fichier);
// if (!fclose($fichier)) {
//     array_push($tabErreur, "Problème d'écriture dans le fichier");
// }
// // ---------------------------------------------------------------

// if (count($tabErreur) > 0) {
//     echo "<h2>le Serveur a détecté des Erreurs:</h2>" ;
//     foreach ($tabErreur as $x) {
//         echo "<p> . $x . </p>";
//     }
// } else {
//     echo "<h2> Vous êtes désormais membre, Connectez-vous ";
//     echo "<a href=\"../../index.php\" class=\"btn btn-primary btn-lg active\" role=\"button\" aria-pressed=\"true\">Page d'Accueil</a>";
//     echo "</h2> ";
// }
// // ---------------------------------------------------------------

?>   
   
</div>
