<div class="messenger-sendCard">
    <form id="message-form" method="POST" action="<?php echo e(route('send.message')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label><span class="fas fa-paperclip" style=" margin-top: 14px; padding-right: 15px; margin-left: 10px;"></span><input disabled='disabled' type="file" class="upload-attachment" name="file" accept="image/*, .txt, .rar, .zip"/></label>
        <textarea readonly='readonly' name="message" class="m-send app-scroll" placeholder="<?php echo e(__('Type a message..')); ?>"></textarea>
        <button disabled='disabled'><span class="fas fa-paper-plane" style="margin-top: 2px; margin-right: 17px;"> </span></button>
    </form>
</div>
<?php /**PATH /home/sites/1a/7/74fc9abc3b/public_html/resources/views/vendor/Chatify/layouts/sendForm.blade.php ENDPATH**/ ?>