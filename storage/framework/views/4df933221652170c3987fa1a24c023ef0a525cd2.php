<div class="form-group">
    <?php echo e(Form::label('title', 'Заголовок')); ?>

    <?php echo e(Form::text('title', NULL, ['class' => 'form-control', 'placeholder' => 'Заголовок'])); ?>

</div>
<div class="form-group">
    <?php echo Form::label('short_description', 'Краткое описание'); ?>

    <?php echo e(Form::textarea('short_description', NULL, ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
    <?php echo Form::label('body', 'Текст статьи'); ?>

    <?php echo e(Form::textarea('body', NULL, ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
    <?php echo Form::label('tag_list','Тэги'); ?>

    <?php echo e(Form::select('tag_list[]', \App\Tag::pluck('name', 'id'), NULL, ['class' => 'form-control', 'multiple'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::file('photo[]', ['multiple'])); ?>


</div>


<button class="btn btn-success btn-lg"><?php echo e(isset($btnText) ? $btnText : 'Создать'); ?></button>