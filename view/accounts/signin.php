<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        include($_SERVER['DOCUMENT_ROOT'] . "/config.php");
        include($WEB_DIRS['bootstrapCDN']);
    ?>

    <title><?php print($WEB_VALUE['sectionSigninTitle']); ?></title>

    </head>

	<body>
		<div id="wrapper">
			<?php

				if (Admin::check() == true){
						header("Location: " . $_LNK['siteAdminPortal']);
				}

			?>
			<div id="header">
			<!-- start header section -->
			<section id="header">
					<header>						
						<?php 
							include_once($WEB_DIRS['sitePageNavBar']);
						?>
				</header>
			</section>
			<!-- end header section -->
			</div>
		
			<div id="main-content">
			<section id="signin">
				<div class="container">
					<div class="row">
							<div class="col-md-12">
								<h3 class="page-header"><?php print($WEB_VALUE['signinTitle']); ?></h3>
							</div>
					</div>
					
					<form class="form-horizontal" method="post" action="<?php echo $_LNK['siteMgrLogin']; ?>">
								<?php 
									if (isset($_SESSION['err'])){
										echo MsgLabels::err($_SESSION['err']);
										unset($_SESSION['err']);
									}
								?>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="signin-user">Username</label>
								<div class="col-md-7">
									<input class="form-control" placeholder="Username" name="signin-user" required="true" aria-invalid="false" type="text">
								</div>
							</div>
							<div class="form-group">
									<label class="control-label col-sm-3" for="signin-cred">Password</label>
									<div class="col-md-7">
										<input class="form-control" placeholder="Password" name="signin-cred" required="true" aria-invalid="false" type="password">
									</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-5 col-sm-5">
									<input class="btn btn-primary" type="submit" name="signin-submit" value="Sign In">
								</div>
							</div>
					</form>
				</div>
		</section>
		</div>
		

			<!--  start footer section -->
			<?php
        		include($WEB_DIRS['sitePageFooter']);
        	?>
    	</div>
</body>

</html>
