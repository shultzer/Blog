<?php echo $__env->make('head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="row">

    <?php echo $__env->make('body', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <h4>О сайте</h4>
            <p>Блог на Bootstrap и Laravel</p>
        </div>
        <div class="sidebar-module">
            <h4>Пользователи</h4>
            <ol class="list-unstyled">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li><a href="/<?php echo e($user->name); ?>/detail"><?php echo e($user->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
