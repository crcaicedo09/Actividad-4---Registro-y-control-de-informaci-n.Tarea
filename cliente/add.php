    <?php
include_once('../config/config.php');
include('cliente.php');

if (isset($_POST) && !empty($_POST)){
    $p = new cliente();

    $save = $p->save($_POST);
    if ($save){
        $mensaje = '<div class="alert alert-success" > Datos registrados </div>';
    }else{
        $mensaje = '<div class="alert alert-danger" > error al registrar </div>';

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Datos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php include ('../menu.php')?>
    <div class="container">
        <?php
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>

        
        <h2 class="text-center mb-2" > Registrar Datos</h2>
        <form method="POST" enctype="multipart/form-data">

        <div class="row mb-2">
            <div class="col">
                <input type="text" name="nombres" id="nombres" placeholder="nombres del cliente" class="form-control"/>
            </div>
            <div class="col">
                <input type="text" name="edad" id="edad" placeholder="edad del cliente" class="form-control"/>
            </div>
        </div>

        <div class="row mb-2">
        <div class="col">
                <input type="email" name="email" id="email" placeholder="Email del cliente" class="form-control"/>
            </div>
        <div class="col">
                <input type="text" name="telefono" id="telefono" placeholder="telefono del cliente" class="form-control"/>
            </div>
            
            
        </div>

        <div class="row mb-2">
            <div class="col">
                <textarea id="productoqueteinteresa" name="productoqueteinteresa" placeholder="Productos que le interan al cliente" class="form-control"> </textarea>
            </div>
        </div>
        <button class="btn btn-success"> Registrar</button>


        </form>

    </div>
    
</body>
</html>