<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Cloud Hosting</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>

				        
		<nav class="navbar navbar-expand-md navbar-dark bg-primary mb-4">
			<a class="navbar-brand" href="./">Cloud Hosting</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item <?php if ($page == 'profile') {echo "active";} ?>">
						<a class="nav-link" href="profile.php">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Help</a>
					</li>
					<li class="nav-item <?php if ($page == 'request') {echo "active";} ?>">
						<a class="nav-link" href="request.php">Make Request <span class="sr-only">(current)</span></a>
					</li>
					
				</ul>

				<ul class="navbar-nav navbar-right">
					
					<li class="nav-item">
						<a class="nav-link" href="#">Logged in as: <span style="color: #000;"><?php echo $_SESSION['username']; ?></span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?logout=1">Log Out</a>
					</li>
				</ul>
					
			</div>
		</nav>