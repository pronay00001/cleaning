<?php $__env->startSection('site-title'); ?>
    <?php echo e($page_post->lang_front->meta_title ?? $page_post->lang_front->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-meta-data'); ?>
    <meta name="description" content="<?php echo e($page_post->lang_front->meta_description); ?>">
    <meta name="tags" content="<?php echo e($page_post->lang_front->meta_tags); ?>">
    <meta name="og:title" content="<?php echo e($page_post->lang_front->og_meta_title); ?>"/>
    <meta name="og:description" content="<?php echo e($page_post->lang_front->og_meta_description); ?>"/>
    <meta name="og:site_name" content="<?php echo e(get_static_option('og_meta_'.$user_select_lang_slug.'_site_name')); ?>"/>
    <meta name="og:url" content="<?php echo e(route('frontend.dynamic.page',[$page_post->lang_front->slug,$page_post->id])); ?>"/>
    <?php echo render_og_meta_image_by_attachment_id($page_post->lang_front->og_meta_image); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e($page_post->lang_front->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="dynamic-page-content-area padding-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dynamic-page-content-wrap">
                        <?php echo $page_post->lang_front->content; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/neateller/@core/resources/views/frontend/pages/dynamic-single.blade.php ENDPATH**/ ?>