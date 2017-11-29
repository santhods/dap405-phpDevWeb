<!DOCTYPE html>
<html>

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
        include_once($WEB_DIRS['bootstrapCDN']);
        include_once($WEB_DIRS['siteDbsQuery'] . "queryMember.php");
        
        
        
        
        
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
					<?php 
					if (isset($_SESSION['update-member'])){
        				if ($_SESSION['update-member'] == true){
        					echo MsgLabels::success($_SESSION['update-membermsg']);
        				} else {
        					echo MsgLabels::err($_SESSION['update-membermsg']);
        				}
        				
        				unset($_SESSION['update-member'], $_SESSION['update-membermsg']);
        			}
        			
					?>
					
					<a href="<?php echo $_LNK['siteSectionMembers']; ?>">Go Back</a>
			    	
			    	<?php 
			    	
					if (isset($_GET['member'])){
			    		
			    		if (Admin::check() == true){
			    			echo '<div class="col-sm-offset-9 col-sm-1" >
			    					<a href="/view/members/memberEdit.php?member='. $_GET['member'] . '">Edit</a>
			    				 </div>';
			    		}
			    		
						
						$selectedMemberId = (int)$_GET['member'];
						
						$selectedMemberObj = QueryMember::getMemberDetail($selectedMemberId);
						
						foreach ($selectedMemberObj as $member){
							$img = '/img/member-' . $member->id .'.jpg';
							#echo ($img);
							echo '<div class="row">
								<div class="col-md-offset-1 col-md-4">
									<img src=" ' . $img .'" height="400" width="300">
								</div>
								<div class="col-md-7">
									<h2>' . $member->name . '</h2>
									<h3>' . $member->memberType . ', ' . $member->party . '</h3>
									<h5>Constituency: <b>' . $member->constituency . '</b></h5>
									<h5>In office since: <b>' . $member->firstAppointedDate . '</b></h5>
									<br>
									<h5><b>Contact:</b> <a href="mailto:' . $member->email . '">' . $member->email . '</a></h5>
								</div>
							</div>';
						}
						
					} else {
						echo MsgLabels::err("The Member is not found.");
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