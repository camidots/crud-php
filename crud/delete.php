<?php 

require_once "conecta.php";


$id = $_GET['id'];  
$sqlInsert = "DELETE FROM alunos WHERE id = '$id'";   
$deletaPost = mysqli_query($link,$sqlInsert);
echo"<script language='javascript' type='text/javascript'>alert('Excluido com sucesso!');window.location.href='index.php'</script>";
		

 

?>