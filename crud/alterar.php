<?php 
require_once "conecta.php";	
				$id = $_POST['id'];
				$name = $_POST['name'];
				$adress = $_POST['adress'];
				$image = 1;
				
		$Post = mysqli_query($link,"UPDATE alunos SET name='$name', adress='$adress' WHERE id='$id';");

		echo"<script language='javascript' type='text/javascript'>alert('Alterado com sucesso!');window.location.href='index.php'</script>";
		
	
        ?>