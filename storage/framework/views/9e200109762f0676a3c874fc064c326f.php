



<?php $__env->startSection('content'); ?>
<style>
    .stat-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 20px;
        transition: all 0.3s;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
    }
    
    .stat-number {
        font-size: 2.5rem;
        font-weight: bold;
    }
    
    .table-container {
        background: white;
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .table-title {
        border-bottom: 3px solid #667eea;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }
</style>

<div class="container my-5">
    <h1 class="mb-4"><i class="fas fa-chart-line"></i> অ্যাডমিন ড্যাশবোর্ড</h1>
    
    <!-- স্ট্যাটিস্টিক্স কার্ড -->
    <div class="row">
        <div class="col-md-4">
            <div class="stat-card text-center">
                <i class="fas fa-users fa-3x"></i>
                <div class="stat-number"><?php echo e($totalUsers); ?></div>
                <p>মোট ইউজার</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card text-center">
                <i class="fas fa-shopping-cart fa-3x"></i>
                <div class="stat-number"><?php echo e($totalOrders); ?></div>
                <p>মোট অর্ডার</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card text-center">
                <i class="fas fa-dollar-sign fa-3x"></i>
                <div class="stat-number">৳ <?php echo e(number_format($totalRevenue, 2)); ?></div>
                <p>মোট রেভিনিউ</p>
            </div>
        </div>
    </div>
    
    <!-- অর্ডার লিস্ট -->
    <div class="table-container">
        <h3 class="table-title"><i class="fas fa-list"></i> সকল অর্ডার</h3>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>আইডি</th>
                        <th>ইউজার</th>
                        <th>খাবারের নাম</th>
                        <th>নাম</th>
                        <th>ফোন</th>
                        <th>ঠিকানা</th>
                        <th>পেমেন্ট</th>
                        <th>ট্রানজেকশন</th>
                        <th>অর্ডারের তারিখ</th>
                        <th>অ্যাকশন</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>#<?php echo e($order->id); ?></td>
                            <td><?php echo e($order->user->name ?? 'N/A'); ?></td>
                            <td><?php echo e($order->food_name); ?></td>
                            <td><?php echo e($order->name); ?></td>
                            <td><?php echo e($order->phone); ?></td>
                            <td><?php echo e(Str::limit($order->address, 30)); ?></td>
                            <td>
                                <span class="badge bg-info"><?php echo e($order->payment_method); ?></span>
                            </td>
                            <td><?php echo e($order->transaction_id); ?></td>
                            <td><?php echo e($order->created_at->format('d/m/Y h:i A')); ?></td>
                            <td>
                                <form action="<?php echo e(route('admin.delete.order', $order->id)); ?>" method="POST" onsubmit="return confirm('আপনি কি এই অর্ডার ডিলিট করতে চান?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> ডিলিট
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="10" class="text-center">কোন অর্ডার নেই</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- ইউজার লিস্ট -->
    <div class="table-container">
        <h3 class="table-title"><i class="fas fa-users"></i> রেজিস্টার্ড ইউজার</h3>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>আইডি</th>
                        <th>নাম</th>
                        <th>ইমেইল</th>
                        <th>অর্ডার সংখ্যা</th>
                        <th>জয়েনের তারিখ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>#<?php echo e($user->id); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td>
                                <span class="badge bg-primary"><?php echo e($user->orders->count()); ?> টি অর্ডার</span>
                            </td>
                            <td><?php echo e($user->created_at->format('d/m/Y')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="text-center">কোন ইউজার নেই</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel\Project\Herd\flavor-rush\resources\views\admin\dashboard.blade.php ENDPATH**/ ?>