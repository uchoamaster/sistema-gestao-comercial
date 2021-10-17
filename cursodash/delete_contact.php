<?php

include 'conexao.php';

$id = $_POST['id'];
$name = $_POST['name'];


$sql = "DELETE FROM agenda WHERE id = $id";
$delete = mysqli_query($conexao, $sql);

header('Location: list_contacts.php?msg=2');



?>