<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KANDI Inventory - Installation</title>
	<!--Roboto Font [ OPTIONAL ]-->
	<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300,500" rel="stylesheet" type="text/css">
	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/bootstrap.min.css" rel="stylesheet">


	<!--Activeit Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/activeit.min.css" rel="stylesheet">

	
	<!--Font Awesome [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


	<!--Animate.css [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/animate-css/animate.min.css" rel="stylesheet">


	<!--Switchery [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/switchery/switchery.min.css" rel="stylesheet">


	<!--Bootstrap Select [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">


	<!--Bootstrap Validator [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/Bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">


	<!--Demo [ DEMONSTRATION ]-->
	<link href="<?php echo base_url(); ?>template/back/css/demo/activeit-demo.min.css" rel="stylesheet">
    
	<!--jQuery [ REQUIRED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/jquery-2.1.1.min.js"></script>

	<!--Chosen [ OPTIONAL ]-->
	<script src="<?php echo base_url(); ?>template/back/plugins/chosen/chosen.jquery.min.js"></script>
	<!--Chosen [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/chosen/chosen.min.css" rel="stylesheet">

	<!--SCRIPT-->
	<!--=================================================-->

	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.js"></script>

	<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/others/default_favicon.png">
    
    <div id="container" class="effect mainnav-lg" style="background:url(<?php echo base_url();?>uploads/others/install.jpg);background-repeat:no-repeat;width:100%;">
        <div class="boxed">
            <!--CONTENT CONTAINER-->
            <div id="page-content">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                    	<center><img id="logo-header" src="<?php echo base_url(); ?>uploads/images/kandi.png" alt="Logo" class="img-responsive" style="width:200px;"></center>
                        <div class="panel panel-install">
                            <!-- Form wizard with Validation -->
                            <div id="demo-bv-wz">
                                <div class="wz-heading">
                                    <!--Progress bar-->
                                    <div class="progress progress-sm progress-light-base">
                                        <div class="progress-bar progress-bar-success"></div>
                                    </div>
                                    <!--Nav-->
                                    <ul class="wz-icon-bw wz-nav-off">
                                        <li class="col-xs-3">
                                            <a data-toggle="tab" href="#demo-bv-tab1" title="Account">
                                                <span class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                <i class="wz-icon fa fa-info fa-2x"></i>
                                                <i class="wz-icon-done fa fa-check fa-2x"></i>
                                            </span>
                                            </a>
                                        </li>
                                        <li class="col-xs-3">
                                            <a data-toggle="tab" href="#demo-bv-tab2" title="Profile">
                                                <span class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                <i class="wz-icon fa fa-database fa-2x"></i>
                                                <i class="wz-icon-done fa fa-check fa-2x"></i>
                                            </span>
                                            </a>
                                        </li>
                                        <li class="col-xs-3">
                                            <a data-toggle="tab" href="#demo-bv-tab3" title="Finish">
                                                <span class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                <i class="wz-icon fa fa-apple fa-2x"></i>
                                                <i class="wz-icon-done fa fa-check fa-2x"></i>
                                            </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                
                                <!--Form-->
                                <?php echo form_open(base_url().'index.php/install/do_install' , array('id' => 'demo-bv-wz-form' , 'class' => 'form-horizontal'));?>
                                    <div class="panel-body">
                                        <div class="tab-content">
                
                                            <!--First tab-->
                                            <div id="demo-bv-tab1" class="tab-pane">
                                            	<div class="form-group">
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                        	<?php 
                                                                $can = 'ok';
                                                                if (is_writable('application/config/database.php')){ 
                                                            ?>
                                                            <span class="badge badge-success">
                                                                <i class="fa fa-check"></i>
                                                            </span>
                                                            <?php } else { $can = 'no'; ?>
                                                        	<span class="badge badge-danger">
                                                            	<i class="fa fa-times"></i>
                                                            </span>
                                                            <?php } ?>
                                                        	<span class="text-danger">Required* - </span>
                                                            application/config/database.php to be writtable 
                                                        </li>
                                                        <li class="list-group-item">
                                                        	<?php if (is_writable('uploads/installation/database.php')){ ?>
                                                            <span class="badge badge-success">
                                                                <i class="fa fa-check"></i>
                                                            </span>
                                                            <?php } else { $can = 'no';  ?>
                                                        	<span class="badge badge-danger">
                                                            	<i class="fa fa-times"></i>
                                                            </span>
                                                            <?php } ?>
                                                        	<span class="text-danger">Required* - </span>
                                                            uploads/installation/database.php to be writtable 
                                                        </li>
                                                        <li class="list-group-item">
                                                        	<?php if (is_writable('application/config/routes.php')){ ?>
                                                            <span class="badge badge-success">
                                                                <i class="fa fa-check"></i>
                                                            </span>
                                                            <?php } else { $can = 'no';  ?>
                                                        	<span class="badge badge-danger">
                                                            	<i class="fa fa-times"></i>
                                                            </span>
                                                            <?php } ?>
                                                        	<span class="text-danger">Required* - </span>
                                                            application/config/routes.php to be writtable 
                                                        </li>
                                                        <li class="list-group-item">
                                                        	<?php if (is_writable('uploads/installation/routes.php')){ ?>
                                                            <span class="badge badge-success">
                                                                <i class="fa fa-check"></i>
                                                            </span>
                                                            <?php } else { $can = 'no';  ?>
                                                        	<span class="badge badge-danger">
                                                            	<i class="fa fa-times"></i>
                                                            </span>
                                                            <?php } ?>
                                                        	<span class="text-danger">Required* - </span>
                                                            uploads/installation/routes.php to be writtable 
                                                        </li>
                                                        <li class="list-group-item">
                                                        	<?php if (is_writable('application/config/config.php')){ ?>
                                                            <span class="badge badge-success">
                                                                <i class="fa fa-check"></i>
                                                            </span>
                                                            <?php } else { $can = 'no';  ?>
                                                        	<span class="badge badge-danger">
                                                            	<i class="fa fa-times"></i>
                                                            </span>
                                                            <?php } ?>
                                                        	<span class="text-danger">Required* - </span>
                                                            application/config/config.php to be writtable 
                                                        </li>
                                                        <li class="list-group-item">
                                                            <?php if (is_writable('uploads/installation/config.php')){ ?>
                                                            <span class="badge badge-success">
                                                                <i class="fa fa-check"></i>
                                                            </span>
                                                            <?php } else { $can = 'no';  ?>
                                                            <span class="badge badge-danger">
                                                                <i class="fa fa-times"></i>
                                                            </span>
                                                            <?php } ?>
                                                            <span class="text-danger">Required* - </span>
                                                            uploads/config/installation.php to be writtable 
                                                        </li>
                                                        
                                                        <li class="list-group-item">
                                                            <?php if (function_exists('mysqli_connect')){ ?>
                                                            <span class="badge badge-success">
                                                                <i class="fa fa-check"></i>
                                                            </span>
                                                            <?php } else { $can = 'no';  ?>
                                                            <span class="badge badge-danger">
                                                                <i class="fa fa-times"></i>
                                                            </span>
                                                            <?php } ?>
                                                            <span class="text-danger">Required* - </span>
                                                            "mysqli_connect" function to be enabled!
                                                        </li>
                                                        
                                                        <li class="list-group-item">
                                                            <?php if (version_compare(phpversion(), '5.4', '>')) { ?>
                                                            <span class="badge badge-success">
                                                                <i class="fa fa-check"></i>
                                                            </span>
                                                            <?php } else { $can = 'no';  ?>
                                                            <span class="badge badge-danger">
                                                                <i class="fa fa-times"></i>
                                                            </span>
                                                            <?php } ?>
                                                            (Your server PHP version <?php echo phpversion(); ?>) <br>
                                                            <span class="text-danger">Required* - </span>
                                                            PHP version to be 5.4 or over 
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                
                                            <!--Second tab-->
                                            <div id="demo-bv-tab2" class="tab-pane fade">
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Database Name</label>
                                                    <div class="col-lg-7">
                                                        <input type="text" placeholder="Database Name" name="db_name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">User name</label>
                                                    <div class="col-lg-7">
                                                        <input type="text" placeholder="User Name" name="db_uname" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Password</label>
                                                    <div class="col-lg-7">
                                                        <input type="password" placeholder="Password" name="db_password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Host Name</label>
                                                    <div class="col-lg-7">
                                                        <input type="text" placeholder="Host Name" name="db_hname" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                
                                            <!--Third tab-->

                <?php error_reporting(0)?>
                                            <!--Fourth tab-->
                                            <div id="demo-bv-tab3" class="tab-pane  mar-btm text-center">
                                                <h4>Thank you</h4>
                                                <p class="text-muted rmb" style="display:block;">
                                                	Thank you for installing "Kandi Inventory Management System". Best wishes for the next
                                                 	<h5>It takes about 2-3 Munites</h5>
                                                 </p>

                                                <div class="ads" style="display:none;">

                                                    <p class="text-muted">Please click on the following links for visiting Your Application</p>
                                                    <a class="btn btn-dark" target="_blank" href="<?php echo base_url() ?>index.php/dashboard">Admin Panel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                                    <!--Footer button-->
                                    <div class="panel-footer text-right" style="background-color: #fff;">
                                        <div class="box-inline">
                                            <button type="button" class="previous btn btn-dark">
                                            	<i class="fa fa-step-backward" style="margin-right:6px;"></i>Previous
                                            </button>
                                            <?php if($can == 'ok'){ ?>
                                            <button type="button" class="next btn btn btn-success">
                                            	Next<i class="fa fa-step-forward" style="margin-left:7px;"></i>
                                            </button>
                                            <button type="button" class="finish btn btn-success submitter" disabled>Install Kandi Inventory</button>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Form wizard with Validation -->
                        </div>
                        <center> 2015 &copy; All Rights Reserved @ <a href="about:blank">Kandi Inventory </a></center>
                    </div>
                    
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
    </div>

	
	<!--JAVASCRIPT-->
	<!--=================================================-->



	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/bootstrap.min.js"></script>

	
	<!--Activeit Admin [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/activeit.min.js"></script>


	<!--Switchery [ OPTIONAL ]-->
	<script src="<?php echo base_url(); ?>template/back/plugins/switchery/switchery.min.js"></script>


	<!--Bootstrap Select [ OPTIONAL ]-->
	<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-select/bootstrap-select.min.js"></script>


	<!--Bootstrap Wizard [ OPTIONAL ]-->
	<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>


	<!--Bootstrap Validator [ OPTIONAL ]-->
	<script src="<?php echo base_url(); ?>template/back/plugins/Bootstrap-validator/bootstrapValidator.min.js"></script>


	<!--Demo script [ DEMONSTRATION ]-->
	<script src="<?php echo base_url(); ?>template/back/js/demo/activeit-demo.min.js"></script>


	<!--Form Wizard [ SAMPLE ]-->
	<script>
		$(document).ready(function() {			
		
			$('.demo-chosen-select').chosen();
			$('.demo-cs-multiselect').chosen({width:'100%'});
			// FORM WIZARD WITH VALIDATION
			// =================================================================
			$('#demo-bv-wz').bootstrapWizard({
				tabClass		: 'wz-steps',
				nextSelector	: '.next',
				previousSelector	: '.previous',
				onTabClick: function(tab, navigation, index) {
					return false;
				},
				onInit : function(){
					$('#demo-bv-wz').find('.finish').hide().prop('disabled', true);
				},
				onTabShow: function(tab, navigation, index) {
					var $total = navigation.find('li').length;
					var $current = index+1;
					var $percent = (index/$total) * 100;
					var margin = (100/$total)/2;
					$('#demo-bv-wz').find('.progress-bar').css({width:$percent+'%', 'margin': 0 + 'px ' + margin + '%'});
		
					navigation.find('li:eq('+index+') a').trigger('focus');
		
		
					// If it's the last tab then hide the last button and show the finish instead
					if($current >= $total) {
						$('#demo-bv-wz').find('.next').hide();
						$('#demo-bv-wz').find('.finish').show();
						$('#demo-bv-wz').find('.finish').prop('disabled', false);
					} else {
						$('#demo-bv-wz').find('.next').show();
						$('#demo-bv-wz').find('.finish').hide().prop('disabled', true);
					}
				},
				onNext: function(){
					isValid = null;
					$('#demo-bv-wz-form').bootstrapValidator('validate');
		
		
					if(isValid === false)return false;
				}
			});
		
		
		
		
			// FORM VALIDATION
			// =================================================================
			// Require Bootstrap Validator
			// http://bootstrapvalidator.com/
			// =================================================================
		
			var isValid;
			$('#demo-bv-wz-form').bootstrapValidator({
				message: 'This value is not valid',
				feedbackIcons: {
					valid: 'fa fa-check-circle fa-lg text-success',
					invalid: 'fa fa-times-circle fa-lg',
					validating: 'fa fa-refresh'
				},
				fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required and can\'t be empty'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },
                    okay_in: {
                        validators: {
                            notEmpty: {
                                message: 'There are problems in your server file permissions and configuration. Fix them and try again.'
                            }
                        }
                    },
					codecanyon_username: {
						validators: {
							notEmpty: {
								message: 'This Field is required and cannot be empty'
							}
						}
					},
					purchase_code: {
						validators: {
							notEmpty: {
								message: 'This Field is required and cannot be empty'
							}
						}
					},
					db_name: {
						validators: {
							notEmpty: {
								message: 'This Field is required and cannot be empty'
							}
						}
					},
					db_uname: {
						validators: {
							notEmpty: {
								message: 'This Field is required and cannot be empty'
							}
						}
					},
					/*db_password: {
						validators: {
							notEmpty: {
								message: 'This Field is required and cannot be empty'
							}
						}
					},*/
					db_hname: {
						validators: {
							notEmpty: {
								message: 'This Field is required and cannot be empty'
							}
						}
					},
					system_name: {
						validators: {
							notEmpty: {
								message: 'This Field is required and cannot be empty'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'This Field is required and cannot be empty'
							}
						}
					}
				}
			}).on('success.field.bv', function(e, data) {
				// $(e.target)  --> The field element
				// data.bv      --> The BootstrapValidator instance
				// data.field   --> The field name
				// data.element --> The field element
				var $parent = data.element.parents('.form-group');
		
				// Remove the has-success class
				$parent.removeClass('has-success');
		
		
				// Hide the success icon
				//$parent.find('.form-control-feedback[data-bv-icon-for="' + data.field + '"]').hide();
			}).on('error.form.bv', function(e) {
				isValid = false;
			});
		});

		$('.submitter').on('click', function(){
	
			var here = $(this); // alert div for show alert message
			var form = here.closest('form');
	
			//var form = $(this);
			var formdata = false;
			if (window.FormData){
				formdata = new FormData(form[0]);
			}
	
			$.ajax({
				url: form.attr('action'), // form action url
				type: 'POST', // form submit method get/post
				dataType: 'html', // request type html/json/xml
				data: formdata ? formdata : form.serialize(), // serialize form data 
				cache       : false,
				contentType : false,
				processData : false,
				beforeSend: function() {
					here.addClass('disabled');
					here.html('Installing..'); // change submit button text
				},
				success: function(data) {
					here.fadeIn();
					here.removeClass('disabled');
                    //console.log(data[code]);
					if(data == 'success'){
						$.activeitNoty({
							type: 'success',
							icon : 'fa fa-check',
							message : 'Installation Successful!',
							container : 'floating',
							timer : 3000
						});
						here.html('Installed!');
                        $('.rmb').hide('slow');
                        $('.ads').show('slow');
                        /*
						setTimeout( function(){ 
							location.replace('<?php echo base_url(); ?>');
						}
						, 2000 );
                        */
					}
                    else if(data == 'db_failed'){
						$.activeitNoty({
							type: 'danger',
							icon : 'fa fa-times',
							message : 'Installation Failed. Wrong Database Credentials!',
							container : 'floating',
							timer : 3000
						});
						here.html('Install Kandi Inventory');
						sound('installation_failed');
					}
                    else if(data == 'purchase_failed'){
						$.activeitNoty({
							type: 'danger',
							icon : 'fa fa-times',
							message : 'Installation Failed. Wrong Purchase Credentials!',
							container : 'floating',
							timer : 3000
						});
						here.html('Install Kandi Inventory');
						sound('installation_failed');
					}
                    else {
						$.activeitNoty({
							type: 'danger',
							icon : 'fa fa-times',
							message : 'Installation Failed. Please Try Again!',
							container : 'floating',
							timer : 3000
						});
						here.html('Install Kandi Inventory');
						//sound('installation_failed');
					}
				},
				error: function(e) {
					console.log(e)
				}
			});
		});
	
		function sound(type){
			var audio = $('#set_audio');
			document.getElementById('set_audio').src = '<?php echo base_url(); ?>uploads/audio/'+type+'.mp3';
			document.getElementById('set_audio').volume = 1;
			document.getElementById('set_audio').play();
		} 
		
    </script>

    <audio style='display:none;' id='set_audio' >
	  <source type="audio/mpeg">
	</audio>
	