<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		border: 0;
	}
	html{
		font-family: arial;
		font-size: 62.5%;
	}
	header{
		background-color: rgba(0,139,139);
		color: rgba(255, 255, 255, 1.0);
		padding: 5px;
		text-align: center;
		text-shadow: 1px 1px 2px rgba(0, 0, 0, 1.0);
	}
	footer{
		background-color: rgba(0,139,139);
		color: rgba(255, 255, 255, 1.0);
		padding: 5px;
		text-align: center;
		text-shadow: 1px 1px 2px rgba(0, 0, 0, 1.0);
	}
	body{
		text-align: center;
		font-size: 1.6rem;
	}
	label{
		font-weight: bold;
		font-size: 1.8rem;
	}
	input{
		font-size: 1.7rem;
		text-align: center;
		border: solid;
		border-radius: 5px;
		padding: 5px;
		width: 47%;
	}
	.botao{
		width: 20%;
		background-color: rgba(200, 255, 150, 1.0);
		color: rgba(0, 0, 0, 1.0);
		text-shadow: 2px 2px 5px rgba(255, 255, 255, 1.0);
		font-weight: bold;
		font-size: 1.8rem;

	}


</style>	

<body>

	<header>
		<h1>Tectreinamentos Informática</h1>
		<h3>Oferta de Material</h3>
	</header>
	
	<br>

	<section>
		<h2>Preencha os campos abaixo e cadastre-se</h2>
		<br>
		<form action="validar.php" method="post" id="usuarios" target="">

			<label for="usuario">Usuário</label><br>
			<input type="text" id="usuario" name="usuario" placeholder="Crie um Nome de Usuário">
			<br><br>
			<label for="email">E-Mail</label><br>
			<input type="email" id="email" name="email" placeholder="Digite seu e-mail">
			<br><br>
			<label for="senha">Senha</label><br>
			<input type="password" id="senha" name="senha" placeholder="Crie uma senha"><br><br>

			<input type="submit" class="botao" name="cadastrar">
			
		</form>

	</section>
	<br>
	<footer>
		<h3>TECTREINAMENTOS INFORMÁTICA LTDA</h3>
		<h3>CONTATO: wagner.inst@gmail.com</h3>
		<h3>CNPJ: 40.963.840/0001-74</h3>		
	</footer>

</body>
</html>