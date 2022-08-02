<?php $__env->startSection('content'); ?>
<section class="blog">
    <div class="project__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="project__header">
            <a href="<?php echo e(route('blogs.index')); ?>"><span class="material-icons back-button">keyboard_backspace</span></a>
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <span class="heading__subtext subtext">Back</span>
                <h4 class="section__heading"><?php echo e($blog->title); ?></h4>
            </div>
        </div>
        <div class="project">
            <div class="project__container">

                    <div class="card-flat__content">
                        <span>
                            <?php echo e($blog->body); ?>

                        </span>

                    </div>


            </div>
        </div>



    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Jubaer\portfolio\resources\views/blogs/show.blade.php ENDPATH**/ ?>