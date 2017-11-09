<?php $__env->startSection('content'); ?>

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">AM Blog</h1>
    </div>
</div>


<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('blogs.blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div><!-- /.blog-main -->

    </div><!-- /.row -->

</main><!-- /.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>