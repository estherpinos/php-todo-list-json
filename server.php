<?php

$json_string= file_get_contents("todo-list.json");
$list= json_decode($json_string,true);


header('Content-Type: application-json');

echo json_encode($list);



?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene la nueva cosa desde el formulario
    $nueva_cosa = $_POST['new_thing'];
    
    // Lee el contenido actual del archivo JSON
    $archivo = 'todo-list.json';
    $contenido_actual = file_get_contents($archivo);
    
    // Decodifica el contenido JSON en un arreglo asociativo
    $data = json_decode($contenido_actual, true);
    
    // Agrega la nueva cosa al arreglo de cosas por hacer
    $data= $nueva_cosa;
    
    // Convierte el arreglo de datos actualizado a JSON
    $nuevo_contenido = json_encode($data, JSON_PRETTY_PRINT);
    
    // Guarda el nuevo contenido en el archivo JSON
    file_put_contents($archivo, $nuevo_contenido);
    
    // Redirige de nuevo a la página principal u otra página de tu elección
    header("Location: index.html"); // Asegúrate de ajustar la URL de la redirección
}
?>



