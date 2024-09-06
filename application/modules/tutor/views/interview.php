<!-- Dashboard panel -->
<div class="dashboard-panel">
    <?php echo $message;?>
    <?php
    $attributes = array('name' => 'profile_form', 'id' => 'profile_form', 'class' => 'comment-form dark-fields');
    echo form_open_multipart('tutor/interview',$attributes);?>
   <?php
   echo "First you have to Submit all your Certificates and clear the Interview..!!";
   ?>
<!-- Dashboard panel ends -->
