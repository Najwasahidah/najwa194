
<?php $__env->startSection('container'); ?>
  <h1 class="mt-4">Product</h1>
  <?php if(session()->has('deleted')): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
     Your product has been <strong><?php echo e(session('deleted')); ?></strong>!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php endif; ?>
  <table class="table table-striped table-hover mt-3">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Platform</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>

      </tr>

    </thead>
    <tbody>
      <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr style="line-height: 2.5rem">
        <th scope="row"><?php echo e($item ->id); ?></th>
        <td><?php echo e($item ->product); ?></td>
        <td><?php echo e($item ->platform->nama); ?></td>
        <td><?php echo e($item ->price); ?></td>
        <td><?php echo e($item ->quantity); ?></td>
        <td>
          <a href="/delete/<?php echo e($item->id); ?>" class="btn btn-outline-danger btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="1rem" height="1rem" fill="#b81c2b"><!--! Font Awesome Pro 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"/></svg>
          </a>
          
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\najwa194\resources\views/product.blade.php ENDPATH**/ ?>