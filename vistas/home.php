<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div></div>


<h1>BLOG HOME PAGE</h1>
<br><br><br><br>
<h2>PUBLICACIONES</h2>
<br><br>

<?php foreach(($publicaciones=PublicacionControlador::ListarTodos()) as $publicacion) :?>

    <b>AUTOR:</b> <?=  $publicacion['nombreAutor'] . " " . $publicacion['apellidoAutor'] ?><br>
    <B>PUBLICADO:</B> <?=  $publicacion['fechaHora'] ?><br><br>



<?php endforeach; ?>

</body>
</html>