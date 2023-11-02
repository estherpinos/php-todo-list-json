<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //prende la frase che ho scritto al form di php
    $new_thing = $_POST['new_thing'];
    
   
    $archivo = 'todo-list.json';
    $content = file_get_contents($archivo);
    
    
    $data = json_decode($content, true);
    
    // Aggiunge il nuovo oggeto con la frase che ho scritto nel form
    $new_object = array("text" => $new_thing, "done" => false);
    $data[] = $new_object;
    
 
    $new_content = json_encode($data, JSON_PRETTY_PRINT);
    
    // Aggiunge il nuovo contenuto al file json
    file_put_contents($archivo, $new_content);
    
   
    header("Location: index.html"); 
}
?>


