<html>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<div class="alert alert-primary" role="alert">
<div class="row justify-content-center">
<form action="index.php" method="post">

<?php 
 if($_POST) {
	
$nombre = $_POST["nombre_s"]; 
 $telefono = $_POST["tel_s"];
$email= $_POST["email_s"];

 $claseNom = ""; 
$clasetel = ""; 
$clasecor = "";

if ($nombre == ""){
$msgNombre = "Falta Ingresar el nombre";
$claseNom = "error";
		
		
echo "
		
<div class='callout callout-danger'>
<h4><i class='fa fa-fw fa-ban'>$msgNombre</i></h4>
<br >
</div>";
		
} 
		 
	 

if ($telefono == "" ){
$msgtel = "Falta Ingresar el telefono";
$clasetel = "error";
		
echo "
		
<div class='callout callout-danger'>
<h4><i class='fa fa-fw fa-ban'>$msgtel</i></h4>
<br>
</div>";
		
} else 
{
if (!is_numeric($telefono)) {
$msgEdad = "El telefono debe ser numerico";
$clasetel = "error";
		
		
echo "
		
<div class='callout callout-danger'>
<h4><i class='fa fa-fw fa-ban'>$msgEdad</i></h4>
<br>
</div>";
}
}
	 

if ($email == "" ){
$msgcor = "Falta Ingresar el correo";
$clasecor = "error";
	
	 
echo "
		
<div class='callout callout-danger'>
<h4><i class='fa fa-fw fa-ban'>$msgcor</i></h4>
<br>
</div>";
	 
} else
{ if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "
		
<div class='callout callout-danger'>
<h4><i class='fa fa-fw fa-ban'></i></h4>
<br>
</div>"; }
	 
else{ echo "
		
<div class='callout callout-danger'>
<h4><i class='fa fa-fw fa-ban'>Correo invalido</i></h4>
<br>
</div>"; }
}
	 
if ($claseNom == "" && $clasetel == "" && $clasecor == "" ) {
	 	
echo "
		
<div class='callout callout-danger'>
<h4><i class='fa fa-fw fa-ban'>Ok!</i></h4>
	
<br>
</div>"; }
		
}
?>
<br>


<form>
</div>
</div>
<input type="submit" value="Regresar" class="btn btn-success">

</html>