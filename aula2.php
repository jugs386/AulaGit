<html>
	<head>
		<title>Exercicio Teste</title>
	</head>
	<body>
		<form action="" method="post" name="frm1" id="frm1">
			Numero: <input type="text" name="numero1" id="numero1">
			Numero: <input type="text" name="numero2" id="numero2">
			<input type="submit" name="btnOk" value="Ok">
		</form>
	</body>
</html>
<?php
$numero1 = str_replace(",",".",$_POST['numero1']);
$numero2 = str_replace(",",".",$_POST['numero2']);
$soma = $numero1 + $numero2;
echo str_replace(".",",",$soma);
?>