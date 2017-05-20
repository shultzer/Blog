
    <div class="col-sm-8 blog-main">
<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="blog-post">
            <a href="<?php echo e($article->id); ?>"> <h2 class="blog-post-title"><?php echo e($article->title); ?></h2></a>
            <p class="blog-post"><?php echo e($article->short_description); ?></p>
        </div><!-- /.blog-post -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <nav>
            <ul class="pager">
                <?php echo e($articles->render()); ?>

            </ul>
        </nav>

    </div><!-- /.blog-main -->
