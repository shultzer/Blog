
    <div class="col-sm-8 blog-main">
<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="blog-post">

            <?php $__currentLoopData = $article->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php ($thumbarr[] = $photo->thumbnails); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <img src="images/<?php echo e($thumbarr[0]); ?>">
            <a href="/article/<?php echo e($article->slug); ?>"> <h2 class="blog-post-title"><?php echo e($article->title); ?></h2></a>
            <p class="blog-post"><?php echo e($article->short_description); ?></p>

        </div><!-- /.blog-post -->
    <?php unset($thumbarr)?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <nav>
            <ul class="pager">
                <?php echo e($articles->render()); ?>

            </ul>
        </nav>

    </div><!-- /.blog-main -->
