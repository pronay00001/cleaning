<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Order Confirm')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="order-page-content padding-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="order-confirm-area">
                        <h4 class="title"><?php echo e(__('Order Details')); ?></h4>
                         <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('backend.partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <form action="<?php echo e(route('frontend.order.payment.form')); ?>" method="post"
                            enctype="multipart/form-data" class="contact-page-form style-01">
                            <?php echo csrf_field(); ?>
                            <?php
                                $custom_fields = unserialize($order_details->custom_fields,['class' => false]);
                                $payment_gateway = !empty($custom_fields['selected_payment_gateway']) ? $custom_fields['selected_payment_gateway'] : '';
                                $name = auth()->check() ? auth()->user()->name : '';
                                $email = auth()->check() ? auth()->user()->email : '';
                            ?>
                            <input type="hidden" name="order_id" value="<?php echo e($order_details->id); ?>">
                            <input type="hidden" name="payment_gateway" value="<?php echo e($payment_gateway); ?>">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <td><?php echo e(__('Your Name')); ?></td>
                                        <td>
                                            <div class="form-group">
                                                <?php if(auth()->check()): ?>
                                                <input type="text" name="name" value="<?php echo e($name); ?>"
                                                    class="form-control" placeholder="<?php echo e(__('Enter Your Name')); ?>"
                                                    >
                                                <?php else: ?>
                                                <input type="text" name="name" id="pkg_user_name" value="<?php echo e($name); ?>"
                                                    class="form-control" placeholder="<?php echo e(__('Enter Your Name')); ?>"
                                                    >
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Your Email')); ?></td>
                                        <td>
                                            <div class="form-group">
                                                <?php if(auth()->check()): ?>
                                                <input type="email" name="email" value="<?php echo e($email); ?>"
                                                    class="form-control" placeholder="<?php echo e(__('Enter Your Email')); ?>"
                                                    >
                                                <?php else: ?>
                                                <input type="email" name="email" id="pkg_user_email" value="<?php echo e($email); ?>"
                                                    class="form-control" placeholder="<?php echo e(__('Enter Your Email')); ?>"
                                                    >
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Package Name')); ?></td>
                                        <td><?php echo e($order_details->package_name); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Package Price')); ?></td>
                                        <td>
                                            <strong><?php echo e(amount_with_currency_symbol($order_details->package_price)); ?></strong>
                                            <?php if(!check_currency_support_by_payment_gateway($payment_gateway)): ?>
                                                <br>
                                                <small><?php echo e(__('You will charge in ' . get_charge_currency($payment_gateway) . ', you have to pay' . ' ')); ?>

                                                    <strong><?php echo e(get_charge_amount($order_details->package_price, $payment_gateway) . get_charge_currency($payment_gateway)); ?></strong></small>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Payment Gateway')); ?></td>
                                        <td class="text-capitalize">
                                            <?php if($payment_gateway == 'manual_payment'): ?>
                                                <?php echo e(get_static_option('site_manual_payment_name')); ?>

                                            <?php else: ?>
                                                <?php echo e($payment_gateway); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php if($payment_gateway == 'manual_payment'): ?>
                                        <tr>
                                            <td><?php echo e(__('Transaction ID')); ?></td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="trasaction_id" id="trasaction_id" class="form-control" required>
                                                    <small><?php echo get_manual_payment_description(); ?></small>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </table>
                            </div>
                            <div class="btn-wrapper">
                                <button class="boxed-btn btn-saas btn-block" id="pay_now" type="submit"><?php echo e(__('Pay Now')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        (function($){
        "use strict";
        $(document).ready(function(){
            var name = sessionStorage.pkg_user_name;
            var email = sessionStorage.pkg_user_email;
            $("#pkg_user_name").val(name)
            $("#pkg_user_email").val(email)
            $(document).on('click',"#pay_now",function(){
                sessionStorage.removeItem("pkg_user_name")
                sessionStorage.removeItem("pkg_user_email")
            })
        })
        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/neateller/@core/resources/views/frontend/payment/order-confirm.blade.php ENDPATH**/ ?>