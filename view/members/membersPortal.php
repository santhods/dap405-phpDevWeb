<!DOCTYPE html>
<html>

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
        include_once($WEB_DIRS['bootstrapCDN']);
        include_once($WEB_DIRS['siteDbsQuery'] . "/queryMember.php");
     ?>

     <title><?php echo $WEB_VALUE['sectionMembersTitle']; ?></title>
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
					<div class="row">
						<div class="col-md-12">
	                       <div class="jumbotron">
	                           <h1><?php print($WEB_VALUE['membersTitle']); ?></h1>
       		               </div> <!-- end class: jumbotron -->
	                   	</div> <!-- end class: row  -->
					</div>
					
					
					<?php 
					$memberList = QueryMember::GetMembersList(0, 30);
					
					foreach ($memberList as $memberItem){
					echo '<div class="row">
	            		 <div class="col-md-offset-2 col-md-6"> 
	            			<a href="/view/members/members.php?member=' . $memberItem->id  .'">
	            				<h4> ' . $memberItem->name . '</h4></a>
	            				<h5> ' . $memberItem->memberType .' </h5>
	            				<h5> Constituency:<b> ' . $memberItem->constituency . ' </b></h5>
	            		</div>
					</div>';
					}
					?>
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