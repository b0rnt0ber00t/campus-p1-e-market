<?php $__env->startSection('greeting'); ?>
<div class="container">
    <div class="header-body text-center mb-7">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
        <h1 class="text-white"><?php echo e(__('Welcome!')); ?></h1>
        <p class="text-lead text-white"><?php echo e(__('Use these awesome forms to login or create new account in your project for free.')); ?></p>
        </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-lg-5 col-md-7">
    <div class="card bg-secondary border-0 mb-0">
        <div class="card-header bg-transparent pb-5">
        <div class="text-muted text-center mt-2 mb-3"><small><?php echo e(__('Sign in with')); ?></small></div>
            <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon"><img src="<?php echo e(asset('assets/img/icons/common/github.svg')); ?>"></span>
                    <span class="btn-inner--text"><?php echo e(__('Github')); ?></span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon"><img src="<?php echo e(asset('assets/img/icons/common/google.svg')); ?>"></span>
                    <span class="btn-inner--text"><?php echo e(__('Google')); ?></span>
                </a>
            </div>
        </div>
        <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
                <small><?php echo e(__('Or sign in with credentials')); ?></small>
            </div>
            <form role="form" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input
                            class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="email"
                            type="email"
                            name="email"
                            value="<?php echo e(old('email')); ?>"
                            required
                            placeholder="Email"
                            autocomplete="email"
                            autofocus />  
                    </div>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger text-sm" role="alert">
                            <?php echo e($message); ?>

                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input
                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="password"
                            type="password"
                            name="password"
                            required
                            placeholder="Password"
                            autocomplete="current-password" />
                    </div>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger text-sm" role="alert">
                            <?php echo e($message); ?>

                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input
                    class="custom-control-input"
                    id="customCheckLogin"
                    type="checkbox"
                    name="remember"
                    <?php echo e(old('remember') ? 'checked' : ''); ?> />
                  <label class="custom-control-label" for="customCheckLogin">
                    <span class="text-muted"><?php echo e(__('Remember me')); ?></span>
                  </label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4"><?php echo e(__('Sign in')); ?></button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <a href="<?php echo e(route('password.request')); ?>" class="text-light"><small><?php echo e(__('Forgot password?')); ?></small></a>
        </div>
        <div class="col-6 text-right">
            <a href="<?php echo e(route('register')); ?>" class="text-light"><small><?php echo e(__('Create new account')); ?></small></a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/campus/campus-p1-e-market/resources/views/auth/login.blade.php ENDPATH**/ ?>