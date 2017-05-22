<?php echo $__env->make('head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-sm-8 blog-main">

            <div class="blog-post">

                <h2 class="blog-post-title"><?php echo e($article->title); ?></h2>
                <p class="blog-post"><?php echo e($article->updated_at); ?></p>
                <p class="blog-post"><?php echo e($article->body); ?></p>

                <a href="/article/<?php echo e($article->slug); ?>/edit">Редактировать</a>
            </div><!-- /.blog-post -->



    </div><!-- /.blog-main -->
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>