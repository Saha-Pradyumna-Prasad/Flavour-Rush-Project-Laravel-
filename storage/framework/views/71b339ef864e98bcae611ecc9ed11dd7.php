



<?php $__env->startSection('content'); ?>
<style>
    .food-form-container {
        background: white;
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .food-image-preview {
        max-width: 200px;
        border-radius: 10px;
        margin-top: 10px;
    }
    
    .food-table img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 10px;
    }
</style>

<div class="container my-5">
    <h1 class="mb-4"><i class="fas fa-pizza-slice"></i> ফুড ম্যানেজমেন্ট</h1>
    
    <!-- ফুড অ্যাড/এডিট ফর্ম -->
    <div class="food-form-container">
        <h3>
            <?php if(isset($editMode) && isset($food)): ?>
                <i class="fas fa-edit"></i> খাবার এডিট করুন
            <?php else: ?>
                <i class="fas fa-plus"></i> নতুন খাবার যোগ করুন
            <?php endif; ?>
        </h3>
        
        <form action="<?php echo e(isset($food) ? route('admin.food.update', $food->id) : route('admin.food.store')); ?>" 
              method="POST" 
              enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php if(isset($food)): ?>
                <?php echo method_field('PUT'); ?>
            <?php endif; ?>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">খাবারের নাম <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" value="<?php echo e(old('name', $food->name ?? '')); ?>" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label">ক্যাটাগরি <span class="text-danger">*</span></label>
                    <select name="category" class="form-control" required>
                        <option value="">সিলেক্ট করুন</option>
                        <option value="Burger" <?php echo e((old('category', $food->category ?? '') == 'Burger') ? 'selected' : ''); ?>>🍔 বার্গার</option>
                        <option value="Pizza" <?php echo e((old('category', $food->category ?? '') == 'Pizza') ? 'selected' : ''); ?>>🍕 পিৎজা</option>
                        <option value="Dessert" <?php echo e((old('category', $food->category ?? '') == 'Dessert') ? 'selected' : ''); ?>>🍰 ডেজার্ট</option>
                    </select>
                </div>
                
                <div class="col-md-12 mb-3">
                    <label class="form-label">বিস্তারিত <span class="text-danger">*</span></label>
                    <textarea name="details" class="form-control" rows="3" required><?php echo e(old('details', $food->details ?? '')); ?></textarea>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label">দাম (৳) <span class="text-danger">*</span></label>
                    <input type="number" step="0.01" name="price" class="form-control" value="<?php echo e(old('price', $food->price ?? '')); ?>" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label">ছবি 
                        <?php if(!isset($food)): ?>
                            <span class="text-danger">*</span>
                        <?php endif; ?>
                    </label>
                    <input type="file" name="image" class="form-control" accept="image/*" onchange="previewImage(this)" <?php echo e(!isset($food) ? 'required' : ''); ?>>
                    <small class="text-muted">JPG, PNG ফাইল (সর্বোচ্চ 2MB)</small>
                    
                    <?php if(isset($food) && $food->image): ?>
                        <div id="imagePreview">
                            <img src="<?php echo e(asset($food->image)); ?>" class="food-image-preview" alt="Current Image">
                            <p class="text-muted mt-2">বর্তমান ছবি</p>
                        </div>
                    <?php else: ?>
                        <div id="imagePreview" style="display: none;">
                            <img class="food-image-preview" alt="Preview">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">
                <?php if(isset($food)): ?>
                    <i class="fas fa-save"></i> আপডেট করুন
                <?php else: ?>
                    <i class="fas fa-plus"></i> যোগ করুন
                <?php endif; ?>
            </button>
            
            <?php if(isset($food)): ?>
                <a href="<?php echo e(route('admin.foods')); ?>" class="btn btn-secondary">বাতিল করুন</a>
            <?php endif; ?>
        </form>
    </div>
    
    <!-- ফুড লিস্ট -->
    <div class="food-form-container">
        <h3><i class="fas fa-list"></i> সকল খাবার</h3>
        
        <div class="table-responsive">
            <table class="table table-hover food-table">
                <thead>
                    <tr>
                        <th>ছবি</th>
                        <th>নাম</th>
                        <th>ক্যাটাগরি</th>
                        <th>বিস্তারিত</th>
                        <th>দাম</th>
                        <th>অ্যাকশন</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <img src="<?php echo e(asset($food->image)); ?>" alt="<?php echo e($food->name); ?>">
                            </td>
                            <td><strong><?php echo e($food->name); ?></strong></td>
                            <td>
                                <?php if($food->category == 'Burger'): ?> 🍔
                                <?php elseif($food->category == 'Pizza'): ?> 🍕
                                <?php else: ?> 🍰
                                <?php endif; ?>
                                <?php echo e($food->category); ?>

                            </td>
                            <td><?php echo e(Str::limit($food->details, 50)); ?></td>
                            <td>৳ <?php echo e(number_format($food->price, 2)); ?></td>
                            <td>
                                <a href="<?php echo e(route('admin.food.edit', $food->id)); ?>" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> এডিট
                                </a>
                                
                                <form action="<?php echo e(route('admin.food.delete', $food->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('আপনি কি এই খাবারটি ডিলিট করতে চান?')">
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
                            <td colspan="6" class="text-center py-5">
                                <i class="fas fa-utensils fa-3x text-muted"></i>
                                <p class="mt-2">কোন খাবার যোগ করা হয়নি</p>
                                <button class="btn btn-primary btn-sm" onclick="$('html, body').animate({ scrollTop: 0 }, 'slow');">
                                    খাবার যোগ করুন
                                </button>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        
        <div class="d-flex justify-content-center mt-3">
            <?php echo e($foods->links()); ?>

        </div>
    </div>
</div>

<script>
    function previewImage(input) {
        const preview = document.getElementById('imagePreview');
        const previewImg = preview.querySelector('img');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                preview.style.display = 'block';
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel\Project\Herd\flavor-rush\resources\views/admin/manage-food.blade.php ENDPATH**/ ?>