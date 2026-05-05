<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tienda de Ropa</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>Productos</h1>

<div class="contenedor">
<?php
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
?>
    <div class="card">
        <h3><?php echo $row['nombre']; ?></h3>
        <p><strong>Código:</strong> <?php echo $row['codigo']; ?></p>
        <p><strong>Marca:</strong> <?php echo $row['marca']; ?></p>
        <p><?php echo $row['descripcion']; ?></p>
        <p><strong>$<?php echo $row['precio']; ?></strong></p>

        <a href="galeria.php?id=<?php echo $row['id']; ?>">
            <button>Ver Galería</button>
        </a>
    </div>
<?php } ?>
</div>

</body>
</html>