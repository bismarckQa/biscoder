<?php
$dsn = "mysql:host=localhost;dbname=radiocultura";
$username = "root";
$password = "";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Consulta SQL para obtener la cantidad total de registros
$total_query = $conn->query("SELECT COUNT(*) as total FROM nacionales");
$total_row = $total_query->fetch(PDO::FETCH_ASSOC);
$total_rows = $total_row['total'];

// Número de registros por página
$limit = 3;

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
$query = $conn->query("SELECT Id, fuente, extracto FROM nacionales LIMIT $start, $limit");

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    echo $row['Id'] . " " . $row['fuente'] . " " . $row['extracto'] . "<br>";
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
