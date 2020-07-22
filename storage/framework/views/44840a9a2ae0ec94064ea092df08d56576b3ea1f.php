

<?php $__env->startSection('content'); ?>
<div class="container">
	<h4 class="mt-2">Edit Pegawai</h4>
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

	<form method="post" action="<?php echo e(route('pegawai.update', $pegawai->id_pegawai)); ?>" enctype="multipart/form-data">
	  <?php echo method_field('PUT'); ?>
	  <?php echo csrf_field(); ?>
	  <div class="form-group row">
	  	<label class="col-sm-2 col-form-label">Foto</label>
	  	<div class="col-sm-5">
	  		<div class="custom-file">
			  <input type="file" class="custom-file-input" id="foto" name="foto">
			  <label class="custom-file-label" for="foto">Pilih file...</label>
			</div>
			<img src="<?php echo e(asset('images/'.$pegawai->foto)); ?>" width="150">
	  	</div>
	  </div>

	  <div class="form-group row">
	    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e($pegawai->nama_pegawai); ?>">
	    </div>
	  </div>

	  <div class="form-group row">
	  	<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
	  	<div class="col-sm-4">
	  		<div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="jkl" name="jk" class="custom-control-input" value="L" <?php echo e($l); ?>>
			  <label class="custom-control-label" for="jkl">Laki-laki</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="jkp" name="jk" class="custom-control-input" value="P" <?php echo e($p); ?>>
			  <label class="custom-control-label" for="jkp">Perempuan</label>
			</div>
	  	</div>
	  </div>

	  <div class="form-group row">
	  	<label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>
	  	<div class="col-sm-3">
	  		<input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo e($pegawai->tgl_lahir); ?>">
	  	</div>
	  </div>

	  <div class="form-group row">
	  	<label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
	  	<div class="col-sm-5">
	      <select id="jabatan" class="custom-select" name="jabatan">
	      	<option value=""> -Pilih Jabatan- </option>
	      	<?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        <option value="<?php echo e($j->id_jabatan); ?>"><?php echo e($j->nama_jabatan); ?></option>
	        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	      </select>
	  	</div>	  	
	  </div>

	  <div class="form-group row">
	    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
	    <div class="col-sm-8">
	      <textarea name="keterangan" class="form-control" id="keterangan"><?php echo e($pegawai->keterangan); ?></textarea>
	    </div>
	  </div>
	  
    <div class="col-sm-10 offset-sm-2 pl-2">
      <button type="submit" class="text-white btn btn-info"><i class="fas fa-share-square"></i> Simpan</button>
      <button type="reset" class="text-white btn btn-danger"><i class="fas fa-times-circle"></i> Batal</button>
    </div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\pegawai\resources\views/pegawai/edit.blade.php ENDPATH**/ ?>