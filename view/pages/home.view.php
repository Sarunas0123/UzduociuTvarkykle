<html>
<?php require "view\_partials\head.view.php"?>
<?php use TaskManager\Task;?>
<?php use TaskManager\DB;?>
<body>
<?php $connection = DB::connect();?>
<?php $tasks = new Task($connection);?>
<div class="tableBox">
    <table class="table">
        <thead>
        <tr>
            <th scope="c  ol">#</th>
            <th scope="col">Subject</th>
            <th scope="col">Priority</th>
            <th scope="col">Due Date</th>
            <th scope="col">Status</th>
            <th scope="col">Percent Completed</th>
            <th scope="col">Modified on</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($tasks->allTasks() as $task): ?>
        <tr>
            <th scope="row"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                </svg></th>
            <td><?=$task['subject']?></td>
            <?php if($task['priority']=="svarbu"):?>
            <td class="btn-danger"><?=$task['priority']?></td>
            <?php endif;?>
            <?php if($task['priority']=="neskubu"):?>
            <td class="btn-danger"><?=$task['priority']?></td>
            <?php endif;?>
            <?php if($task['priority']=="nesvarbu"):?>
                <td class="btn-danger"><?=$task['priority']?></td>
            <?php endif;?>
            <td> </td>
            <td><?php if ($task['status']==0):?>
                    In progress
                <?php endif?>
                <?php if ($task['status']==1):?>
                    Complete
                <?php endif?></td>
            <td><div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div> </td>
            <td><?=$task['dueDate']?></td>
            <td><a href="complete-task/<?=$task['id'];?>">Atlikta</a></td>
            <td><a href="delete-task/<?=$task['id'];?>">Pasalinti</a></td>
        </tr>

        <?php endforeach;?>
        </tbody>
    </table>

</div>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
