


<?php $__env->startSection('content'); ?>
<style>
    /* ========== COLORFUL BACKGROUND - PEOPLE ENJOYING FOOD TOGETHER ========== */
    body {
        background-attachment: fixed;
    }
    
    .category-page-wrapper {
        background-image: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=2074&auto=format');
        background-size: cover;
        background-position: center 35%;
        background-attachment: fixed;
        position: relative;
        min-height: 100vh;
        padding: 2rem 0;
    }
    
    .category-page-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(143, 141, 139, 0.88);
        z-index: 0;
    }
    
    .category-page-wrapper > .container {
        position: relative;
        z-index: 2;
    }
    
    /* Food Card Styles - Keeping Original Classes */
    .food-card {
        margin-bottom: 30px;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        background: #ffffff;
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }
    
    .food-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        background: white;
    }
    
    .food-image {
        height: 300px;
        object-fit: cover;
        width: 100%;
    }
    
    .price-tag {
        font-size: 1.8rem;
        font-weight: bold;
        color: #ff6b6b;
    }
    
    .order-modal .modal-content {
        border-radius: 20px;
    }
    
    .category-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 8px 20px;
        border-radius: 25px;
        color: white;
        display: inline-block;
        box-shadow: 0 4px 12px rgba(102,126,234,0.3);
    }
    
    /* Additional subtle enhancements */
    .card-body {
        background: #ffffff;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        transition: all 0.3s;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 14px rgba(102,126,234,0.4);
    }
    
    .btn-secondary {
        background: #6c757d;
        border: none;
    }
    
    .alert-info {
        background: rgba(23, 162, 184, 0.1);
        border: 1px solid rgba(23,162,184,0.3);
    }
    
    /* Header text visibility */
    .text-center h1, .text-center p {
        color: #2d3748;
        text-shadow: none;
    }
    
    .text-center h1 {
        font-weight: 700;
    }
</style>

<div class="category-page-wrapper">
    <div class="container my-5">
        <!-- ক্যাটাগরি হেডার -->
        <div class="text-center mb-5">
            <div class="category-badge">
                <?php if($category == 'Burger'): ?> 🍔 
                <?php elseif($category == 'Pizza'): ?> 🍕 
                <?php else: ?> 🍰 
                <?php endif; ?>
                <?php echo e($category); ?>

            </div>
            <h1 class="mt-3"><?php echo e($category); ?> কালেকশন</h1>
            <p>আমাদের স্পেশাল <?php echo e($category); ?> গুলো দেখুন</p>
        </div>
        
        <!-- ফুড গ্রিড - ২টি কার্ড per row -->
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-6">
                    <div class="card food-card">
                        <img src="<?php echo e(asset($food->image)); ?>" class="food-image" alt="<?php echo e($food->name); ?>">
                        <div class="card-body">
                            <h3><?php echo e($food->name); ?></h3>
                            <p class="text-muted"><?php echo e($food->details); ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="price-tag">৳ <?php echo e(number_format($food->price, 2)); ?></span>
                                </div>
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(auth()->user()->role == 'user'): ?>
                                        <button class="btn btn-primary" onclick="openOrderModal('<?php echo e($food->name); ?>', '<?php echo e($food->price); ?>')">
                                            <i class="fas fa-shopping-cart"></i> অর্ডার করুন
                                        </button>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <a href="<?php echo e(route('login')); ?>" class="btn btn-secondary">
                                        <i class="fas fa-lock"></i> অর্ডার করতে লগইন করুন
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <h4><i class="fas fa-info-circle"></i> কোন খাবার নেই!</h4>
                        <p>এই ক্যাটাগরিতে এখনো কোন খাবার যোগ করা হয়নি।</p>
                        <?php if(auth()->guard()->check()): ?>
                            <?php if(auth()->user()->role == 'admin'): ?>
                                <a href="<?php echo e(route('admin.foods')); ?>" class="btn btn-primary">খাবার যোগ করুন</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- পেজিনেশন -->
        <div class="d-flex justify-content-center mt-4">
            <?php echo e($foods->links()); ?>

        </div>
    </div>
</div>

<!-- অর্ডার মডাল -->
<div class="modal fade order-modal" id="orderModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="fas fa-shopping-cart"></i> অর্ডার কনফার্মেশন</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form action="<?php echo e(route('place.order')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <strong>আপনি অর্ডার করতে যাচ্ছেন:</strong> <span id="foodNameDisplay"></span>
                    </div>
                    
                    <input type="hidden" name="food_name" id="foodName">
                    
                    <div class="mb-3">
                        <label class="form-label">আপনার নাম <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="<?php echo e(auth()->user()->name ?? ''); ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">মোবাইল নম্বর <span class="text-danger">*</span></label>
                        <input type="tel" name="phone" class="form-control" placeholder="01XXXXXXXXX" maxlength="11" required>
                        <small class="text-muted">১১ ডিজিটের মোবাইল নম্বর দিন</small>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">ঠিকানা <span class="text-danger">*</span></label>
                        <textarea name="address" class="form-control" rows="3" placeholder="বিস্তারিত ঠিকানা দিন" required></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">পেমেন্ট মেথড <span class="text-danger">*</span></label>
                        <select name="payment_method" class="form-control" required id="paymentMethod">
                            <option value="">সিলেক্ট করুন</option>
                            <option value="Bkash">Bkash</option>
                            <option value="Nagad">Nagad</option>
                        </select>
                    </div>
                    
                    <div class="mb-3" id="bkashInfo" style="display: none;">
                        <div class="alert alert-success">
                            <strong>Bkash নম্বর:</strong> 01703695423<br>
                            <strong>পেমেন্ট করে ট্রানজেকশন আইডি দিন</strong>
                        </div>
                    </div>
                    
                    <div class="mb-3" id="nagadInfo" style="display: none;">
                        <div class="alert alert-info">
                            <strong>Nagad নম্বর:</strong> 01863542569<br>
                            <strong>পেমেন্ট করে ট্রানজেকশন আইডি দিন</strong>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">ট্রানজেকশন আইডি <span class="text-danger">*</span></label>
                        <input type="text" name="transaction_id" class="form-control" placeholder="ট্রানজেকশন আইডি দিন" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                    <button type="submit" class="btn btn-primary">অর্ডার কনফার্ম করুন</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    function openOrderModal(foodName, price) {
        document.getElementById('foodName').value = foodName;
        document.getElementById('foodNameDisplay').innerHTML = `<strong>${foodName}</strong> - মূল্য: ৳${price}`;
        new bootstrap.Modal(document.getElementById('orderModal')).show();
    }
    
    // পেমেন্ট মেথড দেখানোর জন্য
    document.getElementById('paymentMethod').addEventListener('change', function() {
        if(this.value === 'Bkash') {
            document.getElementById('bkashInfo').style.display = 'block';
            document.getElementById('nagadInfo').style.display = 'none';
        } else if(this.value === 'Nagad') {
            document.getElementById('bkashInfo').style.display = 'none';
            document.getElementById('nagadInfo').style.display = 'block';
        } else {
            document.getElementById('bkashInfo').style.display = 'none';
            document.getElementById('nagadInfo').style.display = 'none';
        }
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel\Project\Herd\flavor-rush\resources\views/food-page.blade.php ENDPATH**/ ?>