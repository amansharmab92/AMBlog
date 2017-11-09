<div class="blog-post">


    <h2 class="blog-post-title">
        <a href="/blog/<?php echo e($blog->id); ?>">
            <?php echo e($blog->title); ?>

        </a>
    </h2>

    <p class="blog-post-meta"><?php echo e($blog->user->name); ?>,  <?php echo e($blog->created_at->toFormattedDateString()); ?></p>

    <p><?php echo e($blog->body); ?></p>

</div><!-- /.blog-post -->

<hr>
