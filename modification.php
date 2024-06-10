<?php
require_once('task.php');

$taskObject = new Task();

if(isset($_POST['modifyTask'])) {
    $taskId = isset($_POST['id']) ? $_POST['id'] : '';
    $taskName = isset($_POST['taskName']) ? $_POST['taskName'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';

    $taskObject->taskName = $taskName;
    $taskObject->status = $status;

    $taskObject->updateTask($taskId);

    echo "Modification effectuee avec succes.";

    header("Location: projet.php");
    exit();
} else {
    echo "Erreur !!";
}
?>
