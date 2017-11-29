<!DOCTYPE html>
<html>

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php
        include($_SERVER['DOCUMENT_ROOT'] . "/config.php");
        include($WEB_DIRS['bootstrapCDN']);
     ?>

     <title><?php print($WEB_VALUE['sitePageTitle']); ?></title>

 </head>

<body id="top">
	<div id="wrapper">
			<!-- start header section -->
			<div id="header">
				<header>
				    <?php
                        include($WEB_DIRS['sitePageNavBar']);
                    ?>

				
					<div class="container" id="logo">
	                   <div class="row">
	                       <div class="jumbotron">
	                           <h1 align="center"><?php print($WEB_VALUE['sitePageTitle']); ?></h1>
	                           <h4 class="page-header"><?php print($WEB_VALUE['sitePageJumbotron']); ?></h4>
       		               </div> <!-- end class: jumbotron -->
	                   </div> <!-- end class: row  -->
	               </div> <!-- end class: logo container -->	
				</header> <!-- end header -->
			</div>
			<!-- end header section -->

			<div id="main-content">
			<!-- start welcome section -->
			   	<section id="home-welcome">
       				<div class="container">
						   <div class="row">
       							<div class="col-md-12"><h2 class="page-header"><?php echo $WEB_VALUE['homeIntroTitle']; ?></h2></div>
       						</div>
       						<div class="row">
       							<h4>
       							Welcome to <?php echo $WEB_VALUE['sitePageTitle']; ?>.
       							<br>This website intends to provide you with the information about the Bills, Debates and 
       							Votes currently taking place, as well as the information and the voting record of 
       							your representatives - members of the House of Commons and the House of Lords 
       							in the UK Houses of Parliament. 
  								</h4>
  								
  								<h3><b>This is what you will see from this site.</b></h3>
  								 <ol>
  									<li><b>Bills: </b>The information about the bills, the stages in the parliament,
  									as well as debates and votes taking place in relation to the bill.</li>
  									<li><b>Debates: </b>The information about the debates in the parliament,
  									in the topics such as the Government Policies, Urgent Questions; as well as 
  									Ministers, Secretary of State, Chancellor of the Exchequer, and Prime Ministers Questions.</li>
  									<li><b>Votes: </b>The information about the votes - past and present, taking place in the Parliament.
  									by Members in the House of Commons and the House of Lords.</li>
  								</ol>
    					</div>


					</div>
				</section>
				<!-- end welcome section -->


				<!-- start about section -->
				<section id="home-about">
					<div class="container">
						<div class="row">
							<div class="col-md-12"><h2 class="page-header"><?php echo $WEB_VALUE['homeAboutTitle']; ?></h2></div>
						</div>
						<div class="row">
							<h4>
								<b>Yes! We run this site for free!</b> <br>
								This site is run by volunteers who are passionate about Politics.
								We receive no income from anyone and tend to keep this site free forever.
								However, we do accept donations in Bitcoins - <a href='#'>click here</a>
							</h4>
						</div>
					</div>
				</section>
				<!-- end about section -->

				<!-- start contact section -->
				<section id="contact">
					<div class="container">
						<div class="row">
							<div class="col-md-12"><h2 class="page-header"><?php echo $WEB_VALUE['homeContactTitle']; ?></h2></div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.534648211203!2d-0.129780983904194!3d51.503406579634536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c56a6cc61d%3A0x2eca1ef309dd9534!2s10+Downing+St%2C+Westminster%2C+London+SW1A+2AB!5e0!3m2!1sen!2suk!4v1511450403986" width="100%" height="400px" frameborder="1" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="col-md-4">
								<h4>
									<b>Pie Minister Office<br>10 Drowning Street</b>
								</h4>
								<p>
									Westminster, City of London<br> SW1A 2AB<br>
									<i>020 7930 4480</i> <br>
									<i><a href="#">Email: admin@tahi.politics</a></i>
								</p>
							</div>
						</div>
					</div>
				</section>
				<!-- end contact section -->
			</div>
			<!--  start footer section -->
			<div id="footer">
            <?php
        	    include($WEB_DIRS['sitePageFooter']);
           	?>
			</div>
    </div>        
</body>

</html>