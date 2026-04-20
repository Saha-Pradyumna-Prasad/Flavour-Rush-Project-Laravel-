<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="google" content="notranslate">
    <title>Flavor Rush - প্রিমিয়াম ফুড ডেলিভারি</title>
    
    <!-- Bootstrap 5 + Icons + Professional Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* professional color palette & global styles */
        :root {
            --primary-dark: #1E1E2F;
            --primary-gradient-start: #4361EE;
            --primary-gradient-end: #7209B7;
            --secondary-accent: #F72585;
            --soft-bg: #F8FAFC;
            --card-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08), 0 1px 2px rgba(0, 0, 0, 0.02);
            --transition-default: all 0.25s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: var(--soft-bg);
            color: #1A1E2B;
            line-height: 1.5;
        }
        
        /* premium navbar with depth */
        .navbar {
            background: linear-gradient(105deg, #0B1120 0%, #19223E 100%);
            padding: 0.9rem 0;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07);
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        
        .navbar-brand {
            font-size: 1.9rem;
            font-weight: 800;
            letter-spacing: -0.3px;
            background: linear-gradient(135deg, #FFFFFF, #C084FC);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent !important;
            transition: var(--transition-default);
        }
        
        .navbar-brand i {
            background: none;
            -webkit-background-clip: unset;
            background-clip: unset;
            color: #C084FC;
            margin-right: 6px;
        }
        
        .navbar-nav .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            margin: 0 0.25rem;
            padding: 0.6rem 1rem;
            border-radius: 40px;
            transition: var(--transition-default);
            font-size: 0.95rem;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link:focus {
            background: rgba(255, 255, 255, 0.12);
            color: white !important;
            transform: translateY(-1px);
        }
        
        .dropdown-menu {
            background: #FFFFFF;
            border: none;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border-radius: 20px;
            padding: 0.7rem 0;
            margin-top: 0.6rem;
        }
        
        .dropdown-item {
            font-weight: 500;
            padding: 0.6rem 1.5rem;
            transition: var(--transition-default);
            border-radius: 12px;
            margin: 0 6px;
        }
        
        .dropdown-item:hover {
            background: #F1F5F9;
            color: var(--primary-gradient-start);
            transform: translateX(4px);
        }
        
        /* modern alert styling */
        .alert {
            border: none;
            border-radius: 20px;
            padding: 1rem 1.5rem;
            font-weight: 500;
            backdrop-filter: blur(2px);
            box-shadow: 0 5px 12px rgba(0,0,0,0.05);
        }
        
        .alert-success {
            background: #E3F9EE;
            color: #0A6E4A;
            border-left: 4px solid #2DC653;
        }
        
        .alert-danger {
            background: #FEE9E6;
            color: #B91C1C;
            border-left: 4px solid #EF233C;
        }
        
        /* card hover effect - professional */
        .card {
            border: none;
            border-radius: 28px;
            background: white;
            box-shadow: var(--card-shadow);
            transition: var(--transition-default);
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 40px -12px rgba(0, 0, 0, 0.2);
        }
        
        .btn-primary {
            background: linear-gradient(95deg, var(--primary-gradient-start), var(--primary-gradient-end));
            border: none;
            padding: 0.7rem 1.6rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.2s;
            box-shadow: 0 4px 8px rgba(67, 97, 238, 0.25);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            filter: brightness(1.03);
            box-shadow: 0 12px 20px rgba(67, 97, 238, 0.35);
        }
        
        /* premium footer redesign - clean & minimal with social icons only */
        .footer {
            background: #0F172A;
            color: #E2E8F0;
            padding: 3rem 0 2rem;
            margin-top: 5rem;
            border-top: 1px solid rgba(255,255,255,0.05);
            font-family: 'Inter', sans-serif;
        }
        
        .footer-brand {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, #FFFFFF, #C084FC);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
            margin-bottom: 0.5rem;
        }
        
        .footer-brand i {
            background: none;
            -webkit-background-clip: unset;
            background-clip: unset;
            color: #C084FC;
        }
        
        .footer .footer-description {
            color: #94A3B8;
            font-size: 0.9rem;
            max-width: 350px;
            margin: 0.75rem auto 1.5rem auto;
        }
        
        /* social icon group - premium circular style */
        .social-links-footer {
            display: flex;
            justify-content: center;
            gap: 1.8rem;
            margin: 1.5rem 0 1.8rem;
        }
        
        .social-icon-footer {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 52px;
            height: 52px;
            background: rgba(255, 255, 255, 0.06);
            border-radius: 60px;
            font-size: 1.8rem;
            transition: all 0.25s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            color: #E2E8F0;
            text-decoration: none;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255,255,255,0.08);
        }
        
        .social-icon-footer:hover {
            background: linear-gradient(145deg, #4361EE, #7209B7);
            transform: translateY(-6px) scale(1.02);
            color: white;
            box-shadow: 0 12px 22px rgba(67, 97, 238, 0.35);
            border-color: transparent;
        }
        
        .footer hr {
            background-color: rgba(255,255,255,0.08);
            width: 80px;
            margin: 1.5rem auto;
            opacity: 0.6;
        }
        
        .powered-text {
            font-size: 0.85rem;
            letter-spacing: 0.3px;
            color: #7E8A98;
        }
        
        .powered-text a {
            color: #C084FC;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition-default);
        }
        
        .powered-text a:hover {
            color: white;
            text-decoration: underline;
        }
        
        /* responsive */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.5rem;
            }
            .social-icon-footer {
                width: 48px;
                height: 48px;
                font-size: 1.6rem;
            }
            .social-links-footer {
                gap: 1.2rem;
            }
        }
        
        /* main content spacing */
        main {
            min-height: 65vh;
        }
    </style>
    
    
