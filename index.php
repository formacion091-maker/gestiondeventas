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

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
    <div class="card">
        <h3><?php echo htmlspecialchars($row['nombre']); ?></h3>
        <p><strong>Código:</strong> <?php echo htmlspecialchars($row['codigo']); ?></p>
        <p><strong>Marca:</strong> <?php echo htmlspecialchars($row['marca']); ?></p>
        <p><?php echo htmlspecialchars($row['descripcion']); ?></p>
        <p><strong>$<?php echo htmlspecialchars($row['precio']); ?></strong></p>

        <a href="galeria.php?id=<?php echo urlencode($row['id']); ?>">
            <button>Ver Galería</button>
        </a>
    </div>
<?php
    }
} else {
    echo '<p>No hay productos disponibles.</p>';
}
?>
</div>

</body>
</html>