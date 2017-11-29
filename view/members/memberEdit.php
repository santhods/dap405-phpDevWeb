<!DOCTYPE html>
<html>

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
        include_once($WEB_DIRS['bootstrapCDN']);
        include_once($WEB_DIRS['siteDbsQuery'] . "queryMember.php");

		if (Admin::check() == false){
			header("Location: " . $_LNK['siteSectionMembers']);
		}
     ?>

     <title>Admin Portal - Edit Member Details</title>
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
				    if (isset($_GET['member'])){
				        $selectedMemberId = (int)$_GET['member'];
			    		
			    		$selectedMemberObj = QueryMember::GetMemberDetail($selectedMemberId);
			    		
			    		
			    		#Id Title
			    	    echo '<div class="row">
       				            <div class="col-md-9">
							        <h2>' . 'Edit Member ID : ' . $_GET['member'] . '</h2>
						        </div>
       				          </div>';
       				          
			    	 #Edit member Form
			    	echo '<div class="row">
			    		    <form class="form-horizontal" method="post" action="/dbs/update/updateMember.php">';	

			    	foreach($selectedMemberObj as $memberInfo){
			    	    
							echo   '<div class="form-group">
										<label class="control-label col-sm-3" for="update-membertitle">Title</label>
											<div class="col-md-7">
												<input class="form-control" name="update-membertitle" type="text"
												value="' . $memberInfo->title . '">
											</div>
									</div>
									
									<!-- membername -->
									<div class="form-group">
											<label class="control-label col-sm-3" for="update-membername">Name</label>
											<div class="col-md-7">
												<input class="form-control" name="update-membername" required="true" type="text"
												
												value="' . $memberInfo->name . '">
											</div>
									</div>
									
									
									
									<!-- membertype -->
									<div class="form-group">
											<label class="control-label col-sm-3" for="update-membertype">Member Type</label>
											<div class="col-md-7">
												<input class="form-control" name="update-membertype" required="true" type="text"
												
												value="' . $memberInfo->memberType . '">
											</div>
									</div>
									
									<!-- party -->
									<div class="form-group">
											<label class="control-label col-sm-3" for="update-memberparty">Party</label>
											<div class="col-md-7">
												<input class="form-control" name="update-memberparty" required="true" type="text"
												
											    value="' . $memberInfo->party . '">
											</div>
									</div>
									
									<div class="form-group">
											<label class="control-label col-sm-3" for="update-memberconstituency">Constituency</label>
											<div class="col-md-7">
												<input class="form-control" name="update-memberconstituency" required="true" type="text"
												
												value="' . $memberInfo->constituency . '">
											</div>
									</div>
									
									<div class="form-group">
											<label class="control-label col-sm-3" for="update-memberfirstappointeddate">
											First Appointed or Elected(Date)</label>
											<div class="col-md-7">
												<input class="form-control" name="update-memberdate" required="true" type="date"
												
												value="' . $memberInfo->firstAppointedDate . '">
											</div>
									</div>
									
									<div class="form-group">
											<label class="control-label col-sm-3" for="update-memberemail">Email</label>
											<div class="col-md-7">
												<input class="form-control" name="update-memberemail" required="true" type="text"
												value="' . $memberInfo->email . '">
											</div>
										
										<input type="hidden" name="update-memberid" value="' . $memberInfo->id . '">	
									</div>';	
			    	    break;
			    	}
			    	
			    	        echo    '<div class="form-group">
										<div class="col-sm-offset-5 col-sm-5">
											<input class="btn btn-success" type="submit" name="update-membersubmit" value="Update">
											<a class="btn btn-danger" name="update-membercancel"
										    href="/view/members/members.php?member=' . ($_GET['member']) . '">Cancel</a>
										    
										</div>
									
					                </div>
					    </form>
					</div>';
					
				    } else {
				        echo MsgLabels::err("The member is not found.");
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