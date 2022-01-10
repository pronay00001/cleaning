<a tabindex="0" class="btn btn-<?php echo e($btntype ?? 'success'); ?> btn-xs mb-3 mr-1 swal_alert_delete_button" data-msg="<?php echo e($msg); ?>" data-alerttype="<?php echo e($alerttype ?? 'warning'); ?>" data-desc="<?php echo e($desc ?? ''); ?>" data-alertbtntext="<?php echo e($alertbtntext ?? __('Yes,Please')); ?>">
    <?php echo e($text); ?>

</a>

<form method='post' action='<?php echo e($url); ?>' class="d-none">
<input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
<br>
<button type="submit" class="swal_alert_form_submit_btn d-none"></button>
 </form><?php /**PATH C:\xampp\htdocs\project\cleaning\@core\resources\views/components/custom-alert.blade.php ENDPATH**/ ?>