<?php

include 'conexao.php';

$id = $_POST['id'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$business = $_POST['business'];


$sql = "UPDATE `agenda` SET `name`='$name',`mail`='$mail',`telephone`='$tel',`business`='$business' WHERE id = $id";
$insert = mysqli_query($conexao, $sql);

header('Location: list_contacts.php?msg=1');



?>