<h2>Daftar Jabatan</h2>
<table border="1" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama Jabatan</th>
			<th>Keterangan</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jbt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($jbt->id_jabatan); ?></td>
			<td><?php echo e($jbt->nama_jabatan); ?></td>
			<td><?php echo e($jbt->keterangan); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table><?php /**PATH E:\xampp\htdocs\pegawai\resources\views/jabatan.blade.php ENDPATH**/ ?>