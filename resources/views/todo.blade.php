
<body style="font-family: Courier">
<h1 class="container">Todo List</h1>

<div  class="container">

    <form action="/add-task" method="post" class="form-control">
        <div class="form-inline">
            <label for="exampleInputEmail1">Add task</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1">
            <button class="button-blue">Добавить</button>
        </div>
    </form>

</div>
<hr>

<div  class="container">
    <form action="/del-task" method="post">

        <?php if(!empty($todo)): ?>

        <?php foreach($todo as $task): ?>
        <div class="checkbox">
            <label>

                <input <?= $task->complete ? 'checked' : '' ?>
                       type="checkbox"
                       name="delitem[]"
                       value="<?= $task->id ?>" >

                <?= $task->complete ? '<s>' :''?>
                <?= $task->title ?>
                <?=$task->complete ? '</s>' :''?>
            </label>
        </div>
        <?php endforeach; ?>
        <hr>

        <div class="form-inline">
            <select name="action" class="form-control">
                <option value="">-- Выберите действие --</option>
                <option value="complete">Пометить, как выполненное</option>
                <option value="delete">Удалить</option>

            </select>

            <button class="btn btn-warning" >клац</button>
        </div>
    </form>
</div>

<?php endif; ?>
</body>
</html>
<?php
