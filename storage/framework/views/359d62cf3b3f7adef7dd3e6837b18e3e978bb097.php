
<div class="col-sm-8 blog-main">

    <div class="blog-post">
        <h3><?php echo e($user); ?></h3>

        <?php $__currentLoopData = $u; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $item->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="blog-post">
                    <a href="/article/<?php echo e($articles->slug); ?>"> <h2 class="blog-post-title"><?php echo e($articles->title); ?></h2></a>
                </div><!-- /.blog-post -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div><!-- /.blog-post -->

    <!-- /.blog-post -->



</div><!-- /.blog-main -->
