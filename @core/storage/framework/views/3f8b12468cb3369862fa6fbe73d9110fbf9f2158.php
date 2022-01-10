<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Payment Success For:')); ?> <?php echo e($order_details->package_name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="package-page-content padding-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="order-success-area margin-bottom-80 text-center">
                        <h1 class="title"><?php echo e(get_static_option('site_order_success_page_' . $user_select_lang_slug . '_title')); ?></h1>
                        <p class="order-page-description"><?php echo e(get_static_option('site_order_success_page_' . $user_select_lang_slug . '_description')); ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="billing-title"><?php echo e(__('Order Details')); ?></h2>
                    <ul class="billing-details">
                        <li><strong><?php echo e(__('Order ID')); ?></strong> #<?php echo e($order_details->id); ?></li>
                        <li><strong><?php echo e(__('Payment Method')); ?></strong> <?php echo e(str_replace('_',' ',$payment_details->package_gateway)); ?></li>
                        <li><strong><?php echo e(__('Payment Status')); ?></strong> <?php echo e($payment_details->status); ?></li>
                        <li><strong><?php echo e(__('Transaction id')); ?></strong> <?php echo e($payment_details->transaction_id); ?></li>
                    </ul>
                    <h2 class="billing-title"><?php echo e(__('Billing Details')); ?></h2>
                    <ul class="billing-details">
                        <li><strong><?php echo e(__('Name')); ?></strong> <?php echo e($payment_details->name); ?></li>
                        <li><strong><?php echo e(__('Email')); ?></strong> <?php echo e($payment_details->email); ?></li>
                    </ul>
                    <div class="btn-wrapper margin-top-40">
                        <?php if(auth()->guard('web')->check()): ?>
                            <a href="<?php echo e(route('user.home')); ?>" class="boxed-btn"><?php echo e(__('Go To Dashboard')); ?></a>
                        <?php else: ?>
                            <a href="<?php echo e(url('/')); ?>" class="boxed-btn"><?php echo e(__('Back To Home')); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 mt-3">
                    <div class="right-content-area">
                        <div class="single-price-plan-01 active">
                            <div class="price-header">
                                <div class="img-icon">
                                    <?php echo render_image_markup_by_attachment_id($package_details->image); ?>

                                </div>
                                <h4 class="title"><?php echo e($package_details->lang_front->title); ?></h4>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <?php $__currentLoopData = explode("\n",$package_details->lang_front->features); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><i class="fa fa-check success"></i> <?php echo e($item); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <div class="price-wrap">
                                <?php echo custom_amount_with_currency_symbol($package_details->price); ?> <span class="sign"><?php echo e($package_details->lang_front->type); ?></span>
                            </div>
                            <div class="price-footer">
                                <div class="btn-wrapper">
                                    <a href="<?php echo e(($package_details->btn_url)?? route('frontend.plan.order',['id' => $package_details->id])); ?>" class="boxed-btn"><?php echo e($package_details->lang_front->btn_text); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/neateller/@core/resources/views/frontend/payment/payment-success.blade.php ENDPATH**/ ?>