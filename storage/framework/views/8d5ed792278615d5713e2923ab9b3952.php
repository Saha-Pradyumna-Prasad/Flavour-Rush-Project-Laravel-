



<?php $__env->startSection('content'); ?>
<style>
    /* মার্কি স্টাইল */
    .marquee {
        background: #ff6b6b;
        color: white;
        padding: 10px;
        font-weight: bold;
        overflow: hidden;
        white-space: nowrap;
    }
    
    .marquee p {
        display: inline-block;
        animation: marquee 15s linear infinite;
    }
    
    @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }
    
    /* হিরো স্লাইডার */
    .hero-slider {
        height: 500px;
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        margin: 20px 0;
    }
    
    .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1s ease;
        background-size: cover;
        background-position: center;
    }
    
    .slide.active {
        opacity: 1;
    }
    
    .slide-content {
        position: absolute;
        bottom: 50px;
        left: 50px;
        color: white;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
    
    /* ক্যাটাগরি কার্ড */
    .category-card {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        cursor: pointer;
    }
    
    .category-card img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .category-card:hover img {
        transform: scale(1.1);
    }
    
    .category-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0,0,0,0.8));
        color: white;
        padding: 20px;
        text-align: center;
    }
    
    .category-count {
        font-size: 1.2rem;
        font-weight: bold;
    }
</style>

<!-- মার্কি সেকশন -->
<div class="marquee">
    <p>🎉 স্পেশাল অফার! 🎉 অর্ডার করুন ৫০০+ টাকায় ফ্রি ডেলিভারি | 🔥 নিউ আইটেম এসেছে | 🚀 ফাস্ট ডেলিভারি</p>
</div>

<div class="container">
    <!-- হিরো স্লাইডার -->
    <div class="hero-slider" id="heroSlider">
        <?php $__currentLoopData = $sliderFoods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="slide <?php echo e($index == 0 ? 'active' : ''); ?>" 
                 style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo e(asset($food->image)); ?>');">
                <div class="slide-content">
                    <h1><?php echo e($food->name); ?></h1>
                    <p class="lead">শুধু ৳<?php echo e($food->price); ?> - অর্ডার করুন এখনই!</p>
                    <a href="<?php echo e(url('/food/' . $food->category)); ?>" class="btn btn-primary">অর্ডার করুন</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <!-- ওয়েলকাম সেকশন -->
    <div class="text-center my-5">
        <h2>স্বাগতম Flavor Rush এ</h2>
        <p class="lead">আমাদের সাথে খাবারের স্বাদ নিন, যা আপনাবে রাখবে তৃপ্ত</p>
    </div>
    
    <!-- ক্যাটাগরি সেকশন -->
    <div class="row mb-5">
        <div class="col-md-4 mb-4">
            <div class="category-card" onclick="location.href='<?php echo e(url('/food/Burger')); ?>'">
                <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=500" alt="Burger">
                <div class="category-overlay">
                    <h3>🍔 বার্গার</h3>
                    <p class="category-count"><?php echo e($burgerCount); ?> টি আইটেম</p>
                    <span class="btn btn-sm btn-primary">এক্সপ্লোর করুন</span>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="category-card" onclick="location.href='<?php echo e(url('/food/Pizza')); ?>'">
                <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=500" alt="Pizza">
                <div class="category-overlay">
                    <h3>🍕 পিৎজা</h3>
                    <p class="category-count"><?php echo e($pizzaCount); ?> টি আইটেম</p>
                    <span class="btn btn-sm btn-primary">এক্সপ্লোর করুন</span>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="category-card" onclick="location.href='<?php echo e(url('/food/Dessert')); ?>'">
                <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=500" alt="Dessert">
                <div class="category-overlay">
                    <h3>🍰 ডেজার্ট</h3>
                    <p class="category-count"><?php echo e($dessertCount); ?> টি আইটেম</p>
                    <span class="btn btn-sm btn-primary">এক্সপ্লোর করুন</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ফিচার্ড সেকশন -->
    <div class="row bg-light p-5 rounded my-5">
        <div class="col-md-3 text-center">
            <i class="fas fa-truck fa-3x text-primary"></i>
            <h5 class="mt-2">ফ্রি ডেলিভারি</h5>
            <p>৫০০+ টাকায়</p>
        </div>
        <div class="col-md-3 text-center">
            <i class="fas fa-clock fa-3x text-primary"></i>
            <h5 class="mt-2">৩০ মিনিটে ডেলিভারি</h5>
            <p>গ্যারান্টিযুক্ত</p>
        </div>
        <div class="col-md-3 text-center">
            <i class="fas fa-leaf fa-3x text-primary"></i>
            <h5 class="mt-2">হেলদি ফুড</h5>
            <p>প্রিমিয়াম কোয়ালিটি</p>
        </div>
        <div class="col-md-3 text-center">
            <i class="fas fa-headset fa-3x text-primary"></i>
            <h5 class="mt-2">২৪/৭ সাপোর্ট</h5>
            <p>যেকোনো সময়</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    // হিরো স্লাইডার জাভাস্ক্রিপ্ট
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    
    function changeSlide() {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % totalSlides;
        slides[currentSlide].classList.add('active');
    }
    
    // প্রতি ৩ সেকেন্ডে স্লাইড চেঞ্জ হবে
    setInterval(changeSlide, 3000);
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel\Project\Herd\flavor-rush\resources\views\home.blade.php ENDPATH**/ ?>