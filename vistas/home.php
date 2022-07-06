<?php 

if(isset($_SESSION['autenticado'])){
    $oculto = "hidden";
    $log = "";
}else{$oculto = ""; $log = "hidden";}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <br>

<div><form <?=  $oculto ?>  action="/home" method="post">
Usuario  <input type="text" name="usuario"> Password 
<input type="password" name="password">  
<input type="submit" value="Iniciar Sesión"></form><br></div>

<div <?= $oculto ?> ><a href="/nuevoUsuario"> Registrarse</a> </div>

<div <?= $log ?> > <h3>USUARIO: <?= $_SESSION['nombreUsuario'] ?></h3></div> 
<br>
<div <?= $log ?> > <a href="/nuevaPublicacion">Nueva Publicacion</a></div> 


<div align="center"><h1> ----- BLOG HOME PAGE ----- </h1></div>
<br><br><br><br>
<h2>PUBLICACIONES</h2>
<br><br>

<?php foreach(($publicaciones=PublicacionControlador::ListarTodos()) as $publicacion) :?>

    <b>Autor:</b> <?=  $publicacion['nombreAutor'] . " " . $publicacion['apellidoAutor'] ?>
    <B> Publicado:</B> <?=  $publicacion['fechaHora'] ?><br><br>



<?php endforeach; ?>

</body>
</html>