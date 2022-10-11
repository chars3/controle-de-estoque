<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Constrole de Estoque</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
        $(document).ready(function() {
            $("li a[href='" + location.href.substring(location.href.lastIndexOf("/") + 1, 255) + "']").addClass("diferente");
        });
    </script>
</head>



<body>
    <div class="header">
        <div>
            <img src="imagens/animals.png" alt="equipe-icon" width="100px" height="100px">
            <p>Cerberus</p>
        </div>
        <h1>Controle de Estoque</h1>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li><a href="fornecedores.php">Fornecedores</a></li>
            <li><a href="estoque.php">Estoque</a></li>
        </ul>
    </nav>
    <div class="inserir">
        <ul>
            <li><a href="in-clientes.php">Cadastrar Clientes</a></li>
            <li>
                <form method="post" action="processa.php">
                    <input type="text" name="busca" class="campo">
                    <input type="submit" value="Buscar" class="btn">
                </form>

            </li>
        </ul>
    </div>

    <div class="tab-container">
        <h2><a href=2.relatorio_clientes.php? >Clientes</a></h2>
        <table>
            <tr>
                <th>id Cliente</th> 
                <th>Nome Cliente</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Rua</th>
                <th>Bairro</th>
            </tr> 
			<?php
				ini_set('display_errors', 0 );
				error_reporting(0);
			?>
			<?php
				require('conexao.php');
				$result = mysqli_query($db, "SELECT * FROM clientes");
				if(!$result){
					echo "" ;
					exit;
				}
		
				$linha =1;
				while($row =mysqli_fetch_assoc($result)) {
					echo "<tr><td>" .$row['nome'] ."</td><td>"	    .$row['email'] ."</td><td>"
									.$row['telefone'] ."</td><td>"	.$row['rua'] ."</td><td>"
									.$row['bairro'] ."</td><td>";
					$linha++;
				}
				mysqli_free_result($result);
			?>
        </table>
    </div>



</body>


<footer>
    <section id="copyright">
        <h2>Direitos</h2>
        <p>Copyright - todos os direitos reservados | Desenvolvido pela equipe Cerberus</p>
    </section>

</footer>


</html>