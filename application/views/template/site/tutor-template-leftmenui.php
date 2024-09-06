<div class="panel-group dashboard-menu" id="accordion">
    <div class="dashboard-profile">
        <?php
        $user_id = $this->ion_auth->get_user_id();

        $inst_id = is_inst_tutor($user_id);

        ?>
        <div class="media media-team">
            <a href="<?php echo base_url();?>tutor/index">
                <div class="media-left">
                    <figure class="imghvr-zoom-in">
                        <img class="media-object  img-circle" src="<?php echo get_tutor_img($my_profile->photo, $my_profile->gender);?>" alt="<?php echo $my_profile->first_name;?> <?php echo $my_profile->last_name;?>">
                        <figcaption></figcaption>
                    </figure>
                </div>
                <div class="media-body">
                    <h4><?php echo $my_profile->username;?></h4>
                    <p><?php echo get_languageword('User Login');?>: <?php echo date('d/m/Y H:i:s',$my_profile->last_login );?></p>
                </div>
                <?php if(!$inst_id){?>
                    <p><?php echo get_languageword('net_credits');?>: <strong><?php echo get_user_credits($user_id);?></strong>

                        <span class="pull-right"><?php echo get_languageword('per_credit_value');?>: <strong><?php echo get_system_settings('currency_symbol').get_system_settings('per_credit_value');?></strong></span></p>
                <?php } ?>

            </a>
        </div>
    </div>
    <div class="dashboard-menu-panel">
        <div class="dashboard-link"><a <?php if(isset($activemenu) && $activemenu == 'dashboard') echo 'class="active"';?> href="<?php echo base_url();?>tutor/index"><i class="fa fa-tachometer"></i><?php echo get_languageword('Dashboard');?></a></div>

        <?php if(!$inst_id) { ?>

            <!-- /.panel -->

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseManage">
                            <i class="fa fa-cog"></i><?php echo get_languageword('Manage')?>
                        </a>
                    </h4>
                </div>
                <!--/.panel-heading -->
                <div id="collapseManage" class="panel-collapse <?php if(isset($activemenu) && $activemenu == 'manage') echo 'collapse in'; else echo 'collapse';?>">
                    <div class="panel-body">
                        <ul class="dashboard-links">
                            <li <?php if(isset($activesubmenu) && $activesubmenu == 'certificates') echo 'class="active"';?>><a href="<?php echo base_url();?>tutor/certificates"><?php echo get_languageword('Certificates');?></a></li>
                            <li <?php if(isset($activesubmenu) && $activesubmenu == 'interview') echo 'class="active"';?>><a href="<?php echo base_url();?>tutor/interview"><?php echo get_languageword('Interview');?></a></li>
                        </ul>
                    </div>
                    <!--/.panel-body -->
                </div>
                <!--/.panel-collapse -->
            </div>
            <!-- /.panel -->


        <?php } ?>
        <!-- /.panel -->


        <?php if($inst_id) { ?>
            <div class="panel panel-default">
                <div class="dashboard-link"><a <?php if(isset($activemenu) && $activemenu == 'my_batches') echo 'class="active"';?> href="<?php echo URL_TUTOR_MY_BATCHES;?>"><i class="fa fa-users"></i><?php echo get_languageword('my_batches'); ?></a></div>
            </div>
        <?php } ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="<?php if(isset($activemenu) && $activemenu == 'account') echo ''; else echo 'collapsed';?>" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        <i class="fa fa-user"></i><?php echo get_languageword('Account');?>
                    </a>
                </h4>
            </div>
            <!--/.panel-heading -->
            <div id="collapseThree" class="panel-collapse <?php if(isset($activemenu) && $activemenu == 'account') echo 'collapse in'; else echo 'collapse';?>">
                <div class="panel-body">
                    <ul class="dashboard-links">
                        <li <?php if(isset($activesubmenu) && $activesubmenu == 'personal_info') echo 'class="active"';?>><a href="<?php echo base_url();?>tutor/personal-info"><?php echo get_languageword('Personnel Information')?> </a></li>
                        <li <?php if(isset($activesubmenu) && $activesubmenu == 'profile_information') echo 'class="active"';?>><a href="<?php echo base_url();?>tutor/profile-information"><?php echo get_languageword('Profile Information');?> </a></li>
                        <li <?php if(isset($activesubmenu) && $activesubmenu == 'experience') echo 'class="active"';?>><a href="<?php echo base_url();?>tutor/experience"><?php echo get_languageword('experience');?> </a></li>
                        <li <?php if(isset($activesubmenu) && $activesubmenu == 'update_contact_info') echo 'class="active"';?>><a href="<?php echo base_url();?>tutor/contact-information"><?php echo get_languageword('Contact Information');?></a></li>
                        <li <?php if(isset($activesubmenu) && $activesubmenu == 'gallery') echo 'class="active"';?>><a href="<?php echo base_url();?>tutor/my-gallery"><?php echo get_languageword('Gallery');?></a></li>
                        <li <?php if(isset($activesubmenu) && $activesubmenu == 'change_password') echo 'class="active"';?>><a href="<?php echo base_url();?>auth/change-password"><?php echo get_languageword('Change Password');?></a></li>
                    </ul>
                </div>
                <!--/.panel-body -->
            </div>
            <!--/.panel-collapse -->
        </div>
        <!-- /.panel -->



        <div class="panel panel-default">
            <div class="dashboard-link"><a href="<?php echo base_url();?>auth/logout"><i class="fa fa-sign-out"></i><?php echo get_languageword('Logout');?></a></div>
        </div>

    </div>
</div>