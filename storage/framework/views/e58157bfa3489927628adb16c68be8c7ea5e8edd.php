<?php $__env->startSection('content'); ?>
<section class="projects">
    <div class=" overlay cool-overlay-full-width"></div>
    <div class="projects__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="projects__header">
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <h1 class="section__heading">All Blogs</h1>
            </div>
        </div>

        <div class="projects__cards-flat">

            <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <a href="<?php echo e(route('blogs.show',['id'=>$blog->id])); ?>">
                    <div class="card-flat card">

                        <div class="card-flat__content">
                            <h3><?php echo e($blog->title); ?></h3>

                        </div>
                    </div>
                </a>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div>No Blog Found</div>
                <?php endif; ?>
        </div>


    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Jubaer\portfolio\resources\views/blogs/index.blade.php ENDPATH**/ ?>