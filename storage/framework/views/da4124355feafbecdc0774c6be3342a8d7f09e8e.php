<?php echo $__env->make('head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="col-sm-8 blog-main">

    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $item->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="blog-post">
                <a href="/article/<?php echo e($articles->slug); ?>"> <h2 class="blog-post-title"><?php echo e($articles->title); ?></h2></a>
            </div><!-- /.blog-post -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




</div><!-- /.blog-main -->
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>