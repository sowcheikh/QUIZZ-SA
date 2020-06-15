<?php

function connect_db(){
    $host ="localhost";
    $db = "quizzsa";
    $user ="root";
    $psswd ="";
    try{
    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$psswd);
    return $conn;
    
    }catch(PDOException $pe){
        return 'connection error '.$pe->getMessage();
       die();
    }
}
function getUserConnexion($login,$password){
    try{
    $db = connect_db();
    
     $query = $db->prepare("SELECT * FROM users WHERE login=:login AND password=:password");
     $query->execute(array('login'=>$login, 'password'=>md5($password)));
        return $query;
  
    }catch(PDOException $e){
       exit($e -> getMessage());
    }
          
    }


    /*------------------------------------------------------------------------------------
inserer les infos utilisateur dans la BDD(inscription ou ajout d'un admin)
---------------------------------------------------------------------------------------*/


//liste des joueurs
if(isset($_POST["action"])) //Check value of $_POST["action"] variable value is set to not
{
  $db = connect_db();
 //For Load All Data
 if($_POST["action"] == "Load") 
 {
  $statement = $db->prepare("SELECT * FROM users WHERE profile='joueur' ORDER BY score DESC");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = '';
  $output .= '
   <table class="table table-bordered">
    <tr>
     <th width="40%">NOM</th>
     <th width="40%">SCORE</th>
     <th width="10%">MODIFIER</th>
     <th width="10%">SUPPRIMER</th>
    </tr>
  ';
  if($statement->rowCount() > 0)
  {
   foreach($result as $row)
   {
    $output .= '
    <tr>
     <td>'.$row["name"].'</td>
     <td>'.$row["score"].'pts'.'</td>
     <td><button type="button" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Modifier</button></td>
     <td><button type="button" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Supprimer</button></td>
    </tr>
    ';
   }
  }
  else
  {
   $output .= '
    <tr>
     <td align="center">Data not Found</td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 //This code for Create new Records
 if($_POST["action"] == "Ajouter")
 {
  $statement = $db->prepare("INSERT INTO users (name,score) VALUES(:name,:score)");
  $result = $statement->execute(
   array(
    'name' => $_POST["name"],
    'score' => $_POST["score"]
   )
  );
  if(!empty($result))
  {
   echo 'Données insérées';
  }
 }

 //This Code is for fetch single customer data for display on Modal
 if($_POST["action"] == "Select")
 {
  $output = array();
  $statement = $db->prepare("SELECT * FROM users WHERE id = '".$_POST["id"]."' LIMIT 1");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $output["name"] = $row["name"];
   $output["score"] = $row["score"];
  }
  echo json_encode($output);
 }

 if($_POST["action"] == "Modifier")
 {
  $statement = $db->prepare("UPDATE users SET name = :name, score = :score WHERE id = :id");
  $result = $statement->execute(
   array(
    'name' => $_POST["name"],
    'score' => $_POST["score"],
    'id'   => $_POST["id"]
   )
  );
  if(!empty($result))
  {
   echo 'Données mises à jour';
  }
 }

 if($_POST["action"] == "Supprimer")
 {
  $statement = $db->prepare("DELETE FROM users WHERE id = :id");
  $result = $statement->execute(
   array(
    'id' => $_POST["id"]
   )
  );
  if(!empty($result))
  {
   echo 'Données supprimées';
  }
 }

}

?>