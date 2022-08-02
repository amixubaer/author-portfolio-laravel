<?php $__env->startSection('content'); ?>
<section class="projects">
    <div class=" overlay cool-overlay-full-width"></div>
    <div class="projects__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="projects__header">
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <h1 class="section__heading">All Books</h1>
            </div>
        </div>

        <div class="projects__cards-flat">
            <div class="cards-flat__container">

            <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <a href="<?php echo e(route('books.show',['id'=>$project->id])); ?>">
                    <div class="card-flat card">
                        <?php if($project->image_url): ?>
                        <img src="<?php echo e($project->image_url); ?>" class="cool-box-shadow" />
                        <?php else: ?>
                        <span>Not Available</span>
                        <?php endif; ?>

                        <div class="card-flat__content">
                            <h3><?php echo e($project->title); ?></h3>
                            <div>Published at: <span style="color:crimson;font-family:cursive;"><?php echo e($project->publish); ?> </span> </div>
                        </div>
                    </div>
                </a>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div>No Books Found</div>
                <?php endif; ?>
            </div>
        </div>


    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Jubaer\portfolio\resources\views/books/index.blade.php ENDPATH**/ ?>
