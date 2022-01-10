<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Product Order Details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                       <div class="header-wrap d-flex justify-content-between margin-bottom-40">
                           <h4 class="header-title"><?php echo e(__('Product Order Details')); ?></h4>
                           <a href="<?php echo e(route('admin.products.order.logs')); ?>" class="btn btn-info"><?php echo e(__('All Product Orders')); ?></a>
                       </div>
                       <div class="order-success-area">
                        <div class="product-orders-summery-warp margin-top-20">
                            <h4 class="title"><?php echo e(__('Order Information')); ?></h4>
                            <div class="extra-data booking-details-info">
                                <ul>
                                    <li><strong><?php echo e(__('Order ID: ')); ?></strong> <?php echo e('#'.$product_order->id); ?></li>
                                    <li><strong><?php echo e(__('Shipping Method:')); ?></strong> <?php echo e(get_shipping_name_by_id($product_order->product_shippings_id)); ?></li>
                                    <li><strong><?php echo e(__('Payment Method:')); ?></strong> <?php echo e(str_replace('_',' ', ucfirst($product_order->payment_gateway))); ?></li>
                                    <li><strong><?php echo e(__('Payment Status:')); ?></strong> <?php echo e(__($product_order->payment_status)); ?></li>
                                    <li><strong><?php echo e(__('Order Status:')); ?></strong> <?php echo e(__($product_order->status)); ?></li>
                                </ul>
                            </div>
                            <div class="billing-and-shipping-details booking-details-info margin-top-20">
                                <div class="billing-wrap">
                                    <h4 class="title"><?php echo e(__('Billing Details')); ?></h4>
                                    <ul>
                                        <li><strong><?php echo e(__('Name')); ?></strong> <?php echo e($product_order->billing_name); ?></li>
                                        <li><strong><?php echo e(__('Email')); ?></strong> <?php echo e($product_order->billing_email); ?></li>
                                        <li><strong><?php echo e(__('Phone')); ?></strong> <?php echo e($product_order->billing_phone); ?></li>
                                        <li><strong><?php echo e(__('Country')); ?></strong> <?php echo e($product_order->billing_country); ?></li>
                                        <li><strong><?php echo e(__('Street Address')); ?></strong> <?php echo e($product_order->billing_street_address); ?></li>
                                        <li><strong><?php echo e(__('District')); ?></strong> <?php echo e($product_order->billing_district); ?></li>
                                        <li><strong><?php echo e(__('Town')); ?></strong> <?php echo e($product_order->billing_town); ?></li>
                                    </ul>
                                </div>
                                <?php if($product_order->different_shipping_address == 'yes'): ?>
                                    <div class="billing-wrap booking-details-info margin-top-20">
                                        <h4 class="title"><?php echo e(__('Shipping Details')); ?></h4>
                                        <ul>
                                            <li><strong><?php echo e(__('Name')); ?></strong> <?php echo e($product_order->shipping_name); ?></li>
                                            <li><strong><?php echo e(__('Email')); ?></strong> <?php echo e($product_order->shipping_email); ?></li>
                                            <li><strong><?php echo e(__('Phone')); ?></strong> <?php echo e($product_order->shipping_phone); ?></li>
                                            <li><strong><?php echo e(__('Country')); ?></strong> <?php echo e($product_order->shipping_country); ?></li>
                                            <li><strong><?php echo e(__('Street Address')); ?></strong> <?php echo e($product_order->shipping_street_address); ?></li>
                                            <li><strong><?php echo e(__('District')); ?></strong> <?php echo e($product_order->shipping_district); ?></li>
                                            <li><strong><?php echo e(__('Town')); ?></strong> <?php echo e($product_order->shipping_town); ?></li>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php $cart_items = unserialize($product_order->cart_items,['class' => false]); ?>
                            <h4 class="title margin-top-20"><?php echo e(__('Order Summery')); ?></h4>
                            <div class="cart-total-table-wrap">
                                <div class="cart-total-table table-responsive text-left">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td><strong><?php echo e(__('Subtotal')); ?></strong></td>
                                            <td><?php echo e(amount_with_currency_symbol($product_order->subtotal)); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong><?php echo e(__('Coupon Discount')); ?></strong></td>
                                            <td>- <?php echo e(amount_with_currency_symbol($product_order->coupon_discount)); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong><?php echo e(__('Shipping Cost')); ?></strong></td>
                                            <td>+ <?php echo e(amount_with_currency_symbol($product_order->shipping_cost)); ?></td>
                                        </tr>
                                        <?php if(is_tax_enable()): ?>
                                            <?php $tax_percentage = get_static_option('product_tax_type') == 'total' ? '('.get_static_option('product_tax_percentage').')' : '';  ?>
                                            <tr>
                                                <td><strong><?php echo e(__('Tax')); ?> <?php echo e($tax_percentage); ?></strong></td>
                                                <td>+ <?php echo e(amount_with_currency_symbol(cart_tax_for_mail_template($cart_items))); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                        <tr>
                                            <td><strong><?php echo e(__('Total')); ?></strong></td>
                                            <td><?php echo e(amount_with_currency_symbol($product_order->total)); ?></td>
                                        </tr>
                                    </table>
                                    <?php if(get_static_option('product_tax') && get_static_option('product_tax_system') == 'inclusive'): ?>
                                        <p class="tax-info"><?php echo e(__('Inclusive of custom duties and taxes where applicable')); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="ordered-product-summery margin-top-30">
                            <h4 class="title"><?php echo e(__('Ordered Products')); ?></h4>
                            <table class="table table-bordered">
                                <thead>
                                <th><?php echo e(__('Thumbnail')); ?></th>
                                <th><?php echo e(__('Product Info')); ?></th>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php 
                                    $product_info = \App\Products::with('lang_front')->find($item['id']);
                                    ?>
                                    <?php if($product_info): ?>
                                    <tr>
                                        <td>
                                            <div class="product-thumbnail">
                                                <?php echo render_image_markup_by_attachment_id($product_info->image ?? '','','thumb'); ?>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-info-wrap">
                                                <h4 class="product-title"><a href="<?php echo e(route('frontend.products.single',[$product_info->lang_front->slug ?? '',$product_info->id])); ?>"><?php echo e($product_info->lang_front->title ?? __('untitled')); ?></a></h4>
                                                <span class="pdetails d-block"><strong><?php echo e(__('Price :')); ?></strong> <?php echo e(amount_with_currency_symbol($product_info->sale_price)); ?></span>
                                                <span class="pdetails d-block"><strong><?php echo e(__('Quantity :')); ?></strong> <?php echo e($item['quantity']); ?></span>
                                                <?php $tax_amount = 0; ?>
                                                <?php if(get_static_option('product_tax_type') == 'individual' && is_tax_enable()): ?>
                                                    <?php
                                                        $percentage = !empty($product_info->tax_percentage) ? $product_info->tax_percentage : 0;
                                                        $tax_amount = ($product_info->sale_price * $item['quantity']) / 100 * $product_info->tax_percentage;
                                                    ?>
                                                    <span class="pdetails d-block text-danger"><strong><?php echo e(__('Tax')); ?> <?php echo e('('.$percentage.'%) :'); ?></strong> +<?php echo e(amount_with_currency_symbol($tax_amount)); ?></span>
                                                <?php endif; ?>
                                                <span class="pdetails d-block"><strong><?php echo e(__('Subtotal :')); ?></strong> <?php echo e(amount_with_currency_symbol($product_info->sale_price * $item['quantity'] + $tax_amount )); ?></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="2"><div class="alert alert-warning"><?php echo e(__('Product Removed')); ?></div></td>
                                    </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/neateller/@core/resources/views/backend/products/product-order-view.blade.php ENDPATH**/ ?>