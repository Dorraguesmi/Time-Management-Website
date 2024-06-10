<?php

class Task
{
    public $taskName;
    public $status;

    public function __construct()
    {
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    public function displayTask()
    {
        echo "Task: " . $this->taskName . "<br>";
        echo "Status: " . $this->status . "<br><br>";
    }

    public function insertTask()
    {
        require_once('connexion.php');
        $connect = new connexion();
        $pdo = $connect->connectbase();
        $req = "INSERT INTO projet (taskName, status) VALUES ('$this->taskName', '$this->status')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }

    public function getAllTasks()
    {
        require_once('connexion.php');
        $connect = new connexion();
        $pdo = $connect->connectbase();
        $req = "SELECT * FROM projet";
        $res = $pdo->query($req) or print_r($pdo->errorInfo());
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTaskById($taskId)
    {
        require_once('connexion.php');
        $connect = new connexion();
        $pdo = $connect->connectbase();
        $req = "SELECT * FROM projet WHERE id='$taskId'";
        $res = $pdo->query($req);
        $row = $res->fetch() or print_r($pdo->errorInfo());
        return $row;
    }

    public function updateTask($taskId)
    {
        require_once('connexion.php');
        $connect = new connexion();
        $pdo = $connect->connectbase();
        $req = "UPDATE projet SET taskName='$this->taskName', status='$this->status' WHERE id='$taskId'";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }

    public function deleteTask($taskId)
    {
        require_once('connexion.php');
        $connect = new connexion();
        $pdo = $connect->connectbase();
        $req = "DELETE FROM projet WHERE id='$taskId'";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
}
?>
