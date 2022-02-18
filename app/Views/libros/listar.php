<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>





    Lista de libros
   
<br>
<br>
   

    <div class="container">
    <a href="<?=base_url('crear')?>">Crear un libro</a>
    <table class="table table-dark">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody> 

        <?php foreach($libros as $libro): ?>


            <tr>
                
                <td><?=$libro[ 'id'];?></td>
                <td><?=$libro[ 'imagen'];?></td>
                <td><?=$libro[ 'nombre'];?></td>
                <td>Editar/Borrar</td>
            </tr>

<?php endforeach; ?>


        </tbody>
    </table>
    </div>
    



</body>
</html>