
<?php $__env->startSection('content'); ?>
<?php
    $ar_judul = ['No','Nama','Email','HP','Foto','Action'];
    $no = 1;
?>
    <h3>Daftar Anggota</h3>
    <a class="btn btn-primary btn-md" href="<?php echo e(route('anggota.create')); ?>" role="button">Tambah Data</a>
    <br/>
    <table class="table table-striped">
        <thead>
            <tr>
                <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th><?php echo e($jud); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $ar_anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($agot->nama); ?></td>
                    <td><?php echo e($agot->email); ?></td>
                    <td><?php echo e($agot->hp); ?></td>
                    <td width="15%" align="center">
                        <?php
                        if(!empty($agot->foto)) {
                        ?>
                            <img src="<?php echo e(asset('img')); ?>/<?php echo e($agot->foto); ?>" width="50%" />
                        <?php
                        } else {
                        ?>
                            <img src="<?php echo e(asset('img')); ?>/kosong.png" width="50%" />
                        <?php
                        }
                        ?>
                    </td>
                    <td>
                        <form method="POST" action="<?php echo e(route('anggota.destroy',$agot->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <a class="btn btn-info" href="<?php echo e(route('anggota.show',$agot->id)); ?>"><i class="fas fa-info-circle"></i></a>
                            <a class="btn btn-warning" href="<?php echo e(route('anggota.edit',$agot->id)); ?>"><i class="fas fa-user-edit"></i></a>
                            <button class="btn btn-danger" onclick="return confirm('Anda Ingin Menghapus Data Ini?')"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas_laravel_anggakusuma\resources\views/anggota/index.blade.php ENDPATH**/ ?>