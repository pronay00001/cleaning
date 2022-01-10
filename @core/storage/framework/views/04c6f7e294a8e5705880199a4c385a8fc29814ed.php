<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/colorpicker.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Basic Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.msg.success','data' => []]); ?>
<?php $component->withName('msg.success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.msg.error','data' => []]); ?>
<?php $component->withName('msg.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__("Basic Settings")); ?></h4>
                        <form action="<?php echo e(route('admin.general.basic.settings')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.lang-nav','data' => []]); ?>
<?php $component->withName('lang-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($key == 0): ?> show active <?php endif; ?>" id="nav-home-<?php echo e($lang->slug); ?>" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="form-group">
                                            <label for="site_<?php echo e($lang->slug); ?>_title"><?php echo e(__('Site Title')); ?></label>
                                            <input type="text" name="site_<?php echo e($lang->slug); ?>_title"  class="form-control" value="<?php echo e(get_static_option('site_'.$lang->slug.'_title')); ?>" id="site_<?php echo e($lang->slug); ?>_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="site_<?php echo e($lang->slug); ?>_tag_line"><?php echo e(__('Site Tag Line')); ?></label>
                                            <input type="text" name="site_<?php echo e($lang->slug); ?>_tag_line"  class="form-control" value="<?php echo e(get_static_option('site_'.$lang->slug.'_tag_line')); ?>" id="site_<?php echo e($lang->slug); ?>_tag_line">
                                        </div>
                                        <div class="form-group">
                                            <label for="site_<?php echo e($lang->slug); ?>_footer_copyright"><?php echo e(__('Footer Copyright')); ?></label>
                                            <input type="text" name="site_<?php echo e($lang->slug); ?>_footer_copyright"  class="form-control" value="<?php echo e(get_static_option('site_'.$lang->slug.'_footer_copyright')); ?>" id="site_<?php echo e($lang->slug); ?>_footer_copyright">
                                            <small class="form-text text-muted"><?php echo e(__('{copy} will replace by ©; and {year} will be replaced by current year.')); ?></small>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="form-group">
                                <label for="language_select_option"><strong><?php echo e(__('Language Select Show or Hide')); ?></strong></label>
                                <label class="switch yes">
                                    <input type="checkbox" name="language_select_option"  <?php if(!empty(get_static_option('language_select_option'))): ?> checked <?php endif; ?> id="language_select_option">
                                    <span class="slider onoff"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="site_payment_gateway"><strong><?php echo e(__('Payment Gateway')); ?></strong></label>
                                <label class="switch">
                                    <input type="checkbox" name="site_payment_gateway"  <?php if(!empty(get_static_option('site_payment_gateway'))): ?> checked <?php endif; ?> id="site_payment_gateway">
                                    <span class="slider-enable-disable"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="disable_user_email_verify"><strong><?php echo e(__('User Email Verify')); ?></strong></label>
                                <label class="switch">
                                    <input type="checkbox" name="disable_user_email_verify"  <?php if(!empty(get_static_option('disable_user_email_verify'))): ?> checked <?php endif; ?> id="disable_user_email_verify">
                                    <span class="slider-enable-disable"></span>
                                </label>
                                <small class="form-text text-muted"><?php echo e(__('Disable, means user must have to verify their email account in order to access his/her dashboard.')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="site_maintenance_mode"><strong><?php echo e(__('Maintenance Mode')); ?></strong></label>
                                <label class="switch yes">
                                    <input type="checkbox" name="site_maintenance_mode"  <?php if(!empty(get_static_option('site_maintenance_mode'))): ?> checked <?php endif; ?> id="site_maintenance_mode">
                                    <span class="slider-enable-disable"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="site_google_captcha_enable"><strong><?php echo e(__('Enable/Disable Google Captcha')); ?></strong></label>
                                <label class="switch yes">
                                    <input type="checkbox" name="site_google_captcha_enable"  <?php if(!empty(get_static_option('site_google_captcha_enable'))): ?> checked <?php endif; ?>>
                                    <span class="slider-enable-disable"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="site_force_ssl_redirection"><strong><?php echo e(__('Enable Force SSL Redirection')); ?></strong></label>
                                <label class="switch yes">
                                    <input type="checkbox" name="site_force_ssl_redirection"  <?php if(!empty(get_static_option('site_force_ssl_redirection'))): ?> checked <?php endif; ?>>
                                    <span class="slider-enable-disable"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="admin_loader_animation"><strong><?php echo e(__('Admin Preloader Animation')); ?></strong></label>
                                <label class="switch yes">
                                    <input type="checkbox" name="admin_loader_animation"  <?php if(!empty(get_static_option('admin_loader_animation'))): ?> checked <?php endif; ?> id="admin_loader_animation">
                                    <span class="slider-enable-disable"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="site_loader_animation"><strong><?php echo e(__('Site Preloader Animation')); ?></strong></label>
                                <label class="switch yes">
                                    <input type="checkbox" name="site_loader_animation"  <?php if(!empty(get_static_option('site_loader_animation'))): ?> checked <?php endif; ?> id="site_loader_animation">
                                    <span class="slider-enable-disable"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="guest_order_system_status"><strong><?php echo e(__('Guest Order System')); ?></strong></label>
                                <label class="switch yes">
                                    <input type="checkbox" name="guest_order_system_status"  <?php if(!empty(get_static_option('guest_order_system_status'))): ?> checked <?php endif; ?> id="guest_order_system_status">
                                    <span class="slider-enable-disable"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="admin_panel_rtl_status"><strong><?php echo e(__('Admin Panel RTL Support')); ?></strong></label>
                                <label class="switch yes">
                                    <input type="checkbox" name="admin_panel_rtl_status"  <?php if(!empty(get_static_option('admin_panel_rtl_status'))): ?> checked <?php endif; ?> id="admin_panel_rtl_status">
                                    <span class="slider-enable-disable"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="site_main_color_one"><?php echo e(__('Site Main Color One')); ?></label>
                                <input type="text" name="site_main_color_one" style="background-color: <?php echo e(get_static_option('site_main_color_one')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_main_color_one')); ?>" id="site_main_color_one">
                                <small class="form-text text-muted"><?php echo e(__('you can change -site main color- from here, it will replace the website main color')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="site_main_color_two"><?php echo e(__('Site Main Color Two')); ?></label>
                                <input type="text" name="site_main_color_two" style="background-color: <?php echo e(get_static_option('site_main_color_two')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_main_color_two')); ?>" id="site_main_color_two">
                                <small class="form-text text-muted"><?php echo e(__('you can change -site base color- from here, it will replace the website base color')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="site_secondary_color"><?php echo e(__('Site Secondary Color')); ?></label>
                                <input type="text" name="site_secondary_color" style="background-color: <?php echo e(get_static_option('site_secondary_color')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_secondary_color')); ?>" id="site_secondary_color">
                                <small class="form-text text-muted"><?php echo e(__('you can change -site secondary color- from here, it will replace the website secondary color')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="site_heading_color"><?php echo e(__('Site Heading Color')); ?></label>
                                <input type="text" name="site_heading_color" style="background-color: <?php echo e(get_static_option('site_heading_color')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_heading_color')); ?>" id="site_heading_color">
                                <small class="form-text text-muted"><?php echo e(__('you can change -site heading color- from here, it will replace the website heading color')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="site_paragraph_color"><?php echo e(__('Site Paragraph Color')); ?></label>
                                <input type="text" name="site_paragraph_color" style="background-color: <?php echo e(get_static_option('site_paragraph_color')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_paragraph_color')); ?>" id="site_paragraph_color">
                                <small class="form-text text-muted"><?php echo e(__('you can change -site paragraph color- from here, it will replace the website paragraph color')); ?></small>
                            </div>
                            <button type="submit" id="update" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Changes')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/colorpicker.js')); ?>"></script>
    <script>
        (function($){
            "use strict";
            $(document).ready(function(){
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon-picker','data' => []]); ?>
<?php $component->withName('icon-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.btn.update','data' => []]); ?>
<?php $component->withName('btn.update'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                initColorPicker('#site_main_color_one');
                initColorPicker('#site_main_color_two');
                initColorPicker('#site_secondary_color');
                initColorPicker('#site_heading_color');
                initColorPicker('#site_paragraph_color');
                function initColorPicker(selector){
                    $(selector).ColorPicker({
                        color: '#852aff',
                        onShow: function (colpkr) {
                            $(colpkr).fadeIn(500);
                            return false;
                        },
                        onHide: function (colpkr) {
                            $(colpkr).fadeOut(500);
                            return false;
                        },
                        onChange: function (hsb, hex, rgb) {
                            $(selector).css('background-color', '#' + hex);
                            $(selector).val('#' + hex);
                        }
                    });
                }
            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/neateller/@core/resources/views/backend/general-settings/basic.blade.php ENDPATH**/ ?>