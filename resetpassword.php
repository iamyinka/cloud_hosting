<?php  

include 'db/db.php';

?>

<?php include 'inc/header.php'; ?>
		<div class="container">
			<h1 class="text-center">Reset Password Process</h1>

			<div class="row">
				<div class="col-8 mx-auto">
					<div class="resetpassword">
						<?php  

						if (!isset($_GET['user_id']) && !isset($_GET['activation'])) {
							echo 'Error Occured.';
						} else {
							$user_id = $_GET['user_id'];
							$activation = $_GET['activation'];

							$user_id = mysqli_real_escape_string($link, $user_id);
							$resetkey = mysqli_real_escape_string($link, $activation);

							$sql = "SELECT * FROM forgotpassword WHERE user_id = '$user_id' AND resetkey = '$resetkey'";
							$result = mysqli_query($link, $sql);

							if (!$result) {
								echo "<div class='alert alert-danger'>Error Occured.</div>";
							} else {
								// echo "<div class='alert alert-success'>YeeHaw.</div>";
								$count = mysqli_num_rows($result);

								if(!$count) {
									echo "<div class='alert alert-danger'>This link is either invalid or used.</div>";
								} else {
									$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

									echo "
										<form method='POST' id='resetPwdForm'>
											<div id='resetPwdFormMsg'></div>
											<input type='hidden' class='form-control' name='user_id' value={$user_id}>
											<input type='hidden' class='form-control' name='resetkey' value={$resetkey}>
											<fieldset class='form-group'>
												<label class='sr-only' for='password'>Password</label>
												<input type='password' class='form-control' id='password' name='password' placeholder='Enter New Password'>
											</fieldset>

											<fieldset class='form-group'>
												<label class='sr-only' for='password2'>Password Confirmation</label>
												<input type='password' class='form-control' id='password2' name='password2' placeholder='Retype Password'>
											</fieldset>
											<input type='submit' class='btn btn-success' id='resetpassword' name='resetpassword' value='Reset Password'>
										</form>
							
									";
								}
							}
						}

					?>
					</div>
				</div>
			</div>
		</div>

		<?php include 'inc/footer.php'; ?>