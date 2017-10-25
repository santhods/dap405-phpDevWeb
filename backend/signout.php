<?php
		session_start();

		unset($_SESSION['auth']);
		unset($_SESSION['usr']);

		$_SESSION[] = '';
		session_destroy();
		session_unset();
		session_regenerate_id(true);

		header("location: /frontend/index.php");
?>
