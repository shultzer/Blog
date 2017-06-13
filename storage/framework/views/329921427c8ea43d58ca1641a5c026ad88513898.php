<?php echo $__env->make('head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="col-sm-8 blog-main">

    <div class="blog-post">

        <h2 class="blog-post-title"><?php echo e($article->title); ?></h2>
        <p>Автор <a href="/<?php echo e($article->user->name); ?>/detail"><?php echo e($article->user->name); ?></a></p>
        <p>Добавлено <?php echo e($article->updated_at); ?> </p>

        <?php $__currentLoopData = $article->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="blog-post-title"><img src="/images/<?php echo e($photo->photo); ?>"></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <p class="blog-post"><?php echo $article->body; ?></p>
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
                <a href="/article/<?php echo e($article->slug); ?>/delete">Удалить</a>
            <?php endif; ?>
        <?php endif; ?>


        <h3>Комментарии</h3>

        <?php if($article->comments !== NULL): ?>
            <?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h4 class="media-heading"><?php echo e($comment->author); ?>:</h4>
                <div class="well">
                    <div class="media-body">
                        <p><?php echo e($comment->body); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <?php endif; ?>
        <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>



            <h3>Добавить комментарий</h3>
            <div class="well">

                    <?php echo e(Form::open(["route" => ['addcomment', 'article' => $article->slug]])); ?>

                    <div class="form-group">
                        <?php echo e(Form::hidden('author', Auth::user()->name, ['class' => 'form-control'])); ?>

                        <div class="form-group">
                            <?php echo Form::label('body', 'Текст комментария'); ?>

                            <?php echo e(Form::textarea('body', NULL, ['class' => 'form-control'])); ?>

                        </div>
                        <button class="btn btn-primary btn-lg">Написать комментарий</button>
                    </div>
            </div>
            <?php echo e(Form::close()); ?>


        <?php endif; ?>
    </div><!-- /.blog-post -->


</div><!-- /.blog-main -->
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>