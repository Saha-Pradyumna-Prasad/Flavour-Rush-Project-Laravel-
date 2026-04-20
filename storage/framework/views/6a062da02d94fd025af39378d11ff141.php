


<?php $__env->startSection('content'); ?>
<style>
    /* ========== PROFESSIONAL REGISTER PAGE - PREMIUM RESTAURANT THEME ========== */
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
    
    * {
        font-family: 'Plus Jakarta Sans', 'Hind Siliguri', sans-serif;
    }
    
    .register-wrapper {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 3rem 0;
        position: relative;
    }
    
    /* Animated gradient background */
    .register-wrapper::before {
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
    .register-wrapper::after {
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
    
    .register-container {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 520px;
        margin: 0 auto;
        padding: 0 1rem;
    }
    
    /* Premium Glassmorphism Card */
    .register-card-premium {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(10px);
        border-radius: 40px;
        padding: 2.5rem;
        box-shadow: 0 35px 60px -20px rgba(0, 0, 0, 0.4);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: transform 0.3s ease;
    }
    
    .register-card-premium:hover {
        transform: translateY(-5px);
    }
    
    /* Logo/Brand Section */
    .register-brand {
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
    
    .register-brand h2 {
        font-size: 1.8rem;
        font-weight: 800;
        background: linear-gradient(135deg, #1E293B, #3B2A5C);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 0.25rem;
    }
    
    .register-brand p {
        color: #64748B;
        font-size: 0.9rem;
    }
    
    /* Form Styling */
    .form-group-premium {
        margin-bottom: 1.25rem;
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
    
    /* Register Button */
    .btn-register-premium {
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
        margin-top: 0.5rem;
    }
    
    .btn-register-premium:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(255, 107, 53, 0.4);
        filter: brightness(1.02);
    }
    
    /* Footer Links */
    .register-footer {
        text-align: center;
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid #E2E8F0;
    }
    
    .register-footer p {
        color: #64748B;
        font-size: 0.9rem;
    }
    
    .register-footer a {
        color: #FF6B35;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.2s;
    }
    
    .register-footer a:hover {
        color: #FFB347;
        text-decoration: underline;
    }
    
    /* Responsive */
    @media (max-width: 576px) {
        .register-card-premium {
            padding: 1.8rem;
        }
        .brand-icon {
            width: 55px;
            height: 55px;
        }
        .brand-icon i {
            font-size: 2rem;
        }
        .register-brand h2 {
            font-size: 1.5rem;
        }
        .input-premium {
            padding: 12px 16px;
        }
    }
</style>

<div class="register-wrapper">
    <div class="register-container">
        <div class="register-card-premium">
            <!-- Brand Header -->
            <div class="register-brand">
                <div class="brand-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <h2>একাউন্ট তৈরি করুন</h2>
                <p>Flavor Rush এ রেজিস্টার করে অর্ডার করুন</p>
            </div>
            
            <!-- Registration Form - NO BACKEND CODE CHANGED -->
            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
                
                <!-- Name Field -->
                <div class="form-group-premium">
                    <label class="form-label-premium">
                        <i class="fas fa-user"></i> পুরো নাম
                    </label>
                    <input type="text" name="name" class="input-premium <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                           value="<?php echo e(old('name')); ?>" required autofocus placeholder="আপনার পুরো নাম">
                    <?php $__errorArgs = ['name'];
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
                           value="<?php echo e(old('email')); ?>" required placeholder="your@email.com">
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
unset($__errorArgs, $__bag); ?>" required placeholder="মিনিমাম ৬ ডিজিট">
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
                    <small style="color: #94A3B8; font-size: 0.7rem; margin-top: 0.25rem; display: block;">
                        <i class="fas fa-info-circle"></i> পাসওয়ার্ড কমপক্ষে ৬ ক্যারেক্টার হতে হবে
                    </small>
                </div>
                
                <!-- Confirm Password Field -->
                <div class="form-group-premium">
                    <label class="form-label-premium">
                        <i class="fas fa-lock"></i> পাসওয়ার্ড কনফার্ম করুন
                    </label>
                    <input type="password" name="password_confirmation" class="input-premium" required placeholder="আবার পাসওয়ার্ড দিন">
                </div>
                
                <!-- Register Button -->
                <button type="submit" class="btn-register-premium">
                    <i class="fas fa-user-plus"></i> রেজিস্টার করুন
                </button>
            </form>
            
            <!-- Footer Links -->
            <div class="register-footer">
                <p>ইতিমধ্যে একাউন্ট আছে? <a href="<?php echo e(route('login')); ?>">লগইন করুন</a></p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel\Project\Herd\flavor-rush\resources\views/auth/register.blade.php ENDPATH**/ ?>