<div class="col-sm-8 blog-main">

    <div class="blog-post">
        <h2 style="color: #1f648b"><?php echo e($user); ?></h2>

        <?php $__currentLoopData = $u; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php $__currentLoopData = $item->article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <h2 style="color: #1f648b">Публикации пользователя <?php echo e($user); ?></h2>
                    <a href="/article/<?php echo e($articles->slug); ?>"><h3><?php echo e($articles->title); ?></h3></a>
                </div><!-- /.blog-post -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div><!-- /.blog-post -->

    <!-- /.blog-post -->


</div><!-- /.blog-main -->
