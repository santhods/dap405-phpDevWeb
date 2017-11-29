<!DOCTYPE html>
<html>

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
        include_once($WEB_DIRS['bootstrapCDN']);
     ?>

     <title>Put Title Here </title>
 </head>

<body id="top">
	<div id="wrapper"> <!-- start wrapper -->
			<!-- start header section -->
			<div id="header">
				<header>
				    <?php
                        include_once($WEB_DIRS['sitePageNavBar']);
                    ?>
				</header> <!-- end header -->
			</div>
			<!-- end header section -->
			
			<!-- start main content section -->
			<div id="main-content">
				<!-- Put main content here -->
				<div class="container">
					
					
				</div>
			</div>
			<!-- end main content section -->
			
			<!--  start footer section -->
			<div id="footer">
            <?php
        	    include_once($WEB_DIRS['sitePageFooter']);
           	?>
			</div>
			<!-- end footer section -->
    </div> <!-- end wrapper -->
</body>

</html>