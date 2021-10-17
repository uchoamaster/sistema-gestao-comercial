<?php

include 'conexao.php';

$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$business = $_POST['business'];

$sql = "INSERT INTO agenda (name,mail,telephone,business) values ('$name','$mail','$phone','$business')";
$insert = mysqli_query($conexao,$sql);

header('Location: form_contact.php?msg=1');

?>