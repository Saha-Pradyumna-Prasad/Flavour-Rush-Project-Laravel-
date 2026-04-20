




<?php $__env->startSection('content'); ?>
<style>
    /* ========== PROFESSIONAL LOGIN PAGE - PREMIUM RESTAURANT THEME ========== */
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
    
    * {
        font-family: 'Plus Jakarta Sans', 'Hind Siliguri', sans-serif;
    }
    
    .login-wrapper {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 3rem 0;
        position: relative;
    }
    
    /* Animated gradient background */
    .login-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #0F172A 0%, #1E1B4B 50%, #2D1B4E 100%);
        border-radius: 32px;
        z-index: 0;
    }
    
    /* Decorative food pattern overlay */
    .login-wrapper::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.03)" stroke-width="1"><path d="M12 2L15 8H9L12 2Z M12 22L9 16H15L12 22Z M4 12L10 9V15L4 12Z M20 12L14 9V15L20 12Z"/><circle cx="12" cy="12" r="2"/></svg>');
        background-repeat: repeat;
        background-size: 40px;
        opacity: 0.3;
        border-radius: 32px;
        z-index: 0;
    }
    
    .login-container {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 480px;
        margin: 0 auto;
        padding: 0 1rem;
    }
    
    /* Premium Glassmorphism Card */
    .login-card-premium {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(10px);
        border-radius: 40px;
        padding: 2.5rem;
        box-shadow: 0 35px 60px -20px rgba(0, 0, 0, 0.4);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: transform 0.3s ease;
    }
    
    .login-card-premium:hover {
        transform: translateY(-5px);
    }
    
    /* Logo/Brand Section */
    .login-brand {
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .brand-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #FF6B35, #FFB347);
        border-radius: 25px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        box-shadow: 0 12px 25px -8px rgba(255, 107, 53, 0.4);
    }
    
    .brand-icon i {
        font-size: 2.5rem;
        color: white;
    }
    
    .login-brand h2 {
        font-size: 1.8rem;
        font-weight: 800;
        background: linear-gradient(135deg, #1E293B, #3B2A5C);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 0.25rem;
    }
    
    .login-brand p {
        color: #64748B;
        font-size: 0.9rem;
    }
    
    /* Form Styling */
    .form-group-premium {
        margin-bottom: 1.5rem;
    }
    
    .form-label-premium {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 600;
        color: #1E293B;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }
    
    .form-label-premium i {
        color: #FF6B35;
        font-size: 0.9rem;
    }
    
    .input-premium {
        width: 100%;
        padding: 14px 18px;
        border: 2px solid #E2E8F0;
        border-radius: 20px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        background: #F8FAFC;
    }
    
    .input-premium:focus {
        outline: none;
        border-color: #FF6B35;
        background: white;
        box-shadow: 0 0 0 4px rgba(255, 107, 53, 0.1);
    }
    
    .input-premium.is-invalid {
        border-color: #EF4444;
        background: #FEF2F2;
    }
    
    .invalid-feedback-premium {
        color: #EF4444;
        font-size: 0.75rem;
        margin-top: 0.5rem;
        display: block;
    }
    
    /* Checkbox Styling */
    .checkbox-wrapper {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 1.5rem;
    }
    
    .checkbox-wrapper input {
        width: 18px;
        height: 18px;
        accent-color: #FF6B35;
        cursor: pointer;
    }
    
    .checkbox-wrapper label {
        color: #475569;
        font-size: 0.9rem;
        cursor: pointer;
    }
    
    /* Login Button */
    .btn-login-premium {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, #FF6B35, #FFB347);
        border: none;
        border-radius: 30px;
        font-weight: 700;
        font-size: 1rem;
        color: white;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        cursor: pointer;
        box-shadow: 0 8px 18px rgba(255, 107, 53, 0.3);
    }
    
    .btn-login-premium:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(255, 107, 53, 0.4);
        filter: brightness(1.02);
    }
    
    /* Footer Links */
    .login-footer {
        text-align: center;
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid #E2E8F0;
    }
    
    .login-footer p {
        color: #64748B;
        font-size: 0.9rem;
    }
    
    .login-footer a {
        color: #FF6B35;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.2s;
    }
    
    .login-footer a:hover {
        color: #FFB347;
        text-decoration: underline;
    }
    
    /* Demo Info Box */
    .demo-box {
        background: #F1F5F9;
        border-radius: 20px;
        padding: 1rem;
        margin-top: 1.5rem;
        text-align: center;
    }
    
    .demo-box p {
        margin: 0;
        font-size: 0.75rem;
        color: #475569;
    }
    
    .demo-box small {
        display: inline-block;
        margin: 0.25rem 0;
    }
    
    hr {
        margin: 1rem 0;
        border-color: #E2E8F0;
    }
    
    /* Responsive */
    @media (max-width: 576px) {
        .login-card-premium {
            padding: 1.8rem;
        }
        .brand-icon {
            width: 55px;
            height: 55px;
        }
        .brand-icon i {
            font-size: 2rem;
        }
        .login-brand h2 {
            font-size: 1.5rem;
        }
    }
</style>

<div class="login-wrapper">
    <div class="login-container">
        <div class="login-card-premium">
            <!-- Brand Header -->
            <div class="login-brand">
                <div class="brand-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h2>স্বাগতম!</h2>
                <p>Flavor Rush এ লগইন করুন</p>
            </div>
            
            <!-- Login Form - NO BACKEND CODE CHANGED -->
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                
                <!-- Email Field -->
                <div class="form-group-premium">
                    <label class="form-label-premium">
                        <i class="fas fa-envelope"></i> ইমেইল এড্রেস
                    </label>
                    <input type="email" name="email" class="input-premium <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                           value="<?php echo e(old('email')); ?>" required autofocus placeholder="your@email.com">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback-premium"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <!-- Password Field -->
                <div class="form-group-premium">
                    <label class="form-label-premium">
                        <i class="fas fa-lock"></i> পাসওয়ার্ড
                    </label>
                    <input type="password" name="password" class="input-premium <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required placeholder="••••••••">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback-premium"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <!-- Remember Me Checkbox -->
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">মনে রাখুন</label>
                </div>
                
                <!-- Login Button -->
                <button type="submit" class="btn-login-premium">
                    <i class="fas fa-arrow-right-to-bracket"></i> লগইন করুন
                </button>
            </form>
            
            <!-- Footer Links & Demo Info -->
            <div class="login-footer">
                <p>অ্যাকাউন্ট নেই? <a href="<?php echo e(route('register')); ?>">রেজিস্টার করুন</a></p>
                <hr>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
```
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel\Project\Herd\flavor-rush\resources\views/auth/login.blade.php ENDPATH**/ ?>