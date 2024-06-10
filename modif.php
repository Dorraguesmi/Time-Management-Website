<?php
require_once('task.php');

$taskObject = new Task();
$taskId = isset($_GET['id']) ? $_GET['id'] : '';
$taskDetails = $taskObject->getTaskById($taskId);
?>

<form name="taskForm" method="post" action="modification.php">
    <input type="hidden" name="id" value="<?php echo $taskId; ?>"/>
    <label> Task Name</label>
    <input type="text" name="taskName" value="<?php echo $taskDetails['taskName']; ?>"/><br/>
    <label> Status</label>
    <input type="text" name="status" value="<?php echo $taskDetails['status']; ?>"/><br/>
    <input type="submit" value="Modifier" name="modifyTask"/>
</form>
