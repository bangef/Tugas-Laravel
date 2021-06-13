
<?php $__env->startSection('content'); ?>
<?php
    $ar_judul = ['No','ISBN','Judul','Stok','Pengarang','Penerbit','Kategori','Action'];
    $no = 1;
?>
    <h3>Daftar Buku</h3>
    <a class="btn btn-primary btn-md" href="<?php echo e(route('buku.create')); ?>" role="button">Tambah Data</a>
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
            <?php $__currentLoopData = $ar_buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($bk->isbn); ?></td>
                    <td><?php echo e($bk->judul); ?></td>
                    <td><?php echo e($bk->stok); ?></td>
                    <td><?php echo e($bk->nama); ?></td>
                    <td><?php echo e($bk->pgr); ?></td>
                    <td><?php echo e($bk->katgor); ?></td>
                    <td>
                        <form method="POST" action="<?php echo e(route('buku.destroy',$bk->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <a class="btn btn-info" href="<?php echo e(route('buku.show',$bk->id)); ?>"><i class="fas fa-info-circle"></i></a>
                            <a class="btn btn-warning" href="<?php echo e(route('buku.edit',$bk->id)); ?>"><i class="fas fa-user-edit"></i></a>
                            <button class="btn btn-danger" onclick="return confirm('Anda Ingin Menghapus Data Ini?')"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas_laravel_anggakusuma\resources\views/buku/index.blade.php ENDPATH**/ ?>