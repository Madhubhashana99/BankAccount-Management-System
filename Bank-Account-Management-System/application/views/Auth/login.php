<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bank Account Management System</title>
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
						<img src="assets/logo-2.png" alt="logo" width="200" height="auto">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<?php echo form_open('Auth/login_form');?>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									
								</div>

								<div class="mb-3">
								
                                    <label class="mb-2 text-muted" for="password">Passsword</label>
									<input id="password" type="password" class="form-control" name="password" required>
								  
								</div>

								<div class="d-flex align-items-center">
								
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
							<?php echo form_close();?>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="<?php echo site_url();?>Auth/register" class="text-dark">Create One</a>
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

	<script src="js/login.js"></script>
</body>
</html>