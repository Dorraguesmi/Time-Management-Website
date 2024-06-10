<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addTask'])) {
    require_once('task.php');

    $taskObject = new Task();

    $taskName = isset($_POST['taskName']) ? $_POST['taskName'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';

    $taskObject->taskName = $taskName;
    $taskObject->status = $status;

    $taskObject->insertTask();

    header("Location: projet.php");
    exit();
} else {
    echo "Erreur!!!";
}
?>
