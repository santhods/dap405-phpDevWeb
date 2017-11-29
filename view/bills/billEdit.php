<!DOCTYPE html>
<html>

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
        include_once($WEB_DIRS['bootstrapCDN']);
        include_once($WEB_DIRS['siteDbsQuery'] . "/queryBill.php");
      
                
		if (Admin::check() == false){
			header("Location: " . $_LNK['siteSectionBills']);
		}
		?>

     <title>Admin Portal - Edit Bill Details</title>
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
				    if (isset($_GET['bill'])){
				        $selectedBillId = (int)$_GET['bill'];
			    		
			    		$selectedBillObj = QueryBill::GetBillDetail($selectedBillId);
			    		
			    		
			    		#Bill Id Title
			    	    echo '<div class="row">
       				            <div class="col-md-9">
							        <h2>' . 'Edit Bill ID : ' . $_GET['bill'] . '</h2>
						        </div>
       				          </div>';
       				          
			    	 #Edit Bill Form
			    	echo '<div class="row">
			    		    <form class="form-horizontal" method="post" action="/dbs/update/updateBill.php">';	

			    	foreach($selectedBillObj as $billInfo){
			    	    
							echo    ' <!-- Bill Name -->
							        <div class="form-group">
											<label class="control-label col-sm-3" for="update-billname">Bill Name</label>
											<div class="col-md-7">
												<input class="form-control" name="update-billname" required="true" type="text"
												
												value="' . $billInfo->billName . '">
											</div>
									</div>
									
									<!-- Bill description -->
									<div class="form-group">
											<label class="control-label col-sm-3" for="update-billdescription">Description</label>
											<div class="col-md-7">
												<textarea class="form-control" rows="6" cols="60" name="update-billdescription" type="text">' . $billInfo->description .'</textarea>
											</div>
									</div>
									
									<!-- Bill Type -->
									<div class="form-group">
											<label class="control-label col-sm-3" for="update-billtype">Bill Type</label>
											<div class="col-md-7">
												<input class="form-control" name="update-billtype" required="true" type="text"
												
												value="' . $billInfo->billType . '">
											</div>
									</div>
									
									<div class="form-group">
											<label class="control-label col-sm-3" for="update-billsponsor">Bill Sponsor</label>
											<div class="col-md-7">
												<input class="form-control" name="update-billsponsor" required="true" type="text"
												
											    value="' . $billInfo->billSponsor . '">
											</div>
									</div>
									
									<div class="form-group">
											<label class="control-label col-sm-3" for="update-billorigin">Bill Origin</label>
											<div class="col-md-7">
												<input class="form-control" name="update-billorigin" required="true" type="text"
												
												value="' . $billInfo->origin . '">
											</div>
									</div>
									
									<div class="form-group">
											<label class="control-label col-sm-3" for="update-billproposeddate">
											Date of announcement for this Bill</label>
											<div class="col-md-7">
												<input class="form-control" name="update-billproposeddate" required="true" type="date"
												
												value="' . $billInfo->billProposedDate . '">
											</div>
										<input type="hidden" name="update-billid" value="' . $billInfo->id . '">	
									</div>';	
			    	    break;
			    	}
			    	
			    	        echo    '<div class="form-group">
										<div class="col-sm-offset-5 col-sm-5">
											<input class="btn btn-success" type="submit" name="update-billsubmit" value="Update">
											<a class="btn btn-danger" name="update-billcancel"
										    href="/view/bills/bills.php?bill=' . ($_GET['bill']) . '">Cancel</a>
							   
										</div>
									
					                </div>
					    </form>
					</div>';
					
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