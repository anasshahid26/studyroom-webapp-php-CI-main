<?php $this->load->view('template/site/header'); ?>
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

            <ol class="breadcrumb dashcrumb">

                <li><a href="<?php echo base_url();?>student/index"><?php echo get_languageword('Home');?></a></li>
                <li class="active"><?php if(isset($pagetitle)) echo $pagetitle?></li>
            </ol>

		   <div class="col-xs-8 col-sm-4 sidebar-offcanvas" id="sidebar">
				<?php $this->load->view('template/site/student-template-leftmenu'); ?>

				<!-- /.panel-group -->
			</div>







            <div class="col-xs-12 col-sm-8 dashboard-content ">

                <!-- //'<a  title="My Classes"><img src="http://www.dhoondloo.com/cl_os/cl_os/assets\front\images/book.png"  /></a>';?>
                 //'<a  title="Payments"><img src="http://www.dhoondloo.com/cl_os/cl_os/assets\front\images/dollar.png"  /></a>';?>-->



                <?php $this->load->view('template/site/buttons.php'); ?>


				<!-- breadcrumb -->

				<!-- breadcrumb ends -->
				<?php $this->load->view($content); ?>
			</div>
		</div>
	</div>
</section>
<!-- Dashboard section  -->

<?php $this->load->view('template/site/footer'); ?>