<?php echo $__env->make('head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row">

    <?php echo $__env->make('profiles.detail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
        
        <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
            </ol>
        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>