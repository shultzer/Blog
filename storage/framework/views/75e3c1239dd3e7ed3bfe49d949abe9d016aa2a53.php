<?php echo $__env->make('head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-sm-8 blog-main">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
    <form action="add" method="post" class="form-group">
        <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="<?php echo e('_token'); ?>">

        <label for="title">Заголовок</label>
        <input class="form-control" id="title" name="title">


        <label for="short_description">Короткое описание</label>
        <textarea class="form-control"  class="form-group" id="short_description" name="short_description"></textarea><br>

        <label for="body" >Текст статьи</label>
        <textarea  rows="10" class="form-control"  class="form-group" id="body" name="body"></textarea>
<br>

        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="checkbox" class="checkbox" name="<?php echo e($tag->name); ?>" value="<?php echo e($tag->name); ?>">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <input class="btn btn-primary" type="submit" value="Опубликовать">

    </form>

    </div>
   <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>