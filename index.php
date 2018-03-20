<?php  

session_start();

if (!isset($_SESSION['username']) || $_GET['logout'] == 1) {
	session_destroy();
} else {
	header('Location: request.php');
}

$page = 'home';

?>


<?php include 'inc/header.php'; ?>



		<section class="hero">
			<div class="container">
				<div class="intro">
					<h1>Company Name :: Cloud Hosting</h1>

					<p>With the cloud, individuals and small businesses can snap their fingers and instantly set up enterprise-class services</p>

					<p><small><q>If someone asks me what cloud computing is, I try not to get bogged down with definitions. I tell them that, simply put, cloud computing is a better way to run your business.</q> &mdash; <cite>Marc Benioff, Founder, CEO and Chairman of Salesforce</cite></small></p>
					<a href="" class="btn btn-custom btn-lg" data-target="#signUpForm" data-toggle="modal">Get Started &raquo;</a>
				</div>
			</div>
		</section>


		<!-- Sign Up Form -->
			
		<div class="modal fade" id="signUpForm">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title">Sign up to get started</h4>
							</div>
							<div class="modal-body">
								<div id="signUpMsg">
									<!-- Sign Up Alert Messages Here -->
								</div>
								<form method="post" id="signUpForm1">
									<fieldset class="form-group">
										<label for="username">Username</label>
										<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
									</fieldset>

									<fieldset class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
									</fieldset>

									<fieldset class="form-group">
										<label for="pwd">Password</label>
										<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Password">
									</fieldset>

									<fieldset class="form-group">
										<label for="pwd2">Confirm Password</label>
										<input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Enter Password Again">
									</fieldset>

									<input type="submit" class="btn btn-primary" value="Sign Up" name="submit">
								</form>
							</div>
							<div class="modal-footer">
								<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Exit</button> -->
								<button type="button" class="btn btn-success" data-target="#loginForm" data-toggle="modal" data-dismiss="modal">Log In</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->


				<!-- Login Form -->

				<div class="modal fade" id="loginForm">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title">Sign In</h4>
							</div>
							<div class="modal-body">
								<div id="loginMsg">
									<!-- Log In Alert Messages Here -->
								</div>
								<form method="post" id="loginForm1">
									<fieldset class="form-group">
										<label for="login_username">Email</label>
										<input type="email" class="form-control" id="login_email" name="login_email" placeholder="Enter Email">
									</fieldset>

									<fieldset class="form-group">
										<label for="login_pwd">Password</label>
										<input type="password" class="form-control" id="login_pwd" name="login_pwd" placeholder="Enter Password">
									</fieldset>

									<div class="checkbox">
										<label>
											<input type="checkbox" id="rememberme" name="rememberme"> Remember Me
										</label>
									</div>

									<input type="submit" class="btn btn-primary" value="Log In" name="login_btn" id="login_btn">

								</form>
							</div>
							<div class="modal-footer d-flex justify-content-center">
								<a href="#" data-dismiss="modal" data-target="#forgotPwdForm" data-toggle="modal">Forgot Your Password?</a>
								<button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#signUpForm" data-toggle="modal">Sign Up</button>
								
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				


				<!-- Forgot Password Form -->

				<div class="modal fade" id="forgotPwdForm">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title">Reset Your Password</h4>
							</div>
							<div class="modal-body">
								<div id="forgotPwdMsg">
									<!-- Forgot Password Alert Messages Here -->
								</div>
								<form method="POST" id="forgotPwdForm1">
									<fieldset class="form-group">
										<label for="forgetPwdEmail">Email</label>
										<input type="email" class="form-control" id="forgetPwdEmail" name="forgetPwdEmail" placeholder="Enter Your Email">
									</fieldset>
									<input type="submit" class="btn btn-primary" value="Send My Password">
								</form>
							</div>
							<div class="modal-footer d-flex justify-content-center">
								<button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#loginForm" data-toggle="modal">Log in</button>
								
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

		<?php include 'inc/footer.php'; ?>