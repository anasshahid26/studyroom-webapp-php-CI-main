<!-- Dashboard panel ends -->
<?php echo $this->session->flashdata('message');?>
<div class="dashboard-panel">
<?php 
//neatPrint($subjects);
if ($user_idd['is_certificates'] == 0 && $user_idd['is_interview'] == 0){ ?>

    <button class="btn-link-dark dash-btn" name="Submit" type="Submit" onclick="location.href='http://studyroom.live/studyroom/tutor/certificates'"><?php echo ('CERTIFICATES');?></button>


    <button class="btn-link-dark dash-btn" name="Submit" type="Submit" onclick="location.href='http://studyroom.live/studyroom/tutor/interview'"><?php echo ('INTERVIEW');?></button>
<?php }

if($user_idd['is_certificates'] == 1 && $user_idd['is_interview'] == 1) {

        if(count($tutor_types) > 0) { ?>
    <?php echo form_open('tutor/manage-teaching-types', 'id="tutor_subject_mngt" class="form-multi-select"'); ?>
    <div class="custom_accordion1">

        <div class="row">
            <?php
            $i = $counter = 1;
            foreach ($tutor_types

            as $sub)
            {
            if (!is_enable_bbb() && $sub->id == 4)
                continue;
            if ($i == 1)
            {
            ?>
            <div class="col-md-4 col-sm-6">
                <?php
                }
                ?>
                <div class="input-group ">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="<?php echo $sub->id ?>"
                                   name="tutor_selected_types[]" <?php if (in_array($sub->id, $tutorSelectedTypeIds)) echo "checked"; ?>>
                            <span class="checkbox-content">
								<span class="item-content"><?php echo $sub->teaching_type; ?></span>
								<i aria-hidden="true" class="fa fa-check "></i>
								<i class="check-square"></i>
							</span>
                        </label>
                    </div>
                </div>
                <?php
                $i++;
                $counter++;
                if ($i == 3 || count($sub) == $counter) { // three items in a row. Edit this to get more or less items on a row
                    echo '</div>';
                    $i = 1;
                }


                } ?>
            </div>
        </div>
        <button class="btn-link-dark dash-btn" name="Submit"
                type="Submit"><?php echo get_languageword('UPDATE'); ?></button>
        </form>

        <?php
        }} ?>




</div>