<?php 

include ("db.php");
if (isset($_POST['guardar_tarea'])){
    
$title= $_POST['title'];
$description= $_POST['description'];

$query ="INSERT INTO tareas(titulo, descripcion) VALUES('$title','$description')";
$result = mysqli_query($conn,$query);

if(!$result){
die("Query Failed");

}


$_SESSION['message'] = 'tarea guardada exitosamente';
$_SESSION['message_type'] = 'success';


header("Location: index.php");
}
   
?>