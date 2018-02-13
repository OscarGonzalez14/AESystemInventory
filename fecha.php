<?php
$fecha=date();

echo $fecha;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form  method="post">
    Nombre usuario: <input type="date" name="username" /><br />
   
    <input type="submit" name="submit" value="¡Enviarme!" />
</form>
</body>
</html>

<?php
$h= $_POST['username'];
$nh = date('d/m/Y', strtotime($h));
echo $h;

?>