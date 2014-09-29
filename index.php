<?php
// Load the settings from the central config file
require_once 'config.php';
// Load the CAS lib
require_once $phpcas_path . 'CAS.php';

// Enable debugging
phpCAS::setDebug();

// Initialize phpCAS
phpCAS::client(CAS_VERSION_2_0, $cas_host, $cas_port, $cas_context);
phpCAS::setNoCasServerValidation();

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Acceptto SSO Client - PHP</title>
		<meta name="description" content="Acceptto SSO Client Sample with PHP">
		<link href="assets/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
		<link href="assets/stylesheets/application.css" media="all" rel="stylesheet" type="text/css" />
		<link href="assets/stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
		<link href="assets/stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" />

		<script src="assets/javascript/jquery.min.js"></script>
	</head>
	<body>

		<header class="navbar navbar-static-top navbar-default" role="banner">
			<div class="container">
				<a href="../" class="navbar-brand"> Client 2 Business Website </a>
			</div>
		</header>
		<div class="container" style="margin-top:20px;">
			<div class="row">
				<div class="col-md-12">
					<a href="" class="btn btn-success btn-block"> <img src="assets/images/icon.png" class="acceptto-icon" alt=""/> Acceptto Login Status </a>

					<div class="panel panel-success acceptto-panel">
					<?php if(!phpCAS::checkAuthentication()): ?>
						<a href="cass_processor.php" class="btn btn-default">Authenticate with Acceptto CAS</a>
					<?php else: ?>
						<?php require 'script_info.php' ?>
    					<p>the user's login is <b><?php echo phpCAS::getUser(); ?></b>.</p>
    					<p>phpCAS version is <b><?php echo phpCAS::getVersion(); ?></b>.</p>
   						<p><a href="cass_processor.php?logout=">Logout</a></p>	
					<?php endif; ?>
						<br />

					</div>
				</div>
			</div>
		</div>

	</body>
</html>