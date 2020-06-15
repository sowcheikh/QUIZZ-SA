<?php
require_once('bd.php');

  $db = connect_db();
 //For Load All Data
//   $statement = $db->prepare("SELECT * FROM questions");
//   $statement->execute();
//   $result = $statement->fetchAll();
//   $output = '';
//   $output .= '
//   <div class="card card-body">
//   ';
//   if($statement->rowCount() > 0)
//   {
//    foreach($result as $key => $row)
//    {
//     $output .= '
  
//     <p>'.($key+1).'. '.$row["libelle"].'</p>
//     ';
//    }
//   }
//   else
//   {
//    $output .= '
//     dara
//    ';
//   }
//   $output .= '</div>';
//   echo $output;
    $req = $db->query("SELECT id,libelle,nbr_points,type FROM questions ");
    $req->execute();

    while ($data = $req->fetch()) {
        echo  "<p>".$data['libelle']."</p>";
        $req1 = $db->query("SELECT libelle_rep FROM reponses");
        $req1->execute();
        $req2 = $db->query("SELECT rep_vrai FROM bonne_reponses");
        $req2->execute();
        if ($data['type']=="simple") {
            while ($data1 = $req1->fetch()){
                    echo "<input type='radio' checked>".$data1['libelle_rep']."</input> ";
               
            }
            echo "<br/>=================</BR>";
        } elseif ($data['type']=="multiple") {
            while ($data1 = $req1->fetch()){
                    echo "<input type='checkbox' checked>".$data1['libelle_rep']."</input> ";
                
                
            }
            echo "<br/>=================</BR>";
        }else {
            while ($data1 = $req1->fetch()){
                  echo "<input type='text' readonly value='".$data1['libelle_rep']."'/> ";
                
                
            }
        }
        
        
    }

?>