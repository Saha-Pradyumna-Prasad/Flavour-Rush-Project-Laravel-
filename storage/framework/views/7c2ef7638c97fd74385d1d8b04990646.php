

<?php $__env->startSection('content'); ?>
<style>
    /* ========== FRESH PROFESSIONAL DESIGN - DARK LUXURY THEME ========== */
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
    
    :root {
        --bg-dark: #0A0C15;
        --bg-card: #11131F;
        --accent-primary: #FF6B35;
        --accent-secondary: #FFB347;
        --accent-glow: rgba(255, 107, 53, 0.3);
        --text-light: #F5F7FE;
        --text-muted: #8B92B0;
        --border-glow: rgba(255, 107, 53, 0.15);
        --gradient-hero: linear-gradient(135deg, #FF6B35 0%, #FFB347 100%);
    }
    
    * {
        font-family: 'Plus Jakarta Sans', 'Hind Siliguri', sans-serif;
    }
    
    /* Announcement Bar - Premium */
    .announcement-bar {
        background: #0F111A;
        border-bottom: 1px solid rgba(255, 107, 53, 0.2);
        padding: 15px 0;
        overflow: hidden;
        position: relative;
        z-index: 100;
    }
    
    .ticker {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 40px;
        white-space: nowrap;
        animation: tickerScroll 20s linear infinite;
    }
    
    .ticker-item {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        color: #FFD6B0;
        font-weight: 500;
        font-size: 0.9rem;
        letter-spacing: 0.3px;
    }
    
    .ticker-item i {
        color: #FF6B35;
        font-size: 1rem;
    }
    
    .ticker-badge {
        background: rgba(255, 107, 53, 0.15);
        padding: 3px 12px;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        color: #FFB347;
    }
    
    @keyframes tickerScroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    
    /* Hero Slider - Glassmorphism Style */
    .hero-wrapper {
        margin: 2rem 0 1.5rem;
        border-radius: 32px;
        overflow: hidden;
        position: relative;
    }
    
    .hero-slider {
        height: 560px;
        position: relative;
        border-radius: 32px;
    }
    
    .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        background-size: cover;
        background-position: center;
        border-radius: 32px;
    }
    
    .slide.active {
        opacity: 1;
    }
    
    .slide-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(10, 12, 21, 0.75) 0%, rgba(10, 12, 21, 0.4) 100%);
        border-radius: 32px;
    }
    
    .slide-content {
        position: absolute;
        bottom: 12%;
        left: 8%;
        right: 8%;
        z-index: 10;
        animation: slideUp 0.7s ease;
    }
    
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .slide-tag {
        background: var(--gradient-hero);
        display: inline-block;
        padding: 6px 18px;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 1rem;
        color: #0A0C15;
    }
    
    .slide-content h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: white;
        margin-bottom: 0.75rem;
        text-shadow: 0 2px 15px rgba(0,0,0,0.3);
        letter-spacing: -0.02em;
    }
    
    .slide-price {
        font-size: 1.5rem;
        font-weight: 700;
        color: #FFB347;
        margin-bottom: 1.25rem;
    }
    
    .slide-price span {
        font-size: 2rem;
        font-weight: 800;
        color: #FF6B35;
    }
    
    .btn-order {
        background: var(--gradient-hero);
        border: none;
        padding: 14px 36px;
        border-radius: 60px;
        font-weight: 700;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 8px 20px rgba(255, 107, 53, 0.35);
        color: #0A0C15;
    }
    
    .btn-order:hover {
        transform: translateY(-3px);
        filter: brightness(1.05);
        box-shadow: 0 15px 30px rgba(255, 107, 53, 0.5);
        color: #0A0C15;
    }
    
    /* Welcome Section - Modern */
    .welcome-area {
        text-align: center;
        margin: 4rem 0 3rem;
    }
    
    .welcome-chip {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 107, 53, 0.1);
        padding: 6px 20px;
        border-radius: 60px;
        margin-bottom: 1rem;
        border: 1px solid rgba(255, 107, 53, 0.2);
    }
    
    .welcome-chip span {
        color: #FF6B35;
        font-weight: 600;
        font-size: 0.85rem;
    }
    
    .welcome-area h2 {
        font-size: 2.8rem;
        font-weight: 800;
        background: linear-gradient(135deg, #FFFFFF 0%, #FFB347 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 1rem;
    }
    
    .welcome-area .lead {
        color: #8B92B0;
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto;
    }
    
    /* Category Cards - Neon Border Effect */
    .category-grid {
        margin: 3rem 0;
    }
    
    .category-card-premium {
        background: var(--bg-card);
        border-radius: 28px;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        border: 1px solid rgba(255, 107, 53, 0.15);
        position: relative;
    }
    
    .category-card-premium:hover {
        transform: translateY(-12px);
        border-color: rgba(255, 107, 53, 0.5);
        box-shadow: 0 25px 40px -15px rgba(255, 107, 53, 0.25);
    }
    
    .card-img-wrapper {
        position: relative;
        overflow: hidden;
        height: 280px;
    }
    
    .card-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    
    .category-card-premium:hover .card-img-wrapper img {
        transform: scale(1.08);
    }
    
    .img-overlay-glow {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, #11131F 0%, transparent 60%);
    }
    
    .card-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 1.8rem;
        text-align: center;
    }
    
    .card-content h3 {
        font-size: 1.8rem;
        font-weight: 700;
        color: white;
        margin-bottom: 0.25rem;
    }
    
    .item-count {
        background: rgba(255, 107, 53, 0.2);
        backdrop-filter: blur(10px);
        display: inline-block;
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
        color: #FFB347;
        margin: 0.5rem 0;
    }
    
    .explore-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: white;
        font-weight: 600;
        margin-top: 0.5rem;
        transition: gap 0.3s;
    }
    
    .category-card-premium:hover .explore-link {
        gap: 14px;
        color: #FF6B35;
    }
    
    /* Features - Modern Stats Style */
    .stats-section {
        background: linear-gradient(115deg, #0F111F 0%, #11131F 100%);
        border-radius: 48px;
        padding: 3rem 2rem;
        margin: 3rem 0;
        border: 1px solid rgba(255, 107, 53, 0.12);
    }
    
    .stat-item {
        text-align: center;
        padding: 1rem;
    }
    
    .stat-icon {
        width: 70px;
        height: 70px;
        background: rgba(255, 107, 53, 0.1);
        border-radius: 30px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        transition: all 0.3s;
    }
    
    .stat-icon i {
        font-size: 2.2rem;
        color: #FF6B35;
    }
    
    .stat-item:hover .stat-icon {
        background: rgba(255, 107, 53, 0.2);
        transform: scale(1.05);
    }
    
    .stat-item h4 {
        font-size: 1.3rem;
        font-weight: 700;
        color: white;
        margin-bottom: 0.3rem;
    }
    
    .stat-item p {
        color: #8B92B0;
        font-size: 0.85rem;
        margin: 0;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .hero-slider {
            height: 420px;
        }
        .slide-content h1 {
            font-size: 1.8rem;
        }
        .slide-price {
            font-size: 1.2rem;
        }
        .welcome-area h2 {
            font-size: 1.8rem;
        }
        .card-img-wrapper {
            height: 220px;
        }
        .stats-section {
            padding: 2rem 1rem;
        }
        .ticker {
            animation: tickerScroll 15s linear infinite;
        }
    }
    
    @media (max-width: 576px) {
        .slide-content {
            bottom: 8%;
        }
        .btn-order {
            padding: 10px 24px;
            font-size: 0.85rem;
        }
    }

     @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Plus Jakarta Sans', 'Hind Siliguri', sans-serif;
        }
        
        .exclusive-offers-section {
            background: linear-gradient(135deg, #0F172A 0%, #1E1B4B 100%);
            border-radius: 48px;
            padding: 3rem 2rem;
            margin: 2rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .exclusive-offers-section::before {
            content: '';
            position: absolute;
            top: -30%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255,107,53,0.15) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }
        
        .exclusive-offers-section::after {
            content: '';
            position: absolute;
            bottom: -20%;
            left: -5%;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, rgba(255,180,71,0.12) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 2.5rem;
            position: relative;
            z-index: 2;
        }
        
        .section-header .badge {
            background: linear-gradient(135deg, #FF6B35, #FFB347);
            padding: 8px 24px;
            border-radius: 60px;
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 1px;
            margin-bottom: 1rem;
            display: inline-block;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, #FFFFFF 0%, #FFD79E 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 0.5rem;
        }
        
        .section-header p {
            color: #A0A8C0;
            font-size: 1rem;
        }
        
        /* Premium Offer Cards */
        .offer-card {
            position: relative;
            border-radius: 32px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.3);
            height: 100%;
            text-decoration: none;
            display: block;
        }
        
        .offer-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 50px -15px rgba(0, 0, 0, 0.4);
        }
        
        .offer-card img {
            width: 100%;
            height: 380px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .offer-card:hover img {
            transform: scale(1.05);
        }
        
        .offer-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.4) 50%, transparent 100%);
            padding: 2rem 1.5rem 1.5rem;
            color: white;
        }
        
        .offer-tag {
            position: absolute;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, #FF6B35, #FFB347);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 1px;
            color: #0F172A;
            z-index: 2;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        
        .offer-discount {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(8px);
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 700;
            color: #FFB347;
            z-index: 2;
        }
        
        .offer-overlay h3 {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }
        
        .offer-overlay p {
            font-size: 0.9rem;
            color: rgba(255,255,255,0.8);
            margin-bottom: 0.5rem;
        }
        
        .offer-price {
            display: flex;
            align-items: baseline;
            gap: 12px;
            margin: 0.75rem 0;
        }
        
        .old-price {
            font-size: 1rem;
            color: rgba(255,255,255,0.5);
            text-decoration: line-through;
        }
        
        .new-price {
            font-size: 1.6rem;
            font-weight: 800;
            color: #FFB347;
        }
        
        .shop-now-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(8px);
            padding: 10px 24px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            color: white;
            transition: all 0.3s;
            margin-top: 0.5rem;
            border: 1px solid rgba(255,255,255,0.2);
        }
        
        .offer-card:hover .shop-now-btn {
            background: linear-gradient(135deg, #FF6B35, #FFB347);
            border-color: transparent;
            gap: 12px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .exclusive-offers-section {
                padding: 2rem 1rem;
            }
            .section-header h2 {
                font-size: 1.8rem;
            }
            .offer-card img {
                height: 280px;
            }
            .offer-overlay h3 {
                font-size: 1.4rem;
            }
            .new-price {
                font-size: 1.3rem;
            }
        }
</style>

<!-- ===== PREMIUM ANNOUNCEMENT TICKER (No backend change) ===== -->
<div class="announcement-bar">
    <div class="ticker">
        <div class="ticker-item">
            <i class="fas fa-crown"></i>
            <span>স্পেশাল অফার! 🎉</span>
            <span class="ticker-badge">৫০০+ টাকায় ফ্রি ডেলিভারি</span>
        </div>
        <div class="ticker-item">
            <i class="fas fa-fire"></i>
            <span>নিউ আইটেম এসেছে 🔥</span>
            <span class="ticker-badge">এখনই ট্রাই করুন</span>
        </div>
        <div class="ticker-item">
            <i class="fas fa-rocket"></i>
            <span>ফাস্ট ডেলিভারি 🚀</span>
            <span class="ticker-badge">৩০ মিনিট গ্যারান্টি</span>
        </div>
        <div class="ticker-item">
            <i class="fas fa-gem"></i>
            <span>প্রিমিয়াম কোয়ালিটি</span>
            <span class="ticker-badge">১০০% স্যাটিসফ্যাকশন</span>
        </div>
        <!-- Duplicate for seamless loop -->
        <div class="ticker-item">
            <i class="fas fa-crown"></i>
            <span>স্পেশাল অফার! 🎉</span>
            <span class="ticker-badge">৫০০+ টাকায় ফ্রি ডেলিভারি</span>
        </div>
        <div class="ticker-item">
            <i class="fas fa-fire"></i>
            <span>নিউ আইটেম এসেছে 🔥</span>
            <span class="ticker-badge">এখনই ট্রাই করুন</span>
        </div>
    </div>
</div>

<div class="container">
    <!-- ===== HERO SLIDER - LUXURY DESIGN ===== -->
    <div class="hero-wrapper">
        <div class="hero-slider" id="heroSlider">
            <?php $__currentLoopData = $sliderFoods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="slide <?php echo e($index == 0 ? 'active' : ''); ?>" 
                     style="background-image: url('<?php echo e(asset($food->image)); ?>');">
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <div class="slide-tag">
                            <i class="fas fa-star me-1"></i> ফিচার্ড আইটেম
                        </div>
                        <h1><?php echo e($food->name); ?></h1>
                        <div class="slide-price">
                            শুরু মাত্র <span>৳<?php echo e($food->price); ?></span>
                        </div>
                        <a href="<?php echo e(url('/food/' . $food->category)); ?>" class="btn btn-order">
                            অর্ডার করুন <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    
    <!-- ===== WELCOME SECTION - ELEGANT ===== -->
    <div class="welcome-area">
        <div class="welcome-chip">
            <i class="fas fa-bolt"></i>
            <span>প্রিমিয়াম ফুড ডেলিভারি নেটওয়ার্ক</span>
        </div>
        <h2 style="color: #FF6B35;">স্বাগতম <span style="color: #FF6B35;">Flavor Rush</span> এ</h2>
        <p class="lead" style="color: #060606;" >আমাদের সাথে খাবারের স্বাদ নিন, যা আপনাকে রাখবে তৃপ্ত — প্রতিটি অর্ডারেই এক্সক্লুসিভ অভিজ্ঞতা</p>
    </div>
    
    <!-- ===== CATEGORY CARDS - MODERN NEON ===== -->
    <div class="row g-4 category-grid">
        <div class="col-md-4">
            <div class="category-card-premium" onclick="location.href='<?php echo e(url('/food/Burger')); ?>'">
                <div class="card-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=600&q=80" alt="Gourmet Burger">
                    <div class="img-overlay-glow"></div>
                </div>
                <div class="card-content">
                    <h3>🍔 বার্গার</h3>
                    <div class="item-count"><?php echo e($burgerCount); ?> টি প্রিমিয়াম আইটেম</div>
                    <div class="explore-link">
                        এক্সপ্লোর করুন <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="category-card-premium" onclick="location.href='<?php echo e(url('/food/Pizza')); ?>'">
                <div class="card-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=600&q=80" alt="Artisan Pizza">
                    <div class="img-overlay-glow"></div>
                </div>
                <div class="card-content">
                    <h3>🍕 পিৎজা</h3>
                    <div class="item-count"><?php echo e($pizzaCount); ?> টি প্রিমিয়াম আইটেম</div>
                    <div class="explore-link">
                        এক্সপ্লোর করুন <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="category-card-premium" onclick="location.href='<?php echo e(url('/food/Dessert')); ?>'">
                <div class="card-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=600&q=80" alt="Luxury Desserts">
                    <div class="img-overlay-glow"></div>
                </div>
                <div class="card-content">
                    <h3>🍰 ডেজার্ট</h3>
                    <div class="item-count"><?php echo e($dessertCount); ?> টি প্রিমিয়াম আইটেম</div>
                    <div class="explore-link">
                        এক্সপ্লোর করুন <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ===== FEATURES SECTION - STATS STYLE ===== -->
    <div class="stats-section">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-truck-fast"></i>
                    </div>
                    <h4>ফ্রি ডেলিভারি</h4>
                    <p>৫০০+ টাকায়</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4>৩০ মিনিটে ডেলিভারি</h4>
                    <p>গ্যারান্টিযুক্ত</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4>হেলদি ফুড</h4>
                    <p>প্রিমিয়াম কোয়ালিটি</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4>২৪/৭ সাপোর্ট</h4>
                    <p>যেকোনো সময়</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="exclusive-offers-section">
        <div class="section-header">
            <div class="badge">
                <i class="fas fa-fire me-1"></i> LIMITED TIME OFFER
            </div>
            <h2>এক্সক্লুসিভ অফার</h2>
            <p>সীমিত সময়ের জন্য স্পেশাল ডিসকাউন্ট — এখনই অর্ডার করুন!</p>
        </div>
        
        <div class="row g-4">
            <!-- Card 1: Burger Exclusive Offer -->
            <div class="col-md-6">
                <a href="#" class="offer-card">
                    <div class="offer-tag">
                        <i class="fas fa-star"></i> BEST SELLER
                    </div>
                    <div class="offer-discount">
                        <i class="fas fa-tag"></i> 30% OFF
                    </div>
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=800&q=80" alt="Gourmet Burger Offer">
                    <div class="offer-overlay">
                        <h3>🍔 মেগা বার্গার ফেস্ট</h3>
                        <p>ডাবল চিজ, ক্রিস্পি বেকন ও স্পেশাল সস</p>
                        <div class="offer-price">
                            
                            <span class="new-price">Coming Soon.Dont miss it.</span>
                        </div>
                        
                    </div>
                </a>
            </div>
            
            <!-- Card 2: Pizza + Dessert Combo Offer -->
            <div class="col-md-6">
                <a href="#" class="offer-card">
                    <div class="offer-tag">
                        <i class="fas fa-crown"></i> COMBO DEAL
                    </div>
                    <div class="offer-discount">
                        <i class="fas fa-tag"></i> 25% OFF
                    </div>
                    <img src="https://images.unsplash.com/photo-1604382354936-07c5d9983bd3?w=800&q=80" alt="Pizza & Dessert Offer">
                    <div class="offer-overlay">
                        <h3>🍕 পিৎজা + 🍰 ডেজার্ট</h3>
                        <p>স্পেশাল কম্বো — পরিবার ও বন্ধুদের জন্য আদর্শ</p>
                        <div class="offer-price">
                            
                            <span class="new-price">Coming Soon.Dont miss it.</span>
                        </div>
                        
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    // ===== ENHANCED HERO SLIDER (No backend code change) =====
    let currentIndex = 0;
    const sliderSlides = document.querySelectorAll('#heroSlider .slide');
    const totalSlidesCount = sliderSlides.length;
    let slideInterval;
    
    function showSlide(index) {
        if (!sliderSlides.length) return;
        sliderSlides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
    }
    
    function nextSlide() {
        if (totalSlidesCount === 0) return;
        currentIndex = (currentIndex + 1) % totalSlidesCount;
        showSlide(currentIndex);
    }
    
    function startSlider() {
        if (totalSlidesCount > 1) {
            slideInterval = setInterval(nextSlide, 4500);
        }
    }
    
    function stopSlider() {
        if (slideInterval) {
            clearInterval(slideInterval);
        }
    }
    
    // Initialize slider
    if (totalSlidesCount > 0) {
        startSlider();
        
        // Pause on hover for better UX
        const sliderContainer = document.querySelector('.hero-slider');
        if (sliderContainer) {
            sliderContainer.addEventListener('mouseenter', stopSlider);
            sliderContainer.addEventListener('mouseleave', startSlider);
        }
    }
    
    // Optional: Add touch support for mobile
    let touchStartX = 0;
    const heroWrapper = document.querySelector('.hero-wrapper');
    if (heroWrapper) {
        heroWrapper.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
            stopSlider();
        });
        heroWrapper.addEventListener('touchend', (e) => {
            const touchEndX = e.changedTouches[0].screenX;
            if (touchEndX < touchStartX - 50) nextSlide();
            if (touchEndX > touchStartX + 50) {
                currentIndex = (currentIndex - 1 + totalSlidesCount) % totalSlidesCount;
                showSlide(currentIndex);
            }
            startSlider();
        });
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel\Project\Herd\flavor-rush\resources\views/home.blade.php ENDPATH**/ ?>