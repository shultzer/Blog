<div class="col-sm-8 blog-main">
    <div class="blog-post">
        <h1 style="color: #1f648b"><?php echo e($u->name); ?></h1>
        <h2 style="color: #1f648b">Публикации пользователя <?php echo e($u->name); ?></h2>
        <?php $__currentLoopData = $u->article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <a href="/article/<?php echo e($articles->slug); ?>"><h3><?php echo e($articles->title); ?></h3></a>
            </div><!-- /.blog-post -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><!-- /.blog-post -->
    <!-- /.blog-post -->
</div><!-- /.blog-main -->
