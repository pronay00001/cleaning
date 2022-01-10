
<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/bootstrap-tagsinput.css')); ?>">
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.summernote.css','data' => []]); ?>
<?php $component->withName('summernote.css'); ?>
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
    <?php echo e(__('Edit Blog Post')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
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
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrapp">
                            <h4 class="header-title"><?php echo e(__('Edit Blog Post')); ?>  </h4>
                            <div class="header-title">
                                <a href="<?php echo e(route('admin.blog')); ?>" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('All Blog Post')); ?></a>
                            </div>
                        </div>
                        <form action="<?php echo e(route('admin.blog.update',$blog_post->id)); ?>" method="post" enctype="multipart/form-data"> <?php echo csrf_field(); ?>
                            <ul class="nav nav-tabs" role="tablist">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($loop->first): ?> active <?php endif; ?>"  data-toggle="tab" href="#slider_tab_<?php echo e($lang->slug); ?>" role="tab" aria-controls="home" aria-selected="true"><?php echo e($lang->name); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane fade <?php if($loop->first): ?> show active <?php endif; ?>" id="slider_tab_<?php echo e($lang->slug); ?>" role="tabpanel" >
                                    <?php $__currentLoopData = $blog_post->blog->where('lang',$lang->slug); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-group">
                                        <label for="title"><?php echo e(__('Title')); ?></label>
                                        <input type="text" class="form-control" name="title[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->title); ?>" placeholder="<?php echo e(__('Title')); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label><?php echo e(__('Content')); ?></label>
                                        <input type="hidden" name="blog_content[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->content); ?>">
                                        <div class="summernote" data-content="<?php echo e($data->content); ?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="author"><?php echo e(__('Author')); ?></label>
                                            <input type="text" class="form-control" name="author[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->author); ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="slug"><?php echo e(__('Slug')); ?></label>
                                            <input type="text" class="form-control" name="slug[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->slug); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="title"><?php echo e(__('Blog Tags')); ?></label>
                                            <input type="text" class="form-control" name="tags[<?php echo e($lang->slug); ?>]" data-role="tagsinput" value="<?php echo e($data->tags); ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="meta_tags"><?php echo e(__('Meta Tags')); ?></label>
                                            <input type="text" class="form-control" name="meta_tags[<?php echo e($lang->slug); ?>]" data-role="tagsinput" value="<?php echo e($data->meta_tags); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="meta_title"><?php echo e(__('Meta Title')); ?></label>
                                            <input type="text" class="form-control" name="meta_title[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->meta_title); ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="og_meta_title"><?php echo e(__('Og Meta Title')); ?></label>
                                            <input type="text" class="form-control" name="og_meta_title[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->og_meta_title); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="meta_description"><?php echo e(__('Meta Description')); ?></label>
                                            <textarea type="text" class="form-control" name="meta_description[<?php echo e($lang->slug); ?>]" rows="5" cols="10"><?php echo e($data->meta_description); ?></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="og_meta_description"><?php echo e(__('Og Meta Description')); ?></label>
                                            <textarea type="text" class="form-control" name="og_meta_description[<?php echo e($lang->slug); ?>]" rows="5" cols="10"><?php echo e($data->og_meta_description); ?> </textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6">
                                            <label for="image"><?php echo e(__('Blog Image')); ?></label>
                                            <div class="media-upload-btn-wrapper">
                                                <div class="img-wrap">
                                                    <?php
                                                        $image = get_attachment_image_by_id($data->image,null,true);
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
                                                <input type="hidden" id="image" name="image[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->image); ?>">
                                                <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="<?php echo e(__('Select Image')); ?>" data-modaltitle="<?php echo e(__('Upload Image')); ?>" data-toggle="modal" data-target="#media_upload_modal">
                                                    <?php echo e(__($image_btn_label)); ?>

                                                </button>
                                            </div>
                                            <small class="form-text text-muted"><?php echo e(__('allowed image format: jpg,jpeg,png')); ?></small>
                                        </div>
                                        <div class="form-group col-md-6 col-lg-6">
                                            <label for="og_meta_image"><?php echo e(__('Og Meta Image')); ?></label>
                                            <div class="media-upload-btn-wrapper">
                                                <div class="img-wrap">
                                                    <?php
                                                        $image = get_attachment_image_by_id($data->og_meta_image,null,true);
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
                                                <input type="hidden" id="og_meta_image" name="og_meta_image[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->og_meta_image); ?>">
                                                <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="<?php echo e(__('Select Image')); ?>" data-modaltitle="<?php echo e(__('Upload Image')); ?>" data-toggle="modal" data-target="#media_upload_modal">
                                                    <?php echo e(__($image_btn_label)); ?>

                                                </button>
                                            </div>
                                            <small class="form-text text-muted"><?php echo e(__('allowed image format: jpg,jpeg,png')); ?></small>
                                        </div>
                                        
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="form-group  col-md-6">
                                        <label for="category"><?php echo e(__('Category')); ?></label>
                                        <select name="category_id" class="form-control" id="category">
                                            <option value=""><?php echo e(__("Select Category")); ?></option>
                                            <?php $__currentLoopData = $all_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($category->id == $blog_post->category_id): ?> selected <?php endif; ?>  value="<?php echo e($category->id); ?>"><?php echo e(purify_html($category->lang->name)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="status"><?php echo e(__('Status')); ?></label>
                                        <select name="status" class="form-control" id="status">
                                            <option value="draft" <?php echo e(($blog_post->status == 'draft' )? 'selected' : ''); ?>><?php echo e(__("Draft")); ?></option>
                                            <option value="publish" <?php echo e(($blog_post->status  == 'publish')? 'selected' : ''); ?>><?php echo e(__("Publish")); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" id="update" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Post')); ?></button>
                            </div>
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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.summernote.js','data' => []]); ?>
<?php $component->withName('summernote.js'); ?>
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
    <script src="<?php echo e(asset('assets/backend/js/bootstrap-tagsinput.js')); ?>"></script>
    <script>
       (function ($){
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
    })(jQuery)
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/neateller/@core/resources/views/backend/pages/blog/edit.blade.php ENDPATH**/ ?>