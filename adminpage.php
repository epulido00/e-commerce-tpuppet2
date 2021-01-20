
<!DOCTYPE html>
<html>
<title> Productos </title>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="#">E-commerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" >
            <a class="nav-item nav-link " href="#">Home</a>
            <a class="nav-item nav-link" href="#"> Informacíon del usuario</a>
            <a class="nav-item nav-link active" href="#"> Productos <span class="sr-only">(current)</span> </a>
            
            </div>
        </div>
        </nav>
    </div>
</header>

<body>

<div>
    <form action= "includes/prod.inc.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1"> Nombre del producto </label>
            <input type="name" class="form-control" id="exampleFormControlInput1" name="nombreprod" placeholder="Nombre del producto">
        </div>
        

        <div class="form-group">
            <label for="exampleFormControlTextarea1"> Descripción del producto </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="descr" rows="3"></textarea>
        </div>

        <p> Precio </p>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control" name="precio" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
                <span class="input-group-text">.00</span>
            </div>
        </div>

        <p> Precio oferta </p>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control" name="oferta" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
                <span class="input-group-text">.00</span>
            </div>
        </div>
        
        <div class="form-group">
        <label for="exampleFormControlFile1"> Seleccione una imagen </label>
        <input type="file" class="form-control-file" name="img" id="exampleFormControlFile1">
    </div>
    
    <div class="form-group">
        <button type="submit" name="guardar"> Aceptar </button>
    </div>

     </form>
    </div>



    <div class ="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Oferta</th>
                </tr>
            </thead>
        </table>
        
    
    </div>

</body>
</html>
