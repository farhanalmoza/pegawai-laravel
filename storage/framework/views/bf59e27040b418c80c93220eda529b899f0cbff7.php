

<?php $__env->startSection('content'); ?>
<div class="container">
    <h4>Data Jabatan</h4>
    <hr>
    <a class="btn btn-success" href="<?php echo e(route('jabatan.create')); ?>"><i class="fas fa-plus"></i> Tambah</a>

    <?php if( $message = Session::get('status') ): ?>
        <div class="alert alert-success mt-3 pb-0">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-striped table-bordered mt-3 pb-0">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama jabatan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jbt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th scope="row"><?php echo e($loop->iteration); ?></th>
          <td><?php echo e($jbt->nama_jabatan); ?></td>
          <td>
            <a class="text-white btn btn-sm btn-info" href="<?php echo e(route('jabatan.edit', $jbt->id_jabatan)); ?>"><i class="fa fa-pencil"></i> Edit</a>
            <form action="<?php echo e(route('jabatan.destroy', $jbt->id_jabatan)); ?>" method="post" class="d-inline">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\pegawai\resources\views/jabatan/index.blade.php ENDPATH**/ ?>