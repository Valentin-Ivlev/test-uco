<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Employees</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="<?php echo e(asset('libs/jQuery/jquery-3.3.1.min.js')); ?>" type="text/javascript"></script>
    <?php echo $__env->yieldPushContent('style'); ?>
</head>
<body>
<div id="app">
    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>
</body>
</html>

<?php /**PATH /home/laravel-test-2/web/laravel-test-2.ln3.tempurl.info/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>