<!DOCTYPE html>
<html>

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
        include_once($WEB_DIRS['bootstrapCDN']);
        include_once($WEB_DIRS['siteDbsQuery'] . "/queryBill.php");
     ?>

     <title><?php echo $WEB_VALUE['sectionBillsTitle']; ?></title>
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
	                           <h1><?php print($WEB_VALUE['billsTitle']); ?></h1>
       		               </div> <!-- end class: jumbotron -->
	                   	</div> <!-- end class: row  -->
	                </div>
	            
	        <?php 
	           	# Displaying bills from the Database
	           	$billList = QueryBill::GetBillsList(0, 30);
	           	
	          foreach ($billList as $billItem){
	            echo '<div class="row"> 
	            			<div class="col-md-12"> 
	            				<a href="/view/bills/bills.php?bill=' . $billItem->id . '">
	            				
	            				<h2> ' . $billItem->billName . '</h2></a>
	            				<h4> ' . $billItem->billType . '</h4>
	            				<h5><b>' . $billItem->billSponsor . '</b> proposed this bill on '
	            						. $billItem->billProposedDate . '</h5>
	            				<h5><b>Description: </b>' . $billItem->description . '</h5> 
	            				<p><i>This Bill is proposed in The '. $billItem->origin . '</i></p>
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