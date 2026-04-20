



<?php $__env->startSection('content'); ?>
<style>
    .login-container {
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        margin: 50px 0;
        padding: 50px;
    }
    
    .login-card {
        background: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 450px;
    }
    
    .login-header {
        text-align: center;
        margin-bottom: 30px;
    }
    
    .login-header h2 {
        color: #333;
        font-weight: bold;
    }
    
    .form-control {
        border-radius: 10px;
        padding: 12px;
    }
    
    .btn-login {
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        font-weight: bold;
    }
</style>

<div class="container">
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <i class="fas fa-hamburger fa-3x text-primary"></i>
                <h2>লগইন করুন</h2>
                <p class="text-muted">Flavor Rush এ স্বাগতম</p>
            </div>
            
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                
                <div class="mb-3">
                    <label class="form-label">
                        <i class="fas fa-envelope"></i> ইমেইল এড্রেস
                    </label>
                    <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                           value="<?php echo e(old('email')); ?>" required autofocus>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">
                        <i class="fas fa-lock"></i> পাসওয়ার্ড
                    </label>
                    <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember">
                    <label class="form-check-label" for="remember">মনে রাখুন</label>
                </div>
                
                <button type="submit" class="btn btn-primary btn-login">
                    <i class="fas fa-sign-in-alt"></i> লগইন করুন
                </button>
            </form>
            
            <div class="text-center mt-3">
                <p>অ্যাকাউন্ট নেই? <a href="<?php echo e(route('register')); ?>">রেজিস্টার করুন</a></p>
                <hr>
                <p class="text-muted">
                    <small>ডেমো অ্যাডমিন: admin@flavorrush.com / password123</small><br>
                    <small>ডেমো ইউজার: user@example.com / password123</small>
                </p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel\Project\Herd\flavor-rush\resources\views\auth\login.blade.php ENDPATH**/ ?>