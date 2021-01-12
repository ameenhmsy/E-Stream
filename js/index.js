$(document).on("click", ".navbar-right .dropdown-menu", function (e) {
   e.stopPropagation();
});

// $(document).on("click", ".form-control", function (e) {
//    e.stopPropagation();
// });
//--------------------------------------------------------

window.onload = function () {
   document.getElementById("passwdE").onchange = validerPasswd;
   document.getElementById("passwdE2").onchange = validerPasswd;
};
function validerPasswd() {
   var passwdE = document.getElementById("passwdE2").value;
   var passwdE2 = document.getElementById("passwdE").value;

   if (passwdE != passwdE2) {
      document
         .getElementById("passwdE2")
         .setCustomValidity("Mot de passe ne correspond pas");
   } else {
      document.getElementById("passwdE2").setCustomValidity("");
   }
}

//--------------------------------------------- -----------------------------
//var videos = document.getElementsByTagName("video"); // ca marche PAS !
// videos.addEventListener("mouseOver", volumeOn);
// document.getElementsByTagName("video").addEventListener.onmouseover = () => {
//    for (let i of document.getElementsByTagName("video")) {
//       i.muted = false;
//    }
// };

function volumeOn() {
   for (let i of document.getElementsByTagName("iframe")) {
      i.muted = false;
      /* if (i.muted == true) {
         i.muted = false;
      } */
   }
}

function volumeOff() {
   for (let i of document.getElementsByTagName("iframe")) {
      i.muted = true;
      i.volume=0;
   }
}
document.onload=volumeOff();

//document.getElementsByTagName("iframe").addEventListener("mouseover", volumeOn);
//document.getElementsByTagName("iframe").addEventListener("mouseout", volumeOff);


