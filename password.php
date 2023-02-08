<?php 

session_start();

if(empty($_SESSION['password'])){
    header('location: index.php');
}
?>

<p>la password generata è: <?= generatePassword($_POST['lunghezza']) ?></p>
