
<!DOCTYPE html>
<html>

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
        include_once($WEB_DIRS['bootstrapCDN']);
        include_once($WEB_DIRS['siteDbsQuery'] . "queryMember.php");
        include_once($WEB_DIRS['siteDbsQuery'] . "queryBill.php");
     ?>

     <title><?php echo $WEB_VALUE['sectionSearchTitle']; ?></title>
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
				
				<?php 
				
				if (isset($_POST['search-submit']) && (strlen($_POST['search-query']) > 0)){
    				$query = $_POST['search-query'];
    					
    				$billObj = QueryBill::GetSearchedBills($query, 30);
    				$memberObj = QueryMember::GetSearchedMembers($query, 30);
    				
    				#Rendering Bills List
    				if (count($billObj) > 0){
    					echo '<div class="row">
    							<div class="col-md-offset-2 col-md-4"> 
    								<h2>' . $WEB_VALUE['searchTitle'] . $d . $WEB_VALUE['billsTitle'] . '</h2>
    							</div>
    						</div>';
    					
    					foreach ($billObj as $billItem){
	            			echo '<div class="row"> 
	            					<div class="col-md-offset-2 col-md-6"> 
	            						<a href="/view/bills/bills.php?bill=' . $billItem->id . '">
	            							<h4> ' . $billItem->billName . '</h4></a>
	            						<p><b>' . $billItem->billSponsor . ':</b> ' . $billItem->description . '</p>
	            					</div>
	            				  </div>';
	        			}
    				}
    				
    				#Rendering Members List
    				if (count($memberObj) > 0){
    					echo '<div class="row">
    							<div class="col-md-offset-2 col-md-4"> 
    								<h2>' . $WEB_VALUE['searchTitle'] . $d . $WEB_VALUE['membersTitle'] . '</h2>
    							</div>
    						</div>';
    					
    					foreach ($memberObj as $memberItem){
	            			echo '<div class="row"> 
	            					<div class="col-md-offset-2 col-md-6"> 
	            						<a href="/view/members/members.php?member=' . $memberItem->id . '">
	            							<h4> ' . $memberItem->name . '</a>
	            							:  ' . $memberItem->party . ', ' . $memberItem->constituency . '</h4>
	            					</div>
	            				  </div>';
	        			}
    				}
    				
    				
    				unset($_POST['search-query']);
				}
				else{
    				echo MsgLabels::err("Please enter your search query");
				}
				
				
				if (count($billObj) < 1 && count($memberObj) < 1){
					echo MsgLabels::info("Your search" . $_POST['search-query'] . " returns no results from our database.");
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