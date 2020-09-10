<html>
<head>
	<title>Meu primeiro exercício</title>
</head>
<body>
	<form action="" name="frmExercicio1" id="frmExercicio1" method="post">
		Numero: <input type="number" name="numero" id="numero">
		<input type="submit" value="Mostrar" name="btnMostrar" id="btnMostrar">
		<input type="reset" value="Apagar" name="btnReset" id="btnReset">
	</form>
</body>
</html>
<?php

//print_r($_POST);

if(isset($_POST['btnMostrar'])){
	if($_POST['numero']>10){
		echo "o valor é maior que 10";
	}else{
		echo "o valor é menor que 10";
	}
}

unset($_POST['btnMostrar']);

print_r($_POST);
?>