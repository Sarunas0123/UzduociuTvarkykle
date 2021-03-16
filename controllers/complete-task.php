<?php
use TaskManager\Request;
use TaskManager\DB;
use TaskManager\Task;

$id = intval(basename(Request::uri()));
$connection = DB::connect();
$tasks = new Task($connection);
$tasks->setComplete($id);
?>