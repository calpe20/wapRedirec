<?
/*
	Autor: Angel Calderon Paredes
	Descripcion: Aplicacion PHP que permite guardar
		los comentario de los visitantes en un 
		archivo de texto sin tener la necesaidad 
		de una base de datos
	Consultas : 961580977 / #308318
	Email : calisoft@hotmail.es
	Nota: No dude en consultar.
*/
$user = $_POST['usuario'];
$come = $_POST['comentario'];
$fp = fopen('coment.txt','ab');
$datos = trim($user)."|".trim($come)."\n";
fwrite($fp,$datos);
fclose($fp);
$ca = "Location: http://" . $_SERVER['HTTP_HOST']
        . dirname($_SERVER['PHP_SELF']) . "/mostrar.php";
    header( $ca, True );
?>