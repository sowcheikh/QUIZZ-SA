<?php
require_once('bd.php');

//créer des questions
try{
    $db = connect_db();
    
     $query = $db->prepare("INSERT INTO questions(libelle,nbr_points,type,nbr_reponse) VALUES(:libelle,:nbr_points,:type,:nbr_reponse)");
     $query->execute(array(
       'libelle'=>$_POST['libelle'],
      'nbr_points'=>$_POST['nbr_points'],
      'type'=>$_POST['type'],
      'nbr_reponse'=>''));
  
    }catch(PDOException $e){
       exit($e -> getMessage());
    }
?>