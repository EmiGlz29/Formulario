<?php
require('conexion.php');

// Recibimos los datos del formulario
$correo = $_POST["correo"];
$nombre = $_POST["nombre"];
$fecha = $_POST["fecha_nacimiento"];

try {

    $sql = "INSERT INTO usuario (nombre, Correo, FechaNac) 
            VALUES ('$nombre', '$correo', '$fecha')";
    
    // Utilizamos exec() dado que no se regresan resultados
    $conn->exec($sql);
    
    echo "¡Registro guardado correctamente usando el método del profesor!";
    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<?php
// ... (Aquí iría el código INSERT de arriba) ...

echo "<h2>Lista de todos los registros en la base de datos:</h2>";

try {
    //--- Aplicable a Sentencia SELECT ---//
    $sql = "SELECT * FROM usuario"; 
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Configura los resultados como un arreglo asociativo
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    // $stmt->fetchAll() Obtiene el arreglo asociativo
    foreach ($stmt->fetchAll() as $row) {
        // Implementamos la visualización de los datos
        echo "ID: " . $row['id'] . "<br>";
        echo "nombre: " . $row['nombre'] . "<br>";
        echo "correo: " . $row['correo'] . "<br>";
        echo "Fecha de Nacimiento: " . $row['fechanac'] . "<br>";
        echo "<hr>"; // Una línea separadora entre registros
    }

} catch(PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
}
?>