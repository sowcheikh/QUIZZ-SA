
<?php
require_once('./data/bd.php');
 session_start();
function pageConnexion($post)
 {
     $login=$post['login'];
     $password=$post['password'];
     //Validation des Champs en Php
   
     $result=getUserConnexion($login, $password);
     $user = $result->fetch();
     if(!$user)
     {
        echo "error";
         
     }else{
          $_SESSION['userConnect']=$user;
         echo $user['profile'];
     }

 }

 function deconnection(){
    //Destruction des données utlisateur
    session_destroy();
    unset( $_SESSION['userConnect']);
     echo "logout";
 }

 function is_connect(){
     if(isset($_SESSION['userConnect'])){
         return true;
     }else{
        return false;
     }
 }
      
       
?>