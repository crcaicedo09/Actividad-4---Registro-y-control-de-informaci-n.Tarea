<?php
include_once('../config/config.php');
include('cliente.php');

$p = new cliente();
$data = $p->getAll();
 
if ( isset ($_GET['id']) && !empty($_GET['id']) ){
    $remove = $p->delete($_GET['id']);
    if ($remove){
        header('Location: '.ROOT.'/cliente/index.php');
    }else{
        $mensaje = '<div class="alert alert-danger" role="alert" > Error al eliminar </div>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php include ('../menu.php')?>
    <div class="container">
        <h2 class="text-center mb-2" > directorioaqua </h2>
        <div class="row">
            <?php
            while( $pt = mysqli_fetch_object($data) ){
                echo "<div class='col-6'>";
                echo "<div class='border border-info p-2'>";
                echo "<h5> $pt->nombres </h5>";
                echo "<h5> $pt->telefono </h5>";
                echo "<h5> $pt->productoqueteinteresa </h5>";
                echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/cliente/edit.php?id=$pt->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/cliente/index.php?id=$pt->id' >Eliminar</a> </div>";

                echo "</div>";
                echo "</div>";
             
            }

            ?>

        </div>
    </div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

        
        </div>
    </div>    
</body>
</html>