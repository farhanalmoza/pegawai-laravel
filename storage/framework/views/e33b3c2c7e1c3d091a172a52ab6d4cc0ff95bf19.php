

<?php $__env->startSection('content'); ?>
<div class="container">
	<h4 class="mt-2">Tambah Jabatan</h4>
	<hr>

	<?php if( $errors->any() ): ?>
		<div class="alert alert-danger pb-0">
			<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  <li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
	<?php endif; ?>

	<form method="post" action="<?php echo e(route('jabatan.store')); ?>">
	  <?php echo csrf_field(); ?>
	  <div class="form-group row">
	    <label for="nama" class="col-sm-2 col-form-label">Nama Jabatan</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e(old('nama')); ?>">
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo e(old('keterangan')); ?>">
	    </div>
	  </div>
	  
    <div class="col-sm-10 offset-md-2">
      <button type="submit" class="text-white btn btn-info"><i class="fas fa-share-square"></i> Simpan</button>
      <button type="reset" class="text-white btn btn-danger"><i class="fas fa-times-circle"></i> Batal</button>
    </div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\pegawai\resources\views/jabatan/create.blade.php ENDPATH**/ ?>