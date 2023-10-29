<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bank Account Management System</title>
	<link rel="icon" href="<?=base_url()?>assets/logo-2.png" type="image/gif" height="10px" width="auto">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/all.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/toast/toast.min.css">
	<script src = "<?php echo site_url();?>assets/toast/toast.js"></script>
	<script src = "<?php echo site_url();?>assets/toast/jqm.js"></Script>
 </head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="<?php echo site_url();?>assets/logo-2.png" alt="logo" width="200" height="auto">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
							<?php echo form_open('Auth/registration_form');?>
                                <div class="mb-3">
									<label class="mb-2 text-muted" for="email">Full Name</label>
									<input id="name" name="name" type="text" class="form-control" value="" required autofocus>
									
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" name="email" type="email" class="form-control" value="" required autofocus>
									
								</div>

								<div class="mb-3">
								
                                    <label class="mb-2 text-muted" for="password">Passsword</label>
									<input id="password" name="password" type="password" class="form-control" required>
								  
								</div>

                                <div class="mb-3">
								
                                    <label class="mb-2 text-muted" for="password">Confirm Passsword</label>
									<input id="password" name="passCon" type="password" class="form-control"  required>
								  
								</div>

								<div class="d-flex align-items-center">
								
									<button type="submit" class="btn btn-primary ">
										Register
									</button>
								</div>
							<?php echo form_close();?>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Have an account ? <a href="<?php echo site_url();?>" class="text-dark"> Login</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2023 &mdash; Madhubhashana99 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		<?php if($this->session->flashdata('suc')){?>
			toastr.sucess("<?php echo $this->session->flashdata('suc');?>");
		<?php }else if($this->session->flashdata('worng')){?>
			toastr.error("<?php echo $this->session->flashdata('worng');?>");	
		<?php }else if($this->session->flashdata('warning')){?>
			toastr.warning("<?php echo $this->session->flashdata('warning');?>");	
		<?php }else if($this->session->flashdata('info')){?>
			toastr.error("<?php echo $this->session->flashdata('info');?>");
		<?php } ?>
		<?php
			$this->session->unset_userdata ('suc'); ?>
		<?php
			$this->session->unset_userdata ('worng');?>
</script>
</body>
</html>