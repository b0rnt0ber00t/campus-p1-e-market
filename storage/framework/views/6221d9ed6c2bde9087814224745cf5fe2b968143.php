<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('header'); ?>
<div class="header-body">
  <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
      <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
      <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
          <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('home.index')); ?>">Dashboards</a></li>
        </ol>
      </nav>
    </div>
    <div class="col-lg-6 col-5 text-right">
      <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#modal-create-package">New Package</a>
    </div>

    <!-- Modal modal-create-package -->
    <div class="modal fade" id="modal-create-package" tabindex="-1" aria-labelledby="modal-create-package-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="<?php echo e(route('package.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="modal-header">
              <h5 class="modal-title" id="modal-create-package-label">New Package</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="$0.00">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>

  <?php echo $__env->make('layouts.dashboard.components.response-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Card stats -->
  <div class="row">
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body my-2">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Order</h5>
              <span class="h2 font-weight-bold mb-0"><?php echo e($orders->count()); ?></span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                <i class="fas fa-shopping-cart"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body my-2">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Balance</h5>
              <span class="h2 font-weight-bold mb-0">$<?php echo e(number_format($user->saldo->balance, 2)); ?></span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                <i class="fas fa-dollar-sign"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body my-2">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Purchase</h5>
              <span class="h2 font-weight-bold mb-0"><?php echo e($user->orders->count()); ?></span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                <i class="fas fa-receipt"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body my-2">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Package</h5>
              <span class="h2 font-weight-bold mb-0"><?php echo e($user->packages->count()); ?></span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                <i class="fas fa-code"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-lg-8">
    <?php $__empty_1 = true; $__currentLoopData = $user->packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="card-title"><?php echo e($package->name); ?></div>
          </div>
          <div class="col-lg-3">
            <div class="text-right">$<?php echo e($package->price); ?></div>
          </div>
        </div>
        <textarea cols="30" disabled class="form-control"><?php echo e($package->description); ?></textarea>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="card">
      <div class="card-body">
        <div class="card-title">No Package</div>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <div class="col-lg">
    <div class="card">
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Customer</th>
              <th scope="col">Package</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
              <th scope="row"><?php echo e($loop->iteration); ?></th>
              <td><?php echo e($order->user->name); ?></td>
              <td><?php echo e($order->package->name); ?></td>
              <td>#</td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
              <th scope="row" colspan="4" class="text-center">No Orders</th>
            </tr>
            <?php endif; ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/campus/campus-p1-e-market/resources/views/home/index.blade.php ENDPATH**/ ?>