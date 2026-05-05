<?php include("conexion.php"); 

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id = $id";
$producto = $conn->query($sql)->fetch_assoc();

$sql_img = "SELECT * FROM imagenes WHERE producto_id = $id";
$imagenes = $conn->query($sql_img);

<!DOCTYPE html>
<html>
<head>
    <title>Galería</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h2><?php echo $producto['nombre']; ?></h2>
<p><strong>Marca:</strong> <?php echo $producto['marca']; ?></p>
<p><?php echo $producto['descripcion']; ?></p>

<div class="galeria">
<?php while($img = $imagenes->fetch_assoc()) { ?>
    <img src="<?php echo $img['ruta']; ?>" alt="">

</div>

<a href="index.php"><button>Volver</button></a>

</body>
</html>
<?php } ?>