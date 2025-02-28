<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="titlebar">
            <a class="btn btn-secondary float-end mt-3" href="<?php echo e(route('posts.create')); ?>" role="button">Add Post</a>
            <h1>Posts listing</h1>
        </div>

        <hr>

        <!-- Success message if a post is created successfully -->
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>

    <!-- Display posts if they exist -->
        <?php if(count($posts) > 0): ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <?php if(substr($post->image, -4) == '.pdf' || substr($post->image, -5) == '.docx' || substr($post->image, -4) == '.doc'){?>
                                    <embed
                                        src="<?php echo e(asset('images/posts/'.$post->image)); ?>"
                                        style="width:100px; height:100px;"
                                        frameborder="0"
                                    >
                                <?php }else{ ?>
                                    <img class="img-fluid" style="max-width:50%;" src="<?php echo e(asset('images/posts/'.$post->image)); ?>" alt="">
                                <?php } ?>
                            </div>
                            <div class="col-10">
                                <h4><?php echo e($post->title); ?></h4>
                            </div>
                        </div>
                        <p><?php echo e($post->content); ?></p>
                        <hr>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <p>No Posts found</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saqib/sites/blogTest/resources/views/posts/index.blade.php ENDPATH**/ ?>