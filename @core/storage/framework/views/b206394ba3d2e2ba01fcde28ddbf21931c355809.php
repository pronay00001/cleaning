<!-- footer area start -->
<footer class="footer-area bg-blue-02 bg-image" <?php echo render_background_image_markup_by_attachment_id(get_static_option('site_footer_img')); ?>>
    <div class="footer-top padding-bottom-50 padding-top-80">
        <div class="container">
            <div class="row">
                <?php echo render_frontend_sidebar('footer',['column' => true]); ?>

            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-inner">
                    <?php echo render_footer_copyright_text(); ?>

                    </div>
                </div>
            </div>    
        </div>
    </div>
</footer>
<!-- footer area end -->
<!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
<!-- back to top area end -->

<?php if(preg_match('/(xgenious)/',url('/'))): ?>
    <div class="buy-now-wrap">
        <ul class="buy-list">
            <li><a target="_blank"href="https://xgenious.com/docs/neateller/" data-container="body" data-toggle="popover" data-placement="left" data-content="<?php echo e(__('Documentation')); ?>"><i class="far fa-file-alt"></i></a></li>
            <li><a target="_blank"href="https://1.envato.market/AoPOND"><i class="fas fa-shopping-cart"></i></a></li>
            <li><a target="_blank"href="https://xgenious51.freshdesk.com/"><i class="fas fa-headset"></i></a></li>
        </ul>
    </div>
<?php endif; ?>

<!-- jquery -->
<script src="<?php echo e(asset('assets/common/js/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/common/js/jquery-migrate-3.3.2.min.js')); ?>"></script>
<!-- popup -->
<?php echo $__env->make('frontend.partials.popup.popup-structure', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- bootstrap -->
<script src="<?php echo e(asset('assets/frontend/js/bootstrap.min.js')); ?>"></script>
<!-- magnific popup -->
<script src="<?php echo e(asset('assets/frontend/js/jquery.magnific-popup.js')); ?>"></script>
<!-- wow -->
<script src="<?php echo e(asset('assets/frontend/js/wow.min.js')); ?>"></script>
<!-- owl carousel -->
<script src="<?php echo e(asset('assets/frontend/js/owl.carousel.min.js')); ?>"></script>
<!-- waypoint -->
<script src="<?php echo e(asset('assets/frontend/js/waypoints.min.js')); ?>"></script>
<!-- counterup -->
<script src="<?php echo e(asset('assets/frontend/js/jquery.counterup.min.js')); ?>"></script>
<!-- main js -->
<script src="<?php echo e(asset('assets/frontend/js/main.js')); ?>"></script>
<!-- Progress-Bar -->
<script src="<?php echo e(asset('assets/frontend/js/jQuery.rProgressbar.min.js')); ?>"></script>
<!-- Progress-Bar -->
<script src="<?php echo e(asset('assets/frontend/js/active.rProgressbar.js')); ?>"></script>
<!-- dynamic js -->
<script src="<?php echo e(asset('assets/frontend/js/dynamic-script.js')); ?>"></script>
<!-- toastr js -->
<script src="<?php echo e(asset('assets/common/js/toastr.min.js')); ?>"></script>

<?php if(!empty(get_static_option('site_google_captcha_v3_site_key')) && (request()->routeIs('homepage.demo')) || request()->routeIs('homepage') ): ?>
    <script
            src="https://www.google.com/recaptcha/api.js?render=<?php echo e(get_static_option('site_google_captcha_v3_site_key')); ?>"></script>
    <script>
        (function() {
            "use strict";
            grecaptcha.ready(function () {
                grecaptcha.execute("<?php echo e(get_static_option('site_google_captcha_v3_site_key')); ?>", {action: 'homepage'}).then(function (token) {
                    document.getElementById('gcaptcha_token').value = token;
                });
            });
        })();
    </script>
<?php endif; ?>


<script>
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
</script>
<?php echo $__env->make('frontend.partials.popup.popup-jspart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.partials.gdpr-cookie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    (function($){
        "use strict";
        $(document).ready(function(){
            $(document).on('click','.language_dropdown ul li',function(e){
                var el = $(this);
                el.parent().parent().find('.selected-language').text(el.text());
                el.parent().removeClass('show');
                $.ajax({
                    url : "<?php echo e(route('frontend.langchange')); ?>",
                    type: "GET",
                    data:{
                        'lang' : el.data('value')
                    },
                    success:function (data) {
                        location.reload();
                    }
                })
            });
        });
    }(jQuery));
</script>
<?php echo $__env->yieldContent('scripts'); ?>
<!-- tawk api key  -->
<?php echo get_static_option('tawk_api_key'); ?>

</body>
</html><?php /**PATH /home/xgenxchi/public_html/laravel/neateller/@core/resources/views/frontend/partials/footer.blade.php ENDPATH**/ ?>