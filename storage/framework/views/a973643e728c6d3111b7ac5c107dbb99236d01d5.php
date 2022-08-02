<?php $__env->startSection('content'); ?>
<section class="project">
    <div class="project__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="project__header">
            <a href="<?php echo e(route('books.index')); ?>"><span class="material-icons back-button">keyboard_backspace</span></a>
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <span class="heading__subtext subtext">Back</span>
                <h4 class="section__heading"><?php echo e($project->title); ?></h4>
            </div>
        </div>
        <div class="project">
            <div class="project__container">
                    <img src="<?php echo e($project->image_url); ?>" class="cool-box-shadow" />

                    <div class="card-flat__content">
                        <h3><?php echo e($project->publish); ?></h3>
                        <span>
                            <?php echo e($project->body); ?>

                        </span>
                    </div>


            </div>
        </div>



    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Jubaer\portfolio\resources\views/books/show.blade.php ENDPATH**/ ?>
