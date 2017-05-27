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

    <?php echo e(Form::model($article, ["method" => "put", "route" => ['do_update', 'article' => $article->slug]])); ?>

    <?php echo $__env->make('user._article_form', ['btnText' => 'Обновить'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo e(Form::close()); ?>


<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
