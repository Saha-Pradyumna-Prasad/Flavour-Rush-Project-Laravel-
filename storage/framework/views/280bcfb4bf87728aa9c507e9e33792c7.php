<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="google" content="notranslate">
    <title>Flavor Rush - ফুড ডেলিভারি</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=English:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            /* font-family: 'Hind Siliguri', sans-serif; */
        }
        
        body {
            background: #f8f9fa;
        }
        
        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 0;
        }
        
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: white !important;
        }
        
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
        }
        
        .footer {
            background: #2d3748;
            color: white;
            padding: 3rem 0 2rem;
            margin-top: 4rem;
        }
        
        .alert {
            border-radius: 10px;
        }
        
        .card {
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
        }
    </style>
    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
     

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
            <i class="fas fa-hamburger"></i> Flavor Rush
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">
                        <i class="fas fa-home"></i> হোম
                    </a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-utensils"></i> ক্যাটাগরি
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
                                <i class="fas fa-chart-line"></i> অ্যাডমিন ড্যাশবোর্ড
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('admin.foods')); ?>">
                                <i class="fas fa-pizza-slice"></i> ফুড ম্যানেজ
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('user.dashboard')); ?>">
                                <i class="fas fa-user"></i> আমার ড্যাশবোর্ড
                            </a>
                        </li>
                    <?php endif; ?>
                    
                    <li class="nav-item">
                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-link nav-link" style="border: none;">
                                <i class="fas fa-sign-out-alt"></i> লগআউট
                            </button>
                        </form>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">
                            <i class="fas fa-sign-in-alt"></i> লগইন
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>">
                            <i class="fas fa-user-plus"></i> রেজিস্টার
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-3">
    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle"></i> <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
    
    <?php if(session('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle"></i> <?php echo e(session('error')); ?>

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

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4><i class="fas fa-hamburger"></i> Flavor Rush</h4>
                <p>স্বাদে ও মানে সেরা - Flavor Rush এ পেতে পারেন আপনার প্রিয় খাবার।</p>
            </div>
            <div class="col-md-4">
                <h5>দ্রুত লিংক</h5>
                <ul class="list-unstyled">
                    <li><a href="<?php echo e(route('home')); ?>">হোম</a></li>
                    <li><a href="<?php echo e(url('/food/Burger')); ?>">বার্গার</a></li>
                    <li><a href="<?php echo e(url('/food/Pizza')); ?>">পিৎজা</a></li>
                    <li><a href="<?php echo e(url('/food/Dessert')); ?>">ডেজার্ট</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>যোগাযোগ</h5>
                <p><i class="fas fa-phone"></i> +880 1234 567890</p>
                <p><i class="fas fa-envelope"></i> info@flavorrush.com</p>
                <p><i class="fas fa-map-marker-alt"></i> ঢাকা, বাংলাদেশ</p>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <p>&copy; 2024 Flavor Rush - সর্বস্বত্ব সংরক্ষিত</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 5000);
</script>

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH E:\Laravel\Project\Herd\flavor-rush\resources\views\layouts\app.blade.php ENDPATH**/ ?>