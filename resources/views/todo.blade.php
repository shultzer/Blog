@include('todo')
<body>
<h1 class="container">Todo List</h1>

<div  class="container">

    <form action="/add-task" method="post" class="form-inline">
        <div class="form-inline">
            <label for="exampleInputEmail1">Add task</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1">
            <button class="btn btn-primary">Добавить</button>
        </div>
    </form>

</div>
<hr>

<div  class="container">
    <form action="/del-task" method="post">
        <?php /** @var \Model\Todo[] $tasks */ ?>
        <?php if(!empty($tasks)): ?>

        <?php foreach($tasks as $task): ?>
        <div class="checkbox">
            <label>

                <input <?= $task->getComplete() ? 'checked' : '' ?>
                       type="checkbox"
                       name="delitem[]"
                       value="<?= $task['id'] ?>" >

                <?= $task->getComplete() ? '<s>' :''?>
                <?= $task->getTitle() ?>
                <?=$task->getComplete() ? '</s>' :''?>
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
