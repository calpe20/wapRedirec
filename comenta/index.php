<? /*
	Autor: Angel Calderon Paredes
	Descripcion: Aplicacion PHP que permite guardar
		los comentario de los visitantes en un 
		archivo de texto sin tener la necesaidad 
		de una base de datos
	Consultas : 961580977 / #308318
	Email : calisoft@hotmail.es
	Nota: No dude en consultar.
*/?>
	<link rel="stylesheet" type="text/css" href="style.css">
	<form id="form1" name="form1" method="post" action="comenta/comentarios.php" target="comenta">
  <label> Deje su Comentario</label><hr />
  <label>NOmbre :
  </label>
  <input type="text" name="usuario" />
  <p>
  <label> Comentario :<br />
  <textarea name="comentario" cols="40" rows="10"></textarea>
  </label>
  <br />
  <input name="" type="submit" />
</form>
