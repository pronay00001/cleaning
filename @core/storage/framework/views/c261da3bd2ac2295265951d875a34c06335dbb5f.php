<?php $__env->startSection('section'); ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="user-dashboard-card style-01">
                <div class="icon"><i class="fas fa-money-bill"></i></div>
                <div class="content">
                    <h4 class="title"><?php echo e(__('Package Order')); ?></h4>
                    <span class="number"><?php echo e($package_orders); ?></span>
                </div>
            </div>
        </div>
            <div class="col-lg-6">
                <div class="user-dashboard-card">
                    <div class="icon"><i class="fas fa-shopping-bag"></i></div>
                    <div class="content">
                        <h4 class="title"><?php echo e(get_static_option('product_page_'.$user_select_lang_slug.'_name')); ?> <?php echo e(__('Order')); ?></h4>
                        <span class="number"><?php echo e($product_orders); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="user-dashboard-card style-01">
                    <div class="icon"><i class="fas fa-calendar"></i></div>
                    <div class="content">
                        <h4 class="title"><?php echo e(get_static_option('appointment_page_'.$user_select_lang_slug.'_name')); ?> <?php echo e(__('Booking')); ?></h4>
                        <span class="number"><?php echo e($appointments); ?></span>
                    </div>
                </div>
            </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.dashboard.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/neateller/@core/resources/views/frontend/user/dashboard/user-home.blade.php ENDPATH**/ ?>