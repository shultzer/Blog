<?php echo $__env->make('head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-sm-8 blog-main">

            <div class="blog-post">

                <h2 class="blog-post-title"><?php echo e($article->title); ?></h2>
                <p>Автор <a href="/<?php echo e($article->user->name); ?>/detail"><?php echo e($article->user->name); ?></a></p>
                <p>Добавлено <?php echo e($article->updated_at); ?> </p>

                <p class="blog-post"><?php echo e($article->body); ?></p>
                <p>
                    <?php if(!empty($article->tags)): ?>
                        <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="/tag/<?php echo e($tag->slug); ?>"><span class="label label-info"><?php echo e($tag->name); ?></span></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </p>
                <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
                    <?php if(\Illuminate\Support\Facades\Auth::user()->name == $article->user->name): ?>
                        <a href="/article/<?php echo e($article->slug); ?>/edit">Редактировать</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div><!-- /.blog-post -->



    </div><!-- /.blog-main -->
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>