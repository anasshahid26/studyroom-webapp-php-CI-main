
<?php $this->load->view('template/site/header', $grocery_output); ?>

<!-- Page Title Wrap  -->
<div class="page-title-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			</div>
		</div>
	</div>
</div>
<!-- Page Title Wrap  -->

<!-- News Scroller  -->
<?php $this->load->view('template/site/scroller'); ?>
<!-- News Scroller  -->

<!-- Dashboard section  -->
<section class="dashboard-section">
	<div class="container">
		<div class="row offcanvas offcanvas-right row-margin">
		   <div class="col-xs-8 col-sm-4 sidebar-offcanvas" id="sidebar">
               <?php if($user_idd['is_certificates'] == 0 && $user_idd['is_interview'] == 0) { ?>
                   <?php $this->load->view('template/site/tutor-template-leftmenui'); } ?>

               <?php if($user_idd['is_certificates'] == 1 && $user_idd['is_interview'] == 1) { ?>
				<?php $this->load->view('template/site/tutor-template-leftmenu'); } ?>
				<!-- /.panel-group -->
			</div>
			<div class="col-xs-12 col-sm-8 dashboard-content ">
				<!-- breadcrumb -->
				<ol class="breadcrumb dashcrumb">
					<li><a href="#">Home</a></li>
					<li class="active"> <?php if(!empty($pagetitle)) echo $pagetitle; ?></li>
					<?php if(!empty($activesubmenu)) { ?>
					<li class="active"> <?php echo get_languageword($activesubmenu); ?></li>
					<?php } ?>
				</ol>
				<?php 

					echo $this->session->flashdata('message');
                if($user_idd['is_certificates'] == 1 && $user_idd['is_interview'] == 1){
					if(!empty($tutor_courses)) { 

						$this->load->view('tutor/my_batches', array('tutor_courses' => $tutor_courses));
					  }}
				  ?>
                <?php  $this->load->view('template/site/button2.php'); ?>
				<!-- breadcrumb ends -->


			</div>
            <?php if ($user_idd['is_certificates'] == 0 && $user_idd['is_interview'] == 0){ ?>

                <button class="btn-link-dark dash-btn" name="Submit" type="Submit" onclick="location.href='http://studyroom.live/studyroom/tutor/certificates'"><?php echo ('CERTIFICATES');?></button>


                <button class="btn-link-dark dash-btn" name="Submit" type="Submit" onclick="location.href='http://studyroom.live/studyroom/tutor/interview'"><?php echo ('INTERVIEW');?></button>


            <?php }
            if($user_idd['is_certificates'] == 1 && $user_idd['is_interview'] == 1) {
                        if(isset($grocery_output->output)) echo $grocery_output->output; } ?>

		</div>
	</div>
</section>
<!-- Dashboard section  -->
<?php $this->load->view('template/site/footer', $grocery_output); ?>