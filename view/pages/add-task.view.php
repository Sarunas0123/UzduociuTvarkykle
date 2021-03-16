<!doctype html>
<?php require "view\_partials\head.view.php"?>
<body>
<section>
    <h2>Add Task</h2>
    <form method="post">
        <input type="text" name="subject" placeholder="iveskite uzduotis pavadinima">
        <select name="priority" >
            <option value="svarbu">Svarbu</option>
            <option value="nesvarbu">Nesvarbu</option>
            <option value="skubu">Skubu</option>
            <option value="neskubu">Neskubu</option>
        </select>
        <label>Atlikimo data</label>
        <input type="date" name="dueDate">
        <input type="submit" name="send">
    </form>
</section>
</body>
