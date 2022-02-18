<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<body>
    Formulario de crear
    


<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ingresar datos del libro</h5>
        <p class="card-text">

        <form method="post" action="<?=site_url('/guardar')?> " enctype="multipart/form-data">

        <div class="form-group">
        <label for="nombre">Nombre: </label>
        <input id="nombre" class="form-control" type="text" name="nombre">
    </div>
        <div class="form-group">
            <label for="imagen">Imagen: </label>
            <input id="imagen" class="form-control-file" type="file" name="imagen">
        </div>
        <button class="btn btn-success" type="submit">Guardar</button>
    </form>


        </p>
    </div>
</div>

    
</body>
</html>