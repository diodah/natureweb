<?php include 'config.php'; ?>
<?php include 'includes/header.php'; ?>

<main>
    <h2>Test usuarios</h2>
    <?php
    $sql = "SELECT id, nombre FROM usuarios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. "</li>";
        }
        echo "</li>";
    } else {
        echo "0 resultados";
    }
    $conn->close();
    ?>
</main>

<?php include 'includes/footer.php'; ?>