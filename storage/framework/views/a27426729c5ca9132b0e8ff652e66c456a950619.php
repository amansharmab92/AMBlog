<?php $__env->startSection('content'); ?>

<main role="main" class="container">

    <div class="row">

        <div class="col-sm blog-main">

            <h2 class="blog-post-title">

                <?php echo e($blog->title); ?>


            </h2>


            <p class="blog-post-meta">

                <?php echo e($blog->user->name); ?>, <?php echo e($blog->created_at->toFormattedDateString()); ?>


            </p>


            <p>

                <?php echo e($blog->body); ?>

            </p>


        </div><!-- /.blog-post -->
        <?php if($blog->user->id == auth()->user()->id && !$edit): ?>
        <div class="col-sm-1 ml-auto">
            <a href="/blog/<?php echo e($blog->id); ?>/edit" id="edit-link" ">Edit</a>
        </div>
        <?php endif; ?>





    </div>

    <?php if($blog->user->id == auth()->user()->id && $edit): ?>
    <div id="edit-blog">
        <form method="POST" action="/blog/<?php echo e($blog->id); ?>">

            <?php echo e(method_field('PATCH')); ?>

            <?php echo e(csrf_field()); ?>


            <div class="form-group">

                <textarea class="form-control" rows="5" id="body" name="body" required><?php echo e($blog->body); ?></textarea>

            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/blog/<?php echo e($blog->id); ?>" id="edit-link" ">Cancel</a>

        </form>

        <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <?php elseif($edit): ?>
    <div class="form-group">
        <div class="alert-danger">
            <ul>
                You are not allowed to edit blogs created by other users.
            </ul>
        </div>
    </div>
    <?php endif; ?>
    <hr>

    <div class="frame-comments">

        <b>Comments</b>

        <ul class="col-sm-9 ml-auto list-group">

            <?php $__currentLoopData = $blog->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li class="list-group-item">

                    <article>

                        <?php echo e($comment->body); ?>


                    </article>

                    <small>

                        <?php echo e($comment->user->name); ?>, <?php echo e($comment->created_at->diffForHumans()); ?>


                    </small>

                </li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>

    </div>
    <hr>

    <form method="POST" action="/blog/<?php echo e($blog->id); ?>/comment">


        <?php echo e(csrf_field()); ?>


        <div class="form-group">

            <textarea class="form-control" rows="5" id="body" name="body" placeholder="Add Comment" required></textarea>

        </div>

        <button type="submit" class="btn btn-primary">Add Comment</button>

    </form>

</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>