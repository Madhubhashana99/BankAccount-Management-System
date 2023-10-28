<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bank Account Management System</title>
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
						<img src="assets/logo-2.png" alt="logo" width="100">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-3">
									<label class="mb-2 text-muted" for="email">Full Name</label>
									<input id="name" type="text" class="form-control" value="" required autofocus>
									
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" value="" required autofocus>
									
								</div>

								<div class="mb-3">
								
                                    <label class="mb-2 text-muted" for="password">Passsword</label>
									<input id="password" type="password" class="form-control" required>
								  
								</div>

                                <div class="mb-3">
								
                                    <label class="mb-2 text-muted" for="password">Confirm Passsword</label>
									<input id="password" type="password" class="form-control"  required>
								  
								</div>

								<div class="d-flex align-items-center">
								
									<button type="submit" class="btn btn-primary ">
										Register
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Have an account ? <a href="#" class="text-dark"> Login</a>
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