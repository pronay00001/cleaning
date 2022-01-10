<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Page Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/bootstrap-tagsinput.css')); ?>">
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
                        <h4 class="header-title"><?php echo e(__("Page Name & Slug Settings")); ?></h4>
                        <form action="<?php echo e(route('admin.general.page.settings')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php
                                $page_names = [
                                    ['name'=>'about','slug_example'=>'about-us'],
                                    ['name'=>'contact','slug_example'=>'contact-us'],
                                    ['name'=>'blog','slug_example'=>'blog'],
                                    ['name'=>'price_plan','slug_example'=>'price-plan'],
                                    ['name'=>'service','slug_example'=>'service'],
                                    ['name'=>'product','slug_example'=>'product'],
                                    ['name'=>'appointment','slug_example'=>'appointment'],
                                    ['name'=>'quote','slug_example'=>'quote'],
                                ];
                            ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php $__currentLoopData = $page_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $page_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="from-group mb-3">
                                            <label for="<?php echo e($page_name['name']); ?>_page_slug"><?php echo e(__(Str::ucfirst(str_replace('_',' ',$page_name['name'])).' '.'Page Slug')); ?></label>
                                            <input type="text" class="form-control" id="<?php echo e($page_name['name']); ?>_page_slug" value="<?php echo e(get_static_option($page_name['name'].'_page_slug')); ?>" name="<?php echo e($page_name['name']); ?>_page_slug" placeholder="<?php echo e(__('Slug')); ?>" >
                                            <small><?php echo e(__('slug example:'.$page_name['slug_example'])); ?></small>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </div>
                                <div class="col-lg-6">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a class="nav-item nav-link <?php if($key == 0): ?> active <?php endif; ?>" id="nav-home-tab" data-toggle="tab" href="#nav-home-<?php echo e($lang->slug); ?>" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo e($lang->name); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </nav>
                                    <div class="tab-content margin-top-30" id="nav-tabContent">
                                        <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="tab-pane fade <?php if($key == 0): ?> show active <?php endif; ?>" id="nav-home-<?php echo e($lang->slug); ?>" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <?php $__currentLoopData = $page_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $page_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="accordion-wrapper">
                                                        <div id="accordion-<?php echo e($lang->slug); ?>">
                                                            <div class="card">
                                                                <div class="card-header" id="<?php echo e($page_name['name']); ?>_page_<?php echo e($lang->slug); ?>">
                                                                    <h5 class="mb-0">
                                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php echo e($page_name['name']); ?>_page_content_<?php echo e($lang->slug); ?>" aria-expanded="true" >
                                                                            <span class="page-title"><?php if(!empty(get_static_option($page_name['name'].'_page_'.$lang->slug.'_name'))): ?> <?php echo e(get_static_option($page_name['name'].'_page_'.$lang->slug.'_name')); ?> <?php else: ?> <?php echo e(__(Str::ucfirst($page_name['name']))); ?>  <?php endif; ?></span>
                                                                        </button>
                                                                    </h5>
                                                                </div>
                                                                <div id="<?php echo e($page_name['name']); ?>_page_content_<?php echo e($lang->slug); ?>" class="collapse"  data-parent="#accordion-<?php echo e($lang->slug); ?>">
                                                                    <div class="card-body">
                                                                        <div class="from-group">
                                                                            <label for="<?php echo e($page_name['name']); ?>_page_<?php echo e($lang->slug); ?>_name"><?php echo e(__('Name')); ?></label>
                                                                            <input type="text" class="form-control" name="<?php echo e($page_name['name']); ?>_page_<?php echo e($lang->slug); ?>_name" id="<?php echo e($page_name['name']); ?>_page_<?php echo e($lang->slug); ?>_name" value="<?php echo e(get_static_option($page_name['name'].'_page_'.$lang->slug.'_name')); ?>"  placeholder="<?php echo e(__('Name')); ?>" >
                                                                        </div>
                                                                        <div class="form-group margin-top-20">
                                                                            <label for="<?php echo e($page_name['name']); ?>_page_<?php echo e($lang->slug); ?>_meta_tags"><?php echo e(__('Meta Tags')); ?></label>
                                                                            <input type="text" name="<?php echo e($page_name['name']); ?>_page_<?php echo e($lang->slug); ?>_meta_tags"  class="form-control" data-role="tagsinput" value="<?php echo e(get_static_option($page_name['name'].'_page_'.$lang->slug.'_meta_tags')); ?>" id="<?php echo e($page_name['name']); ?>_page_<?php echo e($lang->slug); ?>_meta_tags">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="<?php echo e($page_name['name']); ?>_page_<?php echo e($lang->slug); ?>_meta_description"><?php echo e(__('Meta Description')); ?></label>
                                                                            <textarea name="<?php echo e($page_name['name']); ?>_page_<?php echo e($lang->slug); ?>_meta_description"  class="form-control" rows="5" id="<?php echo e($page_name['name']); ?>_page_<?php echo e($lang->slug); ?>_meta_description"><?php echo e(get_static_option($page_name['name'].'_page_'.$lang->slug.'_meta_description')); ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
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
    <script src="<?php echo e(asset('assets/backend/js/bootstrap-tagsinput.js')); ?>"></script>
    <script>
            (function($){
                "use strict";
                $(document).ready(function (e) {
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
                    $('.page-name').on('bind','change paste keyup',function (e) {
                        $(this).parent().parent().parent().prev().find('.page-title').text($(this).val());
                    })
                }) 
            })(jQuery);        
        
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\cleaning\@core\resources\views/backend/general-settings/page-settings.blade.php ENDPATH**/ ?>