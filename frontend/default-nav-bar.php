<?php
include($_SERVER['DOCUMENT_ROOT'] . "/config.php");
?>


<div id="bodynav" class="container-fluid">
    <div class="row">
	     <div class="navbar navbar-inverse navbar-fixed-top">
	        <div class="navbar-header">
                
                <a class="navbar-brand" href="#top"><?php print($WEB_VALUE['sitePageTitle']); ?></a>
							
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navibar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button> <!-- end class: button, navbar-toggle -->
                                     
            </div> <!-- end class: navbar-header -->
			
			<div id="navibar" class="collapse navbar-collapse">
           	    <ul class="nav navbar-nav" style="color:white">
                    <li><a href="#top">Home</a></li>
                    <li><a href="#about">About Us</a></li>
	       		    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#contact">Contact</a></li>           
                </ul>              
                <?php 
                #include('default-nav-btn.php');
                include($WEB_DIRS['siteMemberNavBtn']);
                ?>
    
           	</div> <!-- end id: navibar -->
	     </div> <!-- end class: navigationbar-fixed-top -->			    
	</div> <!-- end class: row -->
</div> <!-- end id: bodynav -->