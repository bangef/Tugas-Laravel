
<?php $__env->startSection('content'); ?>
<?php
    $rs1 = App\Models\Pengarang::all();
    $rs2 = App\Models\Penerbit::all();
    $rs3 = App\Models\Kategori::all();
?>
    <h3>Form Edit Buku</h3>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form method="POST" action="<?php echo e(route('buku.update',$rs->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="form-group">
            <label>ISBN</label>
            <input type="text" name="isbn" value="<?php echo e($rs->isbn); ?>" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" name="judul" value="<?php echo e($rs->judul); ?>" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Tahun Cetak</label>
            <input type="text" name="tahun_cetak" value="<?php echo e($rs->tahun_cetak); ?>" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" value="<?php echo e($rs->stok); ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Pengarang</label>
            <select class="form-control" name="idpengarang">
            <option value="">-- Pilih Pengarang --</option>
            <?php $__currentLoopData = $rs1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pgr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $sel1 = ($pgr->id == $rs->idpengarang) ? 'selected' : '';
            ?>
                <option value="<?php echo e($pgr->id); ?>" <?php echo e($sel1); ?>><?php echo e($pgr->nama); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Penerbit</label>
            <select class="form-control" name="idpenerbit" required>
            <option value="">-- Pilih Penerbit --</option>
            <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pnb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $sel2 = ($pnb->id == $rs->idpenerbit) ? 'selected' : '';
            ?>
                <option value="<?php echo e($pnb->id); ?>" <?php echo e($sel2); ?>><?php echo e($pnb->nama); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Kategori</label><br/>
            <?php $__currentLoopData = $rs3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $katgor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $cek = ($katgor->id == $rs->idkategori) ? 'checked' : '';
            ?>
                <input type="radio" name="idkategori" 
                value="<?php echo e($katgor->id); ?>" <?php echo e($cek); ?> required/> <?php echo e($katgor->nama); ?> &nbsp;
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="form-group">
                <label>Foto Pengarang</label>
                <input type="text" name="cover" value="<?php echo e($rs->cover); ?>" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary" name="proses">Edit</button>
            <a href="<?php echo e(url('/buku')); ?>" class="btn btn-danger">Cancel</a>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel8_HaniAulia\resources\views/buku/form_edit.blade.php ENDPATH**/ ?>