<div class="form-group">
    <?php echo e(Form::label('title', 'Заголовок')); ?>

    <?php echo e(Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Заголовок'])); ?>

</div>
<div class="form-group">
    <?php echo Form::label('short_description'); ?>

    <?php echo e(Form::textarea('short_description', null, ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
    <?php echo Form::label('body'); ?>

    <?php echo e(Form::textarea('body', null, ['class' => 'form-control'])); ?>

</div>

<button class="btn btn-success btn-lg"><?php echo e(isset($btnText) ? $btnText : 'Создать'); ?></button>
