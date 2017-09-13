<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="text/javascript">
function validar(e) { // 1
tecla = (document.all) ? e.keyCode : e.which; // 2
if (tecla==8) return true; // 3
patron =/[A-Za-z\s]/; // 4
te = String.fromCharCode(tecla); // 5
return patron.test(te); // 6
}
</script>

<script type="text/javascript">
function numeros(nu) { // 1
tecla = (document.all) ? e.keyCode : e.which; // 2
if (tecla==8) return true; // 3
ppatron = /\d/; // Solo acepta nÃºmeros// 4
te = String.fromCharCode(tecla); // 5
return patron.test(te); // 6
}
</script>

<script type="text/javascript">
function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
         
return /\d/.test(String.fromCharCode(keynum));
        }
</script>

<title> Practica 1| Sistemas Operativos II </title>
<meta name="desciption" content="Escalabilidad de los SOD |
 problematica: cuellos de botella sobrecargada en servidores |
 practica: liberar al sistema de trabajoque no sean necesarios">
<meta name="autor" content="karla romo"

 </head>
 
<body>

<h1> Sistemas operativos II </h1>
<p>karla romo</p>

<div class="row">
<div class="col-lg-4"> 
<form action="/exito.php">


Nombre:<br>
<input type="text" name="nombre" values="Nombre"  maxlength="10"  onkeypress="return validar(event)"">
<br>
Email: <br>
<input type="email" name="email" value="Usuarios" >
<br>
Telefono: <br>
<input type="text" name="lastname" value="telefono" onkeypress="return justNumbers(event);">
<br><br>
<input type="submit" value="submit" class="btn btn-success">
<br>

</form>
</div>

<div class="col-lg-4">
<div class="alert alert-primary" role="alert">
validar ser
</div> 
<form action="exito.php" method="post">
Nombre:<br>
<input type="text" name="nombre_s" placeholder="Nombre"
class="form-control">
<br>
Email: <br>
<input type="text" name="email_s"  placeholder="Usuarios"
class="form-control">
<br>
Telefono: <br>
<input type="text" name="tel_s" placeholder="Telefono"
class="form-control">
<br><br>
<input type="submit" value="Enviar" class="btn btn-success">
</form>
</div>
</div>

<div class="row justify-content-center">
<?php if(isset($_GET['mensaje'])){
switch($_GET['mensaje']){
case 1: echo "

<div class='callout callout-danger'>
<h4><i class='fa fa-fw fa-ban'>error de ingeso</i></h4>
<p>Tu nombre de usuario o contraseña incorrectos</p>
</div>";
break;
		
case 2:echo "
<div class='callout callout-danger'>
<h4><i class='fa fa-fw fa-ban'>validacion correcta</i></h4>
<p>email incorrectos</p>
</div>";


break;
		
case 3:echo "
<div class='callout callout-danger'>
<h4><i class='fa fa-fw fa-ban'>error de validacion</i></h4>
<p>Tu correo mal</p>
</div>";
		

break;
		
}
}
 
?>
</div>

</body>
</html>