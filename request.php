<?php  

session_start();

if (!isset($_SESSION['username'])) {
	header('Location: index.php');
}

$page = 'request';

?>

<?php include 'inc/logged-in-header.php'; ?>

	<h1 class="text-center" style="margin-top: 1.5em; color: #fff;">
		Be A Maverick &mdash; Jet Into The Cloud!
	</h1>

		<section class="make-request">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-6 mx-auto">
						<div class="request">
							<form method="POST" id="requestForm">
								<h2 class="text-center">Request Form :: <small>Please complete specifications below</small></h2>

								<div id="requestFormMsg"></div>

								<select class="c-select form-control" name="biz-size">
									<option value=''>Tell Us About Your Company</option>
									<option value="Individual">Individual</option>
									<option value="Small-Scale">Small-Scale Business</option>
									<option value="Mid-Large Scale Enterprise">Mid-Large Scale Enterprise</option>
								</select>
								<br>

								<select class="c-select form-control" name="memory">
									<option value=''>Choose Preferred Memory Size</option>
									<option value="2 GB">2 GB</option>
									<option value="4 GB">4 GB</option>
									<option value="6 GB">6 GB</option>
								</select>
								<br>

								<select class="c-select form-control" name="ip">
									<option value=''>Do You Want A Dedicated IP</option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
								<br>

								<select class="c-select form-control" name="server-loc">
									<option value=''>Server Location</option>
									<option value="Asia">Asia</option>
									<option value="Europe">Europe</option>
									<option value="North America">North America</option>
									<option value="Australia">Australia</option>
								</select>
								<br>

								<select class="c-select form-control" name="price">
									<option value=''>Affordability - Choose a price range</option>
									<option value="$4-$8/Month">$4-$8/Month</option>
									<option value="$9-$12/Month">$9-$12/Month</option>
									<option value="$13-$15/Month">$13-$15/Month</option>
								</select>
								<br>

								<select class="c-select form-control" name="scalability">
									<option value=''>Scalability</option>
									<option value="2x-Faster">2x-Faster</option>
									<option value="4x-Faster">4x-More Scalable</option>
									<option value="8x-Faster">8x-More Scalable</option>
								</select>
								<br>

								<select class="c-select form-control" name="bandwidth">
									<option value="">Bandwidth</option>
									<option value="Metered">Metered</option>
									<option value="UnMetered">UnMetered</option>
								</select>
								<br>

								<div class="text-center">
									<input type="submit" class="btn btn-primary btn-lg" name="submit" value="Send Request">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>


		
<?php include 'inc/footer.php'; ?>