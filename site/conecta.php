<?php

	mysql_connect("localhost", "root", "") or die(mysql_error());

	mysql_select_db("teste_php") or die (mysql_error());

	$sql = "INSERT INTO contact (id, name, email, message, created) VALUES ('Fernando Tecchio', 'fernando.tecchio@gmail.com',
		'Essa é uma mensagem!', NOW())";

	mysql_query($sql) or die(mysql_error());

	echo "Funcionou !"

	mysql_close();	



?>
