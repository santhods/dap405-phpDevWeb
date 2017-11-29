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
			    	<?php 
					if (isset($_SESSION['update-bill'])){
        				if ($_SESSION['update-bill'] == true){
        					echo MsgLabels::success($_SESSION['update-billmsg']);
        				} else {
        					echo MsgLabels::err($_SESSION['update-billmsg']);
        				}
        				
        				unset($_SESSION['update-bill'], $_SESSION['update-billmsg']);
        			}
        			
					?>
			    	<div class="row">
			    		<div class="col-sm-1">
			    			<a href="<?php echo $_LNK['siteSectionBills']; ?>">Go Back</a>
			    		</div>
			    		
			    		<?php
			    		
			    		if (Admin::check() == true){
			    			echo '<div class="col-sm-offset-10 col-sm-1" >
			    					<a href="/view/bills/billEdit.php?bill='. $_GET['bill'] . '">Edit</a>
			    				 </div>';
			    		}
			    		
			    		?>
			    		
			    	</div>
			    	<?php 
			    	
					if (isset($_GET['bill'])){
			    		$selectedBillId = (int)$_GET['bill'];
			    		
			    		$selectedBillObj = QueryBill::GetBillDetail($selectedBillId);
			    		
			    		
			    		foreach($selectedBillObj as $selectedBillInfo){
						
						echo '<div class="row">
								<div class="col-md-12">
	                    			<div class="jumbotron">
	                        			<h1> '. $selectedBillInfo->billName .'</h1></h1>
       		            			</div>
	                   			</div>
	                		  </div>';
			        

			        	echo '<div class="row"> <!-- Information Part -->
			        			<div class="col-md-12">
			            			<h2>Bill Information</h2>
			            			<h5> <b>Sponsor : ' . $selectedBillInfo->billSponsor . '</b> </h5>
			            			<p> Proposed on: ' . $selectedBillInfo->billProposedDate . ' </p>
			            			<p><b>Type: ' . $selectedBillInfo->billType .' </b></p>
			            			<h5><b>Description: </b> ' . $selectedBillInfo->description. '</h5>
			            			<br>
			            			<p><i>Bill started in: ' . $selectedBillInfo->origin .' </i></p>
			        			</div>
			        		</div>';
			        
			        
			        	echo '<div class="row"> <!-- Stages Part -->
			        			<div class="col-md-12">
			            			<h2>Current Stage</h2>
			            			<h3>' . $selectedBillInfo->billCurrentHouse . ', ' .
			            			$selectedBillInfo->billCurrentStage . '</h3>
			            			<br>
			            			<i>This bill is last updated on ' . $selectedBillInfo->billStageLastUpdate .
			            			', with the status : ' . $selectedBillInfo->billCurrentHouse . ', ' .
			            							$selectedBillInfo->billLatestStage . '</i>
			        				</div>
			        			</div>';
					}
						
					} else {
			    	echo MsgLabels::err("The Bill is not found.");
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