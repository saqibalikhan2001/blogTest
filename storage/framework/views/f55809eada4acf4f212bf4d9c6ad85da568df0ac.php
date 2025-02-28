<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Add Post</h1>
        <section class="mt-3">
            <form method="post" action="<?php echo e(route('posts.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <!-- Error messages when data is invalid -->
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="card p-3">
                    <label for="floatingInput">Title</label>
                    <input class="form-control" type="text" name="title">

                    <label for="floatingTextArea">Content</label>
                    <textarea class="form-control" name="description" id="floatingTextarea" cols="30" rows="5"></textarea>

                    <label for="formFile" class="form-label">Add Image</label>
                    <input class="form-control" type="file" name="image">
                </div>

                <button class="btn btn-secondary m-3">Save</button>
            </form>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saqib/sites/blogTest/resources/views/posts/create.blade.php ENDPATH**/ ?>