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
?>
<link rel="stylesheet" type="text/css" href="../vista.css">
<?
$fp = fopen('coment.txt','r');
	if(!fp){
		echo '¡No existe el archivo!';
		exit;
	}
	while (!feof($fp)){
		$order = fgets($fp,999);
		$long =  strlen($order);
		//$cade = 'Autor';	
		for($i=0;$i<=$long;$i++){
			$cad = substr($order,$i,1);
			if(trim($cad)=='|'){
				//$otras = "Comentario:";
				$cade .= '</td></tr><tr><td><label><b>Comentario :</b></label><br>';
			}else{
				if($i==0){
					$sal ='<tr><td><hr><label><b>Autor:</b></label>';
					$cad =$sal.$cad;					
				}
				$cade .=$cad;
			}
		}
		echo '</td></tr>';
	}
	echo $cade;		
fclose($fp);
?> 
</table>
<!---<br>
<div id="ruta" align="center">
		<A href='index.php' onmouseout=\"self.status='';return true\" 
		onmouseover=\"self.status='Regresar' ;return true\">Retornar</A>
</div>-->
