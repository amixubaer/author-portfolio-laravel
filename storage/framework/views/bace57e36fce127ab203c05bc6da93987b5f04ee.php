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
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Rowling</title>
</head>
<body>
<div class="header flex flex-row justify-content-space-between">
    <a href="/"><div class="logo">J.K. Rowling</div></a>

    <nav class=" flex flex-row justify-content-space-around align-items-center">
       <a href="/user-login" class="<?php echo e(Request::is('/user-login')?'current':''); ?> text-link">Login</a>
    </nav>


</div>

<section class="landing-banner">
    <div class="landing-banner__container flex flex-column align-items-center justify-content-space-between">
        <div class="landing-banner__profile flex flex-column align-items-center">
            <img src="images/profile.jpg" class="profile-image"/>
            <span>Hi, It's Joanne Kathleen Rowling</span>
        </div>

        <div class="landing-banner__banner">
            <div class="landing-banner__banner__banner-text">
                Get to know about all my books from here
            </div>
        </div>


        <div class="landing-banner__scroll-down">
            <span class="material-icons">keyboard_arrow_down</span>
        </div>
    </div>
</section>

<section class="projects">
    <div class="overlay cool-overlay-right-aligned"></div>
    <div class="projects__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="projects__header">
            <div class="heading__container flex flex-column align-items-center justify-content-flex-start">
                <h1 class="section__heading">Popular Books</h1>
            </div>
        </div>

        <div class="projects__cards">
            <div class="projects__cards__container">
                <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <a href="<?php echo e(route('books.show',['id'=>$project->id])); ?>">
                    <div class="project__container flex flex-column align-items-stretch justify-content-space-around">
                        <img src="<?php echo e($project->image_url); ?>" class="cool-box-shadow" />
                        <h3><?php echo e($project->title); ?></h3>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="projects-cta__container flex flex-row justify-content-center align-items-center">
            <a href="books/index" class="projects-cta see-more">See all</a>
        </div>
    </div>
</section>

<div class="footer flex flex-row justify-content-space-between">
    <div class="copyright"> © All Rights Reserved by Author | 2022
</div>

</body>
</html>
<?php /**PATH C:\Jubaer\portfolio\resources\views/home.blade.php ENDPATH**/ ?>