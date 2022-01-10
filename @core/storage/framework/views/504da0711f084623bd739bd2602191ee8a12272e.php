<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Edit Products')); ?>

<?php $__env->stopSection(); ?>
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
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/bootstrap-tagsinput.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/bootstrap-datepicker.min.css')); ?>">
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
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex justify-content-between">
                            <h4 class="header-title"><?php echo e(__('Edit Products')); ?></h4>
                            <a href="<?php echo e(route('admin.products.all')); ?>" class="btn btn-info"><?php echo e(__('All Products')); ?></a>
                        </div>
                        <form action="<?php echo e(route('admin.products.update')); ?>" method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
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
                                        <?php $__currentLoopData = $product->lang_all->where('lang',$lang->slug); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-group">
                                            <label for="title"><?php echo e(__('Title')); ?></label>
                                            <input type="text" class="form-control"   name="title[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->title); ?>" placeholder="<?php echo e(__('Title')); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="slug"><?php echo e(__('Slug')); ?></label>
                                            <input type="text" class="form-control"  name="slug[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->slug); ?>" placeholder="<?php echo e(__('slug')); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="badge"><?php echo e(__('Badge')); ?></label>
                                            <input type="text" class="form-control"  name="badge[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->badge); ?>" placeholder="<?php echo e(__('eg: New')); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label><?php echo e(__('Description')); ?></label>
                                            <input type="hidden" name="description[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->description); ?>">
                                            <div class="summernote" data-content="<?php echo e($data->description); ?>"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="short_description"><?php echo e(__('Short Description')); ?></label>
                                            <textarea name="short_description[<?php echo e($lang->slug); ?>]" id="short_description" class="form-control max-height-120" cols="30" rows="4" placeholder="<?php echo e(__('Short Description')); ?>"><?php echo e($data->short_description); ?></textarea>
                                        </div>
                                        <div class="form-group attributes-field">
                                            <label for="attributes"><?php echo e(__('Attributes')); ?></label>
                                            <?php
                                                $att_title = unserialize($data->attributes_title,['class' => false]);
                                                $att_descr = unserialize($data->attributes_description,['class' => false]);
                                            ?>
                                            <?php if(!empty($att_title)): ?>
                                            <?php $__currentLoopData = $att_title; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $att_title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="attribute-field-wrapper" data-language="<?php echo e($lang->slug); ?>">
                                                   <input type="text" class="form-control"  id="attributes" name="attributes_title[<?php echo e($lang->slug); ?>][]" value="<?php echo e($att_title); ?>">
                                                   <textarea name="attributes_description[<?php echo e($lang->slug); ?>][]"  class="form-control" rows="5"><?php echo e(purify_html($att_descr[$key]) ?? ''); ?></textarea>
                                                  <div class="icon-wrapper">
                                                      <span class="add_attributes" data-lang="<?php echo e($lang->slug); ?>"><i class="ti-plus"></i></span>
                                                      <?php if($key > 0): ?> <span class="remove_attributes"><i class="ti-minus"></i></span> <?php endif; ?>
                                                  </div>
                                               </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <div class="attribute-field-wrapper">
                                                    <input type="text" class="form-control"  id="attributes" name="attributes_title[<?php echo e($lang->slug); ?>][]" placeholder="<?php echo e(__('Title')); ?>">
                                                    <textarea name="attributes_description[<?php echo e($lang->slug); ?>][]"  class="form-control" rows="5" placeholder="<?php echo e(__('Value')); ?>"></textarea>
                                                    <div class="icon-wrapper">
                                                        <span class="add_attributes" data-lang="<?php echo e($lang->slug); ?>"><i class="ti-plus"></i></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="meta_title"><?php echo e(__('Meta Title')); ?></label>
                                                <input type="text" name="meta_title[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->meta_title); ?>" class="form-control" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="og_meta_title"><?php echo e(__('OG Meta Title')); ?></label>
                                                <input type="text" name="og_meta_title[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->og_meta_title); ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="meta_description"><?php echo e(__('Meta Description')); ?></label>
                                                <textarea name="meta_description[<?php echo e($lang->slug); ?>]" class="form-control" rows="5" id="meta_description"><?php echo e($data->meta_description); ?></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="og_meta_description"><?php echo e(__('OG Meta Description')); ?></label>
                                                <textarea name="og_meta_description[<?php echo e($lang->slug); ?>]" class="form-control" rows="5" id="og_meta_description"><?php echo e($data->og_meta_description); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="meta_tags"><?php echo e(__('Meta Tags')); ?></label>
                                                <input type="text" name="meta_tags[<?php echo e($lang->slug); ?>]" class="form-control" data-role="tagsinput"
                                                    id="meta_tags" value="<?php echo e($data->meta_tags); ?>" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label for="og_meta_image[<?php echo e($lang->slug); ?>]"><?php echo e(__('OG Meta Image')); ?></label>
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
                                                        <input type="hidden" id="og_meta_image[<?php echo e($lang->slug); ?>]" name="og_meta_image[<?php echo e($lang->slug); ?>]" value="<?php echo e($data->og_meta_image); ?>">
                                                        <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="<?php echo e(__('Select Image')); ?>" data-modaltitle="<?php echo e(__('Upload Image')); ?>" data-toggle="modal" data-target="#media_upload_modal">
                                                            <?php echo e(__($image_btn_label)); ?>

                                                        </button>
                                                    </div>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="form-group">
                                <label for="category"><?php echo e(__('Category')); ?></label>
                                <select name="category_id" class="form-control" id="category">
                                    <option value=""><?php echo e(__("Select Category")); ?></option>
                                    <?php $__currentLoopData = $all_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if($product->category_id == $category->id): ?> selected <?php endif; ?> value="<?php echo e($category->id); ?>"><?php echo e(purify_html($category->lang->name)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="regular_price"><?php echo e(__('Regular Price')); ?></label>
                                    <input type="number" class="form-control"  id="regular_price" name="regular_price" value="<?php echo e($product->regular_price); ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sale_price"><?php echo e(__('Sale Price')); ?></label>
                                    <input type="number" class="form-control"  id="sale_price" name="sale_price" value="<?php echo e($product->sale_price); ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="sku"><?php echo e(__('SKU')); ?></label>
                                    <input type="text" class="form-control"  id="sku" name="sku" value="<?php echo e($product->sku); ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="stock_status"><?php echo e(__('Stock')); ?></label>
                                    <select name="stock_status" class="form-control" id="stock_status">
                                        <option <?php if($product->stock_status == 'in_stock'): ?> selected <?php endif; ?> value="in_stock"><?php echo e(__('In Stock')); ?></option>
                                        <option <?php if($product->stock_status == 'out_stock'): ?> selected <?php endif; ?> value="out_stock"><?php echo e(__('Out Of Stock')); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="is_downloadable"><strong><?php echo e(__('Is Downloadable')); ?></strong></label>
                                <label class="switch">
                                    <input type="checkbox"  <?php if($product->is_downloadable): ?> checked <?php endif; ?> name="is_downloadable" id="is_downloadable">
                                    <span class="slider-yes-no"></span>
                                </label>
                            </div>
                            <div class="form-group" style="display: none;">
                                <label for="downloadable_file"><?php echo e(__('Downloadable File')); ?></label>
                                <p class="info-text">
                                    <?php if(file_exists('assets/uploads/downloadable/'.$product->downloadable_file)): ?>
                                        <a href="<?php echo e(route('admin.products.file.download',$product->id)); ?>" target="_blank"><?php echo e($product->downloadable_file); ?></a>
                                    <?php endif; ?>
                                </p>
                                <input type="file" name="downloadable_file"  class="form-control" id="downloadable_file">
                                <span class="info-text text-danger"><?php echo e(__('only zip file is allowed')); ?></span>
                            </div>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.fields.image','data' => ['name' => 'image','id' => $product->image,'title' => __('Image'),'dimentions' => '1920 x 1280']]); ?>
<?php $component->withName('fields.image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('image'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->image),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Image')),'dimentions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('1920 x 1280')]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <div class="form-group">
                                <label for="image"><?php echo e(__('Gallery')); ?></label>
                                <?php
                                    $gallery_images = !empty( $product->gallery) ? explode('|', $product->gallery) : [];
                                ?>
                                <div class="media-upload-btn-wrapper">
                                    <div class="img-wrap">
                                        <?php $__currentLoopData = $gallery_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gl_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $work_section_img = get_attachment_image_by_id($gl_img,null,true);
                                            ?>
                                            <?php if(!empty($work_section_img)): ?>
                                                <div class="attachment-preview">
                                                    <div class="thumbnail">
                                                        <div class="centered">
                                                            <img class="avatar user-thumb" src="<?php echo e($work_section_img['img_url']); ?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <input type="hidden" name="gallery" value="<?php echo e($product->gallery); ?>">
                                    <button type="button" class="btn btn-info media_upload_form_btn" data-mulitple="true" data-btntitle="<?php echo e(__('Select Image')); ?>" data-modaltitle="<?php echo e(__('Upload Image')); ?>" data-toggle="modal" data-target="#media_upload_modal">
                                        <?php echo e(__('Upload Image')); ?>

                                    </button>
                                </div>
                                <small><?php echo e(__('Recommended image size 1920x1280')); ?></small>
                            </div>
                            <?php if(get_static_option('product_tax_type') == 'individual'): ?>
                            <div class="form-group">
                                <label for="tax_percentage"><?php echo e(__('Tax Percentage')); ?></label>
                                <input type="number" class="form-control"  id="tax_percentage" name="tax_percentage" value="<?php echo e($product->tax_percentage); ?>">
                            </div>
                            <?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.fields.status','data' => ['name' => 'status','title' => __('Status'),'value' => $product->status]]); ?>
