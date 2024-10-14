<?php
// Cargar el archivo JSON
$jsonFile = 'horseball-2024-2025.json';
$jsonData = file_get_contents($jsonFile);

// Decodificar el JSON en un array asociativo
$data = json_decode($jsonData, true);

// Verificar si los datos fueron decodificados correctamente
if ($data === null) {
    echo "Error al decodificar el JSON.";
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Horseball</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h1>Datos de la Liga de Horseball 2024-2025</h1>

<table>
    <thead>
        <tr>
            <th>Equipo</th>
            <th>Jugadores</th>
            <th>Puntos</th>
            <!-- Añadir más columnas según los datos relevantes que tengas en tu JSON -->
        </tr>
    </thead>
    <tbody>
        <?php
        // Iterar a través de los datos para llenar la tabla
        foreach ($data as $equipo) {
            echo "<tr>";
            echo "<td>" . $equipo['nombre_equipo'] . "</td>";
            echo "<td>" . implode(', ', $equipo['jugadores']) . "</td>";
            echo "<td>" . $equipo['puntos'] . "</td>";
            // Añadir más celdas según los campos que existan en tu JSON
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
