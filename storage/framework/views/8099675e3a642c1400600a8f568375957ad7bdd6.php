<div class="row justify-content-center">
  <div class="col-lg">
    <?php if(session()->has('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="fas fa-thumbs-up"></i></span>
        <span class="alert-text"><?php echo e(session()->get('success')); ?></span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php elseif(session()->has('failed')): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="fas fa-thumbs-down"></i></span>
        <span class="alert-text"><?php echo e(session()->get('success')); ?></span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
  </div>
</div><?php /**PATH /media/campus/campus-p1-e-market/resources/views/layouts/dashboard/components/response-message.blade.php ENDPATH**/ ?>