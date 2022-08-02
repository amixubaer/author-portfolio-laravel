<?php $__env->startSection('content'); ?>
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
                <a href="<?php echo e(route('projects.show',['id'=>$project->id])); ?>">
                    <div class="projects__card flex flex-column align-items-flex-start justify-content-flex-start">
                        <img src="<?php echo e($project->image_url); ?>" class="cool-box-shadow" />
                        <h3><?php echo e($project->title); ?></h3>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="projects-cta__container flex flex-row justify-content-center align-items-center">
            <a href="projects/index" class="projects-cta see-more">See all</a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Jubaer\portfolio-main\resources\views/landing/index.blade.php ENDPATH**/ ?>