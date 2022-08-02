<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link rel="stylesheet" href="/css/state.css" type="text/css">
    <link rel="stylesheet" href="/css/layout.css" type="text/css">
    <link rel="stylesheet" href="/css/theme.css" type="text/css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>Rowling</title>
</head>
<body>
<div class="header flex flex-row justify-content-space-between">
    <a href="/"><div class="logo">J.K. Rowling</div></a>

    <nav class=" flex flex-row justify-content-space-around align-items-center">
        <a href="/" class="<?php echo e(Request::is('/')?'current':''); ?> text-link">Home</a>
        <a href="/projects/index" class="<?php echo e(Request::is('projects/index')?'current-page':''); ?> text-link">Books</a>
    </nav>


</div>
    <?php echo $__env->yieldContent('content'); ?>

    <div class="footer flex flex-row justify-content-space-between">
        <nav class=" flex flex-row justify-content-space-around align-center">
            <a href="/" class="<?php echo e(Request::is('/')?'current':''); ?> text-link">Home</a>
            <a href="/projects/index" class="<?php echo e(Request::is('projects/index')?'current-page':''); ?> text-link">Books</a>

        </nav>
            <a href="/"><div class="logo">J.K. Rowling</div></a>
        </div>
</body>
</html>
<?php /**PATH C:\Jubaer\portfolio\resources\views/layouts/main_layout.blade.php ENDPATH**/ ?>