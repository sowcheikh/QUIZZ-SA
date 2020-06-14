<?php
require_once('bd.php');

//créer des questions
    $db = connect_db();
    $c = $db->prepare("SELECT login FROM questions WHERE libelle= :libelle");
    $c->execute([
        'libelle' => $_POST['libelle']
    ]);
    $result = $c->rowCount();
    
    if ($result == 0) {
      $i = 1;
      $i++;
     $question = $db->prepare("INSERT INTO questions(libelle,nbr_points,type) VALUES(:libelle,:nbr_points,:type)");
     $question->execute(array(
       'libelle'=>$_POST['libelle'],
      'nbr_points'=>$_POST['nbr_points'],
      'type'=>$_POST['type']
     ));
     if ($_POST['type']=='texte') {
      $reponses = $db->prepare("INSERT INTO reponses(libelle_rep) VALUES(:libelle_rep)");
      $reponses->execute(array(
        'libelle_rep'=> $_POST['libelle_rep'],
      ));
     } else {
      $reponses = $db->prepare("INSERT INTO reponses(libelle_rep) VALUES(:libelle_rep)");
      $reponses->execute(array(
        'libelle_rep'=> $_POST['libelle_rep'],
      ));
     }
     
    } else {
      echo 'la question existe déja!!';
    }
?>