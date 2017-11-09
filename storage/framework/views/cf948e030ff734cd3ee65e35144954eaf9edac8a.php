<?php $__env->startSection('content'); ?>

<main role="main" class="container">
    <h1>Sign In</h1>

    <form method="POST" action="/login">


        <?php echo e(csrf_field()); ?>


        <div class="form-group">

            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>

        </div>

        <div class="form-group">

            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"  required>

        </div>

        <button type="submit" class="btn btn-primary">Login</button>


        <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>