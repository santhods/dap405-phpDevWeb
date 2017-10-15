<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Member Portal</title>

	<script
  src="https://code.jquery.com/jquery-3.2.1.slim.js"
  integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--  custom CSS -->
<link rel="stylesheet" href="../css/index.css">


</head>

	<body id="top">

		<?php
		require("../backend/dbconnect.php");
		require("../backend/header.php");

		if (!$_SESSION['auth']) {
			echo "Session Not Started";
			header("location: /frontend/signin.php");
		}
		else {
				echo "Session Started";
				$user_id = $_SESSION["usr"];
		}

		?>
			<!-- start header section -->
		<header>
			<section id="headerPortal">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5">
							<h2>MEMBER PORTAL</h2>
						</div>
						<div class="col-md-offset-3 col-md-4">
							<a href="/backend/signout.php" class="btn btn-danger pull-right">Sign Out</a>
						</div>
					</div>
				</div>
			</section>
		</header>
		<!-- end header section -->




		<section id="bodyportal">
				<div class="container">
					<div class="row">
					</div>
					<div class="row">
					</div>
					<div class="row">
					</div>
				</div>
			</section>

			<!-- start about section -->
			   	<section id="about">
       				<div class="container">
						   <div class="row">
       							<div class="col-md-12"><h3 class="page-header"><?php echo $user_id;?></h3></div>
       						</div>

       					<div class="row">
       							<h4>Nam in tempus libero. Morbi tristique pulvinar accumsan. Sed sollicitudin, elit et fringilla gravida, velit diam interdum enim, ac vestibulum metus orci non nisl. Suspendisse vel hendrerit risus. Nam nec augue tincidunt, finibus elit et, tempor diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras lobortis facilisis magna. Suspendisse consequat quis turpis ut accumsan. Ut lectus nisl, placerat eget felis vitae, tempus porta eros.
    					In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since. "Whenever you feel like criticizing any one," he told me, "just remember that all the people in this world haven't had the advantages that you've had."
He didn't say any more, but we've always been unusually communicative in a reserved way, and I understood that he meant a great deal more than that. In consequence, I'm inclined to reserve all judgments, a habit that has opened up many curious natures to me and also made me the victim of not a few veteran bores. The abnormal mind is quick to detect and attach itself to this quality when it appears in a normal person, and so it came about that in college I was unjustly accused of being a politician, because I was privy to the secret griefs of wild, unknown men. Most of the confidences were unsought-frequently I have feigned sleep, preoccupation, or a hostile levity when I realized by some unmistakable sign that an intimate revelation was quivering on the horizon; for the intimate revelations of young men, or at least the terms in which they express them, are usually plagiaristic and marred by obvious suppressions. Reserving judgments is a matter of infinite hope. I am still a little afraid of missing something if I forget that, as my father snobbishly suggested, and I snobbishly repeat, a sense of the fundamental decencies is parcelled out unequally at birth.
And, after boasting this way of my tolerance, I come to the admission that it has a limit. Conduct may be founded on the hard rock or the wet marshes, but after a certain point I don't care what it's founded on. When I came back from the East last autumn I felt that I wanted the world to be in uniform and at a sort of moral attention forever; I wanted no more riotous excursions with privileged glimpses into the human heart. Only Gatsby, the man who gives his name to this book, was exempt from my reaction-Gatsby, who represented everything for which I have an unaffected scorn. If personality is an unbroken series of successful gestures, then there was something gorgeous about him, some heightened sensitivity to the promises of life, as if he were related to one of those intricate machines that register earthquakes ten thousand miles away. This responsiveness had nothing to do with that flabby impressionability which is dignified under the name of the "creative temperament"-it was an extraordinary gift for hope, a romantic readiness such as I have never found in any other person and which it is not likely I shall ever find again. No-Gatsby turned out all right at the end; it is what preyed on Gatsby, what foul dust floated in the wake of his dreams that temporarily closed out my interest in the abortive sorrows and short-winded elations of men.
								</h4>
    					</div>
					</div>
				</section>
				<!-- end about section -->

				<!-- start news section -->
				<section id="news">
					<div class="container">
					<div class="row">
					<div class="col-md-12"><h3 class="page-header">Latest News</h3></div>
					</div>
					<div class="row">
    					<div class="col-md-4">
    						<h4 class="headline page-header">Time to Talk About IoT</h4>
							<h4>Nunc de hominis summo bono quaeritur; Si verbum sequimur, primum longius verbum praepositum quam bonum. Satisne ergo pudori consulat, si quis sine teste libidini pareat? Nam Pyrrho, Aristo, Erillus iam diu abiecti. Aliud igitur esse censet gaudere, aliud non dolere. Nunc haec primum fortasse audientis servire debemus.</h4>
    					</div>
    					<div class="col-md-4">
							<h4 class="headline page-header">WannaCry Randomware</h4>
    						<h4>Te enim iudicem aequum puto, modo quae dicat ille bene noris. Unum nescio, quo modo possit, si luxuriosus sit, finitas cupiditates habere. Negat esse eam, inquit, propter se expetendam. Maximas vero virtutes iacere omnis necesse est voluptate dominante. Nam quid possumus facere melius? Scisse enim te quis coarguere possit?</h4>
    					</div>
    					<div class="col-md-4">
							<h4 class="headline page-header">Heading Towards Cloud</h4>
    						<h4>Atque haec ita iustitiae propria sunt, ut sint virtutum reliquarum communia. Minime vero, inquit ille, consentit. Tollenda est atque extrahenda radicitus. Te ipsum, dignissimum maioribus tuis, voluptasne induxit, ut adolescentulus eriperes P.</h4>
    					</div>
    				</div>
    			</div>
				</section>
				<!-- end news section -->

				<!--  start footer section -->
				<section id="footer">
					<div class="container-fluid">
						<div class="row">
							<div class"col-lg-12">
								<h4 class="page-header">DAP405 - Assignment, Student Number: 1707260</h4>
								</div>
							</div>
					</div>
				</section>
	</body>
</html>
