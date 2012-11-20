<?php

	// $_POST = variavel

	//var_dump($_POST);

	
	// SE for enviar um post e a variavel não é vazia
	// então mostrar os dados
	
	if(isset($_POST["pagina"]) && $_POST["pagina"] == "contato"){
		echo $_POST["nome"]."<br>";
		echo $_POST["email"]."<br>";
		echo $_POST["mensagem"];
	}else {
	// senão
	// redimencionar para a pagina de contato
		header("Location: contact.php");
	}
