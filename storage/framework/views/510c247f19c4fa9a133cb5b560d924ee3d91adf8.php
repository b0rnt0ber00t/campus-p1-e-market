<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
      <!-- <img src="<?php echo e(asset('assets/img/brand/light.png')); ?>"> -->
      <span class="h1 text-white"><span class="font-weight-bolder text-danger">E</span>-MARKET</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="<?php echo e(url('/')); ?>">
              <!-- <img src="<?php echo e(asset('assets/img/brand/dark.png')); ?>"> -->
              <span class="h1 text-primary"><span class="font-weight-bolder text-danger shadow">E</span>-MARKET</span>
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="<?php echo e(route('home.index')); ?>" class="nav-link">
            <span class="nav-link-inner--text">Dashboard</span>
          </a>
        </li>
      </ul>
      <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
              <i class="fab fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Twitter">
              <i class="fab fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Star us on Github">
              <i class="fab fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>
        <li class="nav-item d-none d-lg-block ml-lg-4">
          <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-neutral btn-icon">
            <span class="nav-link-inner--text">Sign in</span>
          </a>
        </li>
        <li class="nav-item d-none d-lg-block ml-lg-4">
          <a href="<?php echo e(route('register')); ?>" class="btn btn-neutral btn-icon">
            <span class="nav-link-inner--text">Sign up</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav><?php /**PATH /media/campus/campus-p1-e-market/resources/views/layouts/auth/topbar.blade.php ENDPATH**/ ?>