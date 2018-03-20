<?php  

session_start();

if (!isset($_SESSION['email']) && empty($_SESSION['email'])) {
	header('Location: ./');
}

$page = 'profile';

?>

<?php include 'inc/logged-in-header.php'; ?>

		<section class="profile_section">
			<div class="container">
				<div class="row">
					<div class="col-6 mx-auto">
						<div class="profile">
							<h2>General Account Settings</h2>
							<table class="table table-responsive table-striped table-bordered table-hover">
								<tbody>
									<tr data-target="#updateUsername" data-toggle="modal">
										<th>Username</th>
										<td><?php echo $_SESSION['username']; ?></td>
									</tr>

									<tr data-target="#updateEmail" data-toggle="modal">
										<th>Email Address</th>
										<td><?php echo $_SESSION['email']; ?></td>
									</tr>

									<tr data-target="#updatePwd" data-toggle="modal">
										<th>Password</th>
										<td><?php echo 'hidden'; ?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Update username -->
				<div class="modal fade" id="updateUsername">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title">Edit Username</h4>
							</div>
							<div class="modal-body">
								<form method="POST" id="updateUsername1">
									<fieldset class="form-group">
										<label for="username">Username</label>
										<input type="text" class="form-control" id="username" name="username" placeholder="<?php echo $_SESSION['username']; ?>">
									</fieldset>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<input type="submit" class="btn btn-primary" name="updateusername" value="Update Username">
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->


				<!-- Update Email -->
				<div class="modal fade" id="updateEmail">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title">Edit Email</h4>
							</div>
							<div class="modal-body">
								<form>
									<fieldset class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $_SESSION['email']; ?>">
									</fieldset>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<input type="submit" class="btn btn-primary" name="update-email" value="Update Email">
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->


				<!-- Update Password -->
				<div class="modal fade" id="updatePwd">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title">Edit Password</h4>
							</div>
							<div class="modal-body">
								<form>
									<fieldset class="form-group">
										<label for="current_password">Current Password</label>
										<input type="password" class="form-control" id="current_password" name="current_password" placeholder="Your Current Password">
									</fieldset>
								</form>

								<form>
									<fieldset class="form-group">
										<label for="password">New Password</label>
										<input type="password" class="form-control" id="password" name="password" placeholder="Your New Password">
									</fieldset>
								</form>

								<form>
									<fieldset class="form-group">
										<label for="password2">Confirm New Password</label>
										<input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Your New Password">
									</fieldset>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<input type="submit" class="btn btn-primary" name="update-email" value="Update Password">
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

		
		<?php include 'inc/footer.php'; ?>