<!-- Dashboard panel -->

<?php echo $this->session->flashdata('message');?>
<div class="dashboard-panel">
    <?php echo $message;?>
    <div class="row">
        <?php
        $attributes = array('name' => 'profile_form', 'id' => 'profile_form', 'class' => 'comment-form dark-fields');
        echo form_open_multipart('tutor/interview',$attributes);?>
        <?php

        echo "First you have to give the interview to the admin.!!";

        ?>




    </div>

</div>
<!-- Dashboard panel ends -->