<?php $component->withName('fields.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('status'),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Status')),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->status)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <button type="submit" id="save" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Save Changes')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('backend.partials.media-upload.media-upload-markup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/bootstrap-datepicker.min.js')); ?>"></script>
    <script>
    (function ($){
    "use strict";
        $(document).ready(function () {
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.btn.save','data' => []]); ?>
<?php $component->withName('btn.save'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            $(document).on('change','#is_downloadable',function (e) {
                e.preventDefault();
                isDownloadableCheck('#is_downloadable');
            });
            $(document).on('change','#is_downloadable',function (e) {
                e.preventDefault();
                isDownloadableCheck('#is_downloadable');
            });
            $(document).on('click','.attribute-field-wrapper .add_attributes',function (e) {
               e.preventDefault();
                var selectedLang = $(this).parent().parent().data('language');
                $(this).parent().parent().parent().append(' <div class="attribute-field-wrapper">\n' +
                    '<input type="text" class="form-control"  id="attributes" name="attributes_title['+selectedLang+'][]" placeholder="<?php echo e(__('Title')); ?>">\n' +
                    '<textarea name="attributes_description['+selectedLang+'][]"  class="form-control" rows="5" placeholder="<?php echo e(__('Value')); ?>"></textarea>\n' +
                    '<div class="icon-wrapper">\n' +
                    '<span class="add_attributes"><i class="ti-plus"></i></span>\n' +
                    '<span class="remove_attributes"><i class="ti-minus"></i></span>\n' +
                    '</div>\n' +
                    '</div>');

            });
            isDownloadableCheck('#is_downloadable');
            $(document).on('click','.attribute-field-wrapper .remove_attributes',function (e) {
                e.preventDefault();
                $(this).parent().parent().remove();
            });

            function isDownloadableCheck($selector) {
                var dnFile = $('#downloadable_file');
                var dnFileUrl = $('#downloadable_file_link');
                if($($selector).is(':checked')){
                    dnFile.parent().show();
                    dnFileUrl.parent().show();
                }else{
                    dnFile.parent().hide();
                    dnFileUrl.parent().hide();
                }
            }
        });
    })(jQuery)
    </script>
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
    <script src="<?php echo e(asset('assets/backend/js/bootstrap-tagsinput.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/neateller/@core/resources/views/backend/products/edit-product.blade.php ENDPATH**/ ?>