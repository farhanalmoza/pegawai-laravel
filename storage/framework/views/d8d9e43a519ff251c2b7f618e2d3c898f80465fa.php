

<?php $__env->startSection('content'); ?>
<div class="container">
    <h4>Data Pegawai</h4>
    <hr>
    <a class="btn btn-success" href="<?php echo e(route('pegawai.create')); ?>"><i class="fas fa-plus"></i> Tambah</a>

    <?php if( $message = Session::get('status') ): ?>
        <div class="alert alert-success mt-3 pb-0">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-striped table-bordered mt-3 pb-0">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Foto</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pgw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th scope="row"><?php echo e($loop->iteration); ?></th>
          <td><img src="<?php echo e(asset('images/'.$pgw->foto)); ?>" width="100" alt=""></td>
          <td><?php echo e($pgw->nama_pegawai); ?></td>
          <td><?php echo e($pgw->jenis_kelamin); ?></td>
          <td><?php echo e($pgw->tgl_lahir); ?></td>
          <td><?php echo e($pgw->nama_jabatan); ?></td>
          <td><?php echo e($pgw->keterangan); ?></td>
          <td>
            <a class="text-white btn btn-sm btn-info" href="<?php echo e(route('pegawai.edit', $pgw->id_pegawai)); ?>"><i class="fa fa-pencil"></i> Edit</a>
            <form action="<?php echo e(route('pegawai.destroy', $pgw->id_pegawai)); ?>" method="post" class="d-inline">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\pegawai\resources\views/pegawai/index.blade.php ENDPATH**/ ?>