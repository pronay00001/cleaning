$(document).on('click','#<?php echo e($id); ?>',function () {
    $(this).addClass("disabled")
    $(this).html('<i class="fas fa-spinner fa-spin mr-1"></i> <?php echo e($title); ?>');
});<?php /**PATH C:\xampp\htdocs\project\cleaning\@core\resources\views/components/btn/custom.blade.php ENDPATH**/ ?>