<?php
use TaskManager\DB;
use TaskManager\Task;
use TaskManager\Validation;

if(isset($_POST['send'])){
    if (empty(Validation::validate($_POST))){
        $connection = DB::connect();
        $task = new Task($connection);
        $task->createTask($_POST);
    }
    else {
        echo "<script type='text/javascript'>alert('Neteisingai ivesti duomenys!');window.location.href = \"add-task\";</script>";
        }
}else {
    require 'view/pages/add-task.view.php';
}
