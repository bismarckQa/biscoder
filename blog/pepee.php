<?php
require "../conec/conexion.php";

// Consulta SQL para obtener la cantidad total de registros
$total_query = $conexion ->query("SELECT COUNT(*) as total FROM blog");
$total_row = $total_query->fetch(PDO::FETCH_ASSOC);
$total_rows = $total_row['total'];

// Número de registros por página
$limit = 1;

// Página actual
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

// Total de páginas
$total_pages = ceil($total_rows / $limit);

// Inicio de la consulta SQL
$start = ($page - 1) * $limit;

// Consulta SQL para obtener los datos de los usuarios
$query = $conexion ->query("SELECT Id, cat, title FROM blog LIMIT $start, $limit");

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    echo $row['Id'] . " " . $row['cat'] . " " . $row['title'] . "<br>";
}

// Botones de paginación
echo "<br><br>";
if ($page > 1) {
    echo "<a href='?page=" . ($page - 1) . "'>Anterior</a> ";
}

$start_page = max($page - 2, 1);
$end_page = min($page + 3, $total_pages);
for ($i=$start_page; $i<=$end_page; $i++) {
    if ($i == $page) {
        echo "<strong>" . $i . "</strong> ";
    } else {
        echo "<a href='?page=" . $i . "'>" . $i . "</a> ";
    }
}

if ($page < $total_pages) {
    echo "<a href='?page=" . ($page + 1) . "'>Siguiente</a>";
}
?>
