<div class="header-body">
  <div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
      <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
      <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
          <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
          <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
          <li class="breadcrumb-item active" aria-current="page">Default</li>
        </ol>
      </nav>
    </div>
    <div class="col-lg-6 col-5 text-right">
      <a href="#" class="btn btn-sm btn-neutral">New</a>
      <a href="#" class="btn btn-sm btn-neutral">Filters</a>
    </div>
  </div>
  <!-- Card stats -->
  <div class="row">
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body my-2">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Balance</h5>
              <span class="h2 font-weight-bold mb-0">${{ number_format($user->saldo->balance, 2) }}</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
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
              <h5 class="card-title text-uppercase text-muted mb-0">Cart</h5>
              <span class="h2 font-weight-bold mb-0">2,356</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
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
              <h5 class="card-title text-uppercase text-muted mb-0">Purchase</h5>
              <span class="h2 font-weight-bold mb-0">924</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
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
              <h5 class="card-title text-uppercase text-muted mb-0">Service</h5>
              <span class="h2 font-weight-bold mb-0">49,65%</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                <i class="fas fa-code"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>