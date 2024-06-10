<?php
require_once('task.php');
$taskObject = new Task();

$taskId = isset($_POST['id']) ? $_POST['id'] : ''; 
$taskObject->deleteTask($taskId);

header("Location: projet.php"); 
?>
