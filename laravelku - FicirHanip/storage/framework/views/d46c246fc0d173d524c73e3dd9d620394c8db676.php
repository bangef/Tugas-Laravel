
<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $ar_buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 19rem;">
            <?php
            if(!empty($bk->cover)) {
            ?>
                <img src="<?php echo e(asset('img')); ?>/<?php echo e($bk->cover); ?>"/>
            <?php
            } else {
            ?>
                <img src="<?php echo e(asset('img')); ?>/kosong.png"/>
            <?php
            }
            ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo e($bk->judul); ?></h5>
                <p class="card-text">
                    ISBN : <?php echo e($bk->isbn); ?>

                    <br/>Tahun Cetak : <?php echo e($bk->tahun_cetak); ?>

                    <br/>Stok : <?php echo e($bk->stok); ?>

                    <br/>Pengarang : <?php echo e($bk->nama); ?>

                    <br/>Penerbit : <?php echo e($bk->pgr); ?>

                    <br/>Kategori : <?php echo e($bk->katgor); ?>

                </p>
                <a href="<?php echo e(url('/buku')); ?>" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas_laravel_anggakusuma\resources\views/buku/show.blade.php ENDPATH**/ ?>