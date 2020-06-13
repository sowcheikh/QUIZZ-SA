<?php
require_once('bd.php');
$db = connect_db();

if ($_POST['password'] === $_POST['password2']) {  
$photo = $_POST['photo'];
            $c = $db->prepare("SELECT login FROM users WHERE login= :login");
$c->execute([
    'login' => $_POST['login']
]);
$result = $c->rowCount();

if ($result == 0) {
    $q = $db->prepare("INSERT INTO users(name,login,password,profile,score,statut,photo) VALUES(:name,:login,:password,:profile,:score,:statut,:photo)");
    $q->execute([
    'name' => $_POST['name'],
    'login' => $_POST['login'],
    'password' => $_POST['password'],
    'profile' => 'admin',
    'score' => '',
    'statut' => 'actif',
    'photo' => $photo

    ]);
    echo 'success';

} else {
    echo 'le login existe déja!!!';
}    
            
    } else {
    echo 'les mots de passes ne sont pas identiques';
    }
?>