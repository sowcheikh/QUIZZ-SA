<?php
require_once('bd.php');

  $db = connect_db();
 //For Load All Data
  $statement = $db->prepare("SELECT * FROM users ORDER BY score DESC LIMIT 3");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = '';
  $output .= '
  <div class="card card-body">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Points</th>
    </tr>
    </thead>
  ';
  if($statement->rowCount() > 0)
  {
   foreach($result as $row)
   {
    $output .= '
    <tbody>
    <tr>
    <th scope="row">'.$row["id"].'</th>
    <td>'.$row["name"].'</td>
    <td>'.$row["score"].'pts'.'</td>
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
  $output .= '</table></table>';
  echo $output;

?>