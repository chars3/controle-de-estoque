<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript"></script>
</head>
<body>
	<?php 
		$id=$_GET['id'];
		$NOME=$_GET['nome'];
		require('conexao.php');
		$alterar ="update produtos set nome='$NOME' where id='$id' ";
		mysqli_query($db,$alterar) or die ('Não foi possível alterar');
		echo "<script>alert('Cadastro alterado com sucesso!');
		window.location.href='produtos.php'</script>";
	?>
</body>
</html>