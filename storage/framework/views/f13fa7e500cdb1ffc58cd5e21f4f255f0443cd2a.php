<?php echo e(Form::model($employee,array('route' => array('employee.password.update', $employee->id), 'method' => 'post'))); ?>

<div class="row">
    <div class="form-group col-md-12">
        <?php echo e(Form::label('password', __('Password'), ['class' => 'form-label'] )); ?>

       <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
       <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <span class="invalid-feedback" role="alert">
               <strong><?php echo e($message); ?></strong>
           </span>
       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group col-md-12">
        <?php echo e(Form::label('password_confirmation', __('Confirm Password'), ['class' => 'form-label'] )); ?>

        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
</div>
<div class="modal-footer border-0 p-0">
    <button type="button" class="btn  btn-light" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>   
    <button type="submit" class="btn  btn-primary"><?php echo e(__('Update')); ?></button>
</div>
<?php echo e(Form::close()); ?>

<?php /**PATH /home/sites/1a/7/74fc9abc3b/public_html/resources/views/employee/reset.blade.php ENDPATH**/ ?>