</head>
<body>

<!-- ========== NAVBAR ========== -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
            <i class="fas fa-bolt"></i> Flavor Rush
        </a>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">
                        <i class="fas fa-home me-1"></i> হোম
                    </a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-utensils me-1"></i> ক্যাটাগরি
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo e(url('/food/Burger')); ?>">🍔 বার্গার</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/food/Pizza')); ?>">🍕 পিৎজা</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/food/Dessert')); ?>">🍰 ডেজার্ট</a></li>
                    </ul>
                </li>
                
                <?php if(auth()->guard()->check()): ?>
                    <?php if(auth()->user()->role == 'admin'): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-chart-line me-1"></i> অ্যাডমিন ড্যাশবোর্ড
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('admin.foods')); ?>">
                                <i class="fas fa-pizza-slice me-1"></i> ফুড ম্যানেজ
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('user.dashboard')); ?>">
                                <i class="fas fa-user me-1"></i> আমার ড্যাশবোর্ড
                            </a>
                        </li>
                    <?php endif; ?>
                    
                    <li class="nav-item">
                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-link nav-link" style="border: none; background: none;">
                                <i class="fas fa-sign-out-alt me-1"></i> লগআউট
                                
                            </button>
                        </form>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">
                            <i class="fas fa-sign-in-alt me-1"></i> লগইন
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>">
                            <i class="fas fa-user-plus me-1"></i> রেজিস্টার
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- alert messages (laravel session) - untouched backend logic -->
<div class="container mt-4">
    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i> <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    
    <?php if(session('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-triangle me-2"></i> <?php echo e(session('error')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
    
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
</div>

<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>

<!-- ========== PROFESSIONAL MINIMAL FOOTER - ONLY SOCIAL ICONS (FB, IG, GITHUB) + POWERED BY ========== -->
<footer class="footer">
    <div class="container text-center">
        <!-- Brand / Logo -->
        <div class="mb-2">
            <span class="footer-brand">
                <i class="fas fa-bolt"></i> Flavor Rush
            </span>
        </div>
        <p class="footer-description mx-auto">
            স্বাদ, গতি এবং নির্ভরযোগ্যতা — প্রিমিয়াম ফুড ডেলিভারি এক্সপেরিয়েন্স।
        </p>
        
        <!-- Social Media Links: Facebook, Instagram, GitHub ONLY -->
        <div class="social-links-footer">
            <a href="https://www.facebook.com/saha.pradyumna.prasad" target="_blank" rel="noopener noreferrer" class="social-icon-footer" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/ankur_200308/" target="_blank" rel="noopener noreferrer" class="social-icon-footer" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://github.com/Saha-Pradyumna-Prasad" target="_blank" rel="noopener noreferrer" class="social-icon-footer" aria-label="GitHub">
                <i class="fab fa-github"></i>
            </a>
        </div>
        
        <!-- subtle divider -->
        <hr>
        
        <!-- Powered by Dev.Ankur (exactly as requested) -->
        <div class="powered-text">
            Powered by <a href="#" target="_blank" rel="noopener noreferrer">Dev.Ankur</a>
        </div>
        
        <!-- tiny copyright line - clean & minimal -->
        <div class="mt-3">
            <small class="text-secondary opacity-75">&copy; <?php echo e(date('Y')); ?> Flavor Rush. All rights reserved.</small>
        </div>
    </div>
</footer>

<!-- Scripts (Bootstrap + jQuery + Alert Auto-hide) - NO BACKEND CODE ALTERED -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH E:\Laravel\Project\Herd\flavor-rush\resources\views/layouts/app.blade.php ENDPATH**/ ?>