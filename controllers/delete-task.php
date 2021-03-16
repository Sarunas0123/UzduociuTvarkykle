<?php
use TaskManager\DB;
use TaskManager\Task;

use TaskManager\Request;

$id = intval(basename(Request::uri()));
$connection = DB::connect();
$tasks = new Task($connection);
$tasks->deleteTask($id);
