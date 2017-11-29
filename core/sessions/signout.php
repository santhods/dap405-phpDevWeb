<?php
		include($_SERVER['DOCUMENT_ROOT'] . "/config.php");

		unset($_SESSION['auth']);

		$_SESSION[] = '';
		session_destroy();
		session_unset();
		session_regenerate_id(true);


		header("Location: " . $_LNK['sitePageHome']);
?>
