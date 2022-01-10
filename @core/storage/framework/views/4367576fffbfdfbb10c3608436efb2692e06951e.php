    <!-- testimonial area start  -->
    <section class="testimonial-area bg-image padding-top-120 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row padding-bottom-45">
                        <div class="col-lg-8">
                            <div class="section-title">
                                <div class="icon">
                                    <i class="<?php echo e(get_static_option('site_heading_icon')); ?>"></i>
                                    <span class="line-three"></span>
                                    <span class="line-four"></span>
                                </div>
                                <h2 class="title"><?php echo e(get_static_option('home_page_testimonial_section_'.$user_select_lang_slug.'_title')); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-carousel-area">
                        <div class="testimonial-carousel-02">
                            <?php $__currentLoopData = $all_testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-testimonial-item-02">
                                <div class="thumb bg-image" <?php echo render_background_image_markup_by_attachment_id($data->image); ?>></div>
                                <div class="content">
                                    <p class="description"><?php echo e($data->description); ?> </p>
                                    <div class="author-details">
                                        <div class="author-meta">
                                            <div class="ratings">
                                                <?php for($i=0; $i<$data->rating_star; $i++): ?>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                <?php endfor; ?>
                                            </div>
                                            <h4 class="title"> - <?php echo e($data->name); ?> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="request-page-form-wrap">
                        <div class="section-title bg-image" <?php echo render_background_image_markup_by_attachment_id(get_static_option('home_page_quote_bg_texture')); ?>>
                            <h4 class="title"><?php echo e(get_static_option('home_page_quote_section_'.$user_select_lang_slug.'_title')); ?></h4>
                            <p><?php echo e(get_static_option('home_page_quote_section_'.$user_select_lang_slug.'_details')); ?></p>
                        </div>
                        <?php echo $__env->make('frontend.partials.quote-form.quote-form-render', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section><?php /**PATH /home/xgenxchi/public_html/laravel/neateller/@core/resources/views/frontend/partials/testimonial/testimonial-variant-02.blade.php ENDPATH**/ ?>