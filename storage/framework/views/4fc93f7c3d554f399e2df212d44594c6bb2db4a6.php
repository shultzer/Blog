<?php echo $__env->make('head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <?php echo e(Form::model($article, ["method" => "put", "route" => ['do_update', 'article' => $article->slug]])); ?>

    <?php echo $__env->make('user._article_form', ['btnText' => 'Обновить'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo e(Form::close()); ?>


<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
