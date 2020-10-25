<?php 

include('db.php');

if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO task (titulo, descripcion)VALUES('$title', '$description')";
    $result = mysqli_query($cx, $query);
    if  (!$result){
        die("query Failed");
    }

    $_SESSION['message'] = 'Task Saved';//guarda un mensaje
    $_SESSION['message_type'] = 'success';//guarda un color de bootstrap
    header("location: index.php");
}


?>
