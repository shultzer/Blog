<div class="form-group">

    <?php echo e(Form::text('title', NULL, ['class' => 'form-control', 'placeholder' => 'Заголовок'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::textarea('short_description', NULL, ['class' => 'form-control', 'placeholder' => 'Краткое описание'])); ?>

</div>
<div class="form-group">
    <?php echo Form::label('body', 'Текст статьи'); ?>

    <?php echo e(Form::textarea('body', NULL, ['class' => 'form-control'])); ?>

    <script>
        CKEDITOR.replace('body');
    </script>
</div>
<div class="form-group">
    <?php echo Form::label('tag_list','Тэги'); ?>

    <?php echo e(Form::select('tag_list[]', \App\Tag::pluck('name', 'id'), NULL, ['class' => 'form-control', 'multiple'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::file('photo[]', ['multiple'])); ?>


</div>


<button class="btn btn-primary btn-lg"><?php echo e(isset($btnText) ? $btnText : 'Создать'); ?></button>