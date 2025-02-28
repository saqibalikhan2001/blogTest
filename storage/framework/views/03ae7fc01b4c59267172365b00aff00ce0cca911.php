<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('resources/css/app.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('resources/js/app.js')); ?>" defer></script>
    <?php /*@vite(['resources/css/app.css', 'resources/js/app.js']) */?>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(route('posts.index')); ?>">Blog Test</a>
            </div>
        </nav>
    </header>

    <!-- Content -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container d-lg-flex justify-content-between">
            <span class="text-light">Blog Test (c) <?php echo date("Y"); ?></span>
        </div>
    </footer>
</body>
</html>
<?php /**PATH /home/saqib/sites/blogTest/resources/views/layouts/app.blade.php ENDPATH**/ ?>