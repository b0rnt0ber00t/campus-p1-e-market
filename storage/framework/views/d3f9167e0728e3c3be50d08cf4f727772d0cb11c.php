<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>">
        <!-- <img src="<?php echo e(asset('assets/img/brand/dark.png')); ?>" class="navbar-brand-img" alt="..."> -->
        <span class="h1 text-primary"><span class="font-weight-bolder text-danger shadow">E</span>-MARKET</span>
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">

          <!-- Dashboard -->
          <li class="nav-item<?php echo e(request()->routeIs('home.*') ? ' active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('home.index')); ?>">
              <i class="fas fa-tachometer-alt text-primary mr-3"></i>
              <span class="nav-link-text">Dashboards</span>
            </a>
          </li>

          <li class="nav-item<?php echo e(request()->routeIs('order.*') ? ' active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('order.index')); ?>">
              <i class="fas fa-shopping-cart mr-3 text-primary"></i>
              <span class="nav-link-text">Shop</span>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </div>
</nav><?php /**PATH /media/campus/campus-p1-e-market/resources/views/layouts/dashboard/sidenav.blade.php ENDPATH**/ ?>