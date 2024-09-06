<!-- Dashboard panel -->
<?php
$user_id = $this->ion_auth->get_user_id();

$inst_id = is_inst_tutor($user_id);

?>
<div class="dashboard-panel">

    <?php echo $message;?>
    <div class="row">
        <?php if(!$inst_id){ ?>

            <button class="btn-link-dark dash-btn" name="Submit" type="Submit" onclick="location.href='http://studyroom.live/studyroom/tutor/certificates'"><?php echo ('CERTIFICATES');?></button>


            <button class="btn-link-dark dash-btn" name="Submit" type="Submit" onclick="location.href='http://studyroom.live/studyroom/tutor/interview'"><?php echo ('INTERVIEW');?></button>

        <?php } else { ?>


        <?php foreach($inst_tutor_dashboard as $row){?>
            <div class="col-md-4 pad10">
                <div class="dash-block-inst">
                    <p><span><?php echo get_languageword('Institute:');?></span><?php echo $row->inst_name;?></p>
                    <p><span><?php echo get_languageword('Coures:')?></span><?php echo $row->courses;?></p>
                    <div class="media-left"><?php echo $row->batches;?></div>
                    <div class="media-body"><?php echo get_languageword('No of Batches').'<br/>'.get_languageword('Tutoring')?></div>
                </div>
            </div>
        <?php } ?>



        <?php }?>
    </div>

</div>
<!-- Dashboard panel ends -->