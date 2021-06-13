
<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $ar_anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 22rem;">
            <?php
            if(!empty($agot->foto)) {
            ?>
                <img src="<?php echo e(asset('img')); ?>/<?php echo e($agot->foto); ?>"/>
            <?php
            } else {
            ?>
                <img src="<?php echo e(asset('img')); ?>/kosong.png"/>
            <?php
            }
            ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo e($agot->nama); ?></h5>
                <p class="card-text">
                    Email : <?php echo e($agot->email); ?>

                    <br/>HP : <?php echo e($agot->hp); ?>

                </p>
                <a href="<?php echo e(url('/anggota')); ?>" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelku - FicirHanip\resources\views/anggota/show.blade.php ENDPATH**/ ?>