
<?php $__env->startSection('style'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.css','data' => []]); ?>
<?php $component->withName('media.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Edit Price Plan')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12 mt-5">
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
                        <div class="header-wrapp">
                            <h4 class="header-title"><?php echo e(__('Edit Price Plan')); ?>  </h4>
                            <div class="header-title">
                                <a href="<?php echo e(route('admin.price.plan')); ?>" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('All Price Plans')); ?></a>
                            </div>
                        </div>
                        <form action="<?php echo e(route('admin.price.plan.update',$price_plan->id)); ?>" method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                            <ul class="nav nav-tabs" role="tablist">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($loop->first): ?> active <?php endif; ?>"  data-toggle="tab" href="#slider_tab_<?php echo e($lang->slug); ?>" role="tab" aria-controls="home" aria-selected="true"><?php echo e($lang->name); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="tab-content margin-top-40" >
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($loop->first): ?> show active <?php endif; ?>" id="slider_tab_<?php echo e($lang->slug); ?>" role="tabpanel" >
                                        <?php $__currentLoopData = $price_plan->lang_all->where('lang',$lang->slug); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="form-group">
                                                <label for="title"><?php echo e(__('Title')); ?></label>
                                                <input type="text" class="form-control" name="title[<?php echo e($lang->slug); ?>]" value="<?php echo e($item->title); ?>" placeholder="<?php echo e(__('Title')); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="type"><?php echo e(__('Type')); ?></label>
                                                <input type="text" class="form-control" name="type[<?php echo e($lang->slug); ?>]" value="<?php echo e($item->type); ?>" placeholder="<?php echo e(__('Type')); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="features"><?php echo e(__('Features')); ?></label>
                                                <textarea name="features[<?php echo e($lang->slug); ?>]" class="form-control" rows="5" id="features"><?php echo e($item->features); ?></textarea>
                                                <small class="form-text text-muted"><?php echo e(__('Separate feature by entering a new line.')); ?></small> 
                                            </div>
                                            <div class="form-group">
                                                <label for="btn_text"><?php echo e(__('Button Text')); ?></label>
                                                <input type="text" class="form-control" name="btn_text[<?php echo e($lang->slug); ?>]" value="<?php echo e($item->btn_text); ?>" placeholder="<?php echo e(__('Button Text')); ?>">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="form-group">
                                <label for="btn_url"><?php echo e(__('Button URL')); ?></label>
                                <input type="text" class="form-control"  id="btn_url" value="<?php echo e($price_plan->btn_url); ?>"  name="btn_url" placeholder="<?php echo e(__('Button URL')); ?>">
                                <small class="form-text text-danger"><?php echo e(__('Please leave it blank if you want to use the default package ordering system')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="price"><?php echo e(__('Price')); ?></label>
                                <input type="number" class="form-control"  id="price" value="<?php echo e($price_plan->price); ?>"  name="price" placeholder="<?php echo e(__('Price')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="image"><?php echo e(__('Image')); ?></label>
                                <div class="media-upload-btn-wrapper">
                                    <div class="img-wrap">
                                        <?php
                                            $image = get_attachment_image_by_id($price_plan->image,null,true);
                                            $image_btn_label = 'Upload Image';
                                        ?>
                                        <?php if(!empty($image)): ?>
                                            <div class="attachment-preview">
                                                <div class="thumbnail">
                                                    <div class="centered">
                                                        <img class="avatar user-thumb" src="<?php echo e($image['img_url']); ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php  $image_btn_label = 'Change Image'; ?>
                                        <?php endif; ?>
                                    </div>
                                    <input type="hidden" id="image" name="image" value="<?php echo e($price_plan->image); ?>">
                                    <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="<?php echo e(__('Select Image')); ?>" data-modaltitle="<?php echo e(__('Upload Image')); ?>" data-toggle="modal" data-target="#media_upload_modal">
                                        <?php echo e(__($image_btn_label)); ?>

                                    </button>
                                </div>
                                <small class="form-text text-muted"><?php echo e(__('360 x 160 pixels (recommended)')); ?></small>
                            </div>
                            <button type="submit" id="update" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.markup','data' => []]); ?>
<?php $component->withName('media.markup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.js','data' => []]); ?>
<?php $component->withName('media.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <script>
    (function($){
    "use strict";
    $(document).ready(function () {
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
    });
    })(jQuery);
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/neateller/@core/resources/views/backend/pages/price-plan/price-plan-edit.blade.php ENDPATH**/ ?>