<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>AMBlogs</title>
</head>
<body>

    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul>
        <h1><?php echo e($blog->title); ?></h1></br>
        <h2><?php echo e($blog->body); ?></h2>
    </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>