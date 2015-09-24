<?php 
$pageTitle = 'Dani Kuck Portfolio'; 
$numbers = 123.456; 

$server = 'custsql-spro-ipg05.ipagemysql.com';
$username = 'danikuck';
$password = 'Shelbi!8594';

$conn = mysql_connect($server, $username, $password);


mysql_select_db('daniport',$conn);


$result = mysql_query('SELECT * FROM portfolio WHERE pageID = 1');

$assoc_result = mysql_fetch_assoc($result);

$mmSQL = mysql_query('SELECT * FROM portfolio');

/*email*/

$showMessage = false;
$error = false;

if(isset($_POST['email']))
{
	if(empty($_POST['email']) || empty($_POST['address']) || empty($_POST['subject']))
	{
		$error = true; 
	}
	else {

	$address = $_POST["address"];
	$subject = $_POST["subject"];
	$email = $_POST["email"];

	$recipient = "danielisekuck@gmail.com";

	$mailBody = "This mail is from: $address\n $email";

	mail($recipient, $subject, $mailBody);

	$showMessage = true;

    }
}

?>

<!DOCTYPE HTML>

<html>
	<head>
	
		<title>DK PORTFOLIO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/simple-slideshow-styles.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Head -->
			<section id="header">
				<header class="major">
					<h1><?php echo $assoc_result['headerHead']; ?></h1>
					<p><?php echo $assoc_result['headerP']; ?></p>
				</header>
				<div class="container">
					<ul class="actions">
						<li><a href="#one" class="button special scrolly">meow!</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main special">
				<div class="container">
					<div class="content">
						<header class="major">
							<h2><?php echo $assoc_result['oneHead']; ?></h2>
							<p><?php echo $assoc_result['oneP']; ?></p>
						</header>
					</div>
					
					<a href="#two" class="goto-next scrolly">Next</a>
				</div>
			</section>

		<!-- Section Two -->
			<section id="two" class="main special">
				<div class="container">
					<div class="content">
						<header class="major">
							<h2><?php echo $assoc_result['twoHead']; ?></h2>
						</header>
					
				
					<ul class="icons-grid">
						
							<li>
								<span class="icon major fa-code"></span>
								<h3>HTML. CSS. PHP. JS.</h3>
							</li>

							<li>
								<span class="icon major  fa-camera"></span>
								<h3>Graphic Design & Photography</h3>
							</li>

							
						</ul>           
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</div>
			</section>

		<!-- Section Three  -->
			<section id="three" class="main special">

				<div class="container">
					<div class="content">
						<header class="major">
							<h2><?php echo $assoc_result['threeHead']; ?></h2>
							<p>A mini collection of my favorite photos I've taken over the years</p>
						</header>
						<div class="bss-slides num2" tabindex="2">
                          <figure>
                             <img src="images/skylineLA.jpg" width="100%" /><figcaption>Griffth Park Observatory, Los Angeles</a></figcaption> 
                          </figure>
                           <figure>
                               <img src="images/parkwalk.jpg" width="100%" /><figcaption>Central Park, New York City </a>.</figcaption> 
                          </figure>
                          <figure>
                             <img src="images/paramore.png" width="100%" /><figcaption>Paramore, KROQ Almost Acoustic Christmas 2010</a></figcaption> 
                          </figure>
                           <figure>
                             <img src="images/ben.png" width="100%" /><figcaption>Benjamin Kuck</a></figcaption> 
                          </figure>
                           <figure>
                             <img src="images/maui1.jpg" width="100%" /><figcaption>Kannapali, Maui 2015</a></figcaption> 
                          </figure>
                            </div> 
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</div>
			</section>

			<!-- Section Four -->
			<section id="four" class="main special">
				<div class="container">
					<div class="content">
						<header class="major">
							<h2>Websites</h2>
							<p>Coming Soon!</p>
						</header>
					</div>
					
					<a href="#footer" class="goto-next scrolly">Next</a>
				</div>
			</section>

		<!-- Footer -->
			<section id="footer">
				<div class="container">
					<header class="major">
						<h2>Let's Talk!</h2>
					</header>

			<div class="emailForm">
			<p>I will respond ASAP! Thanks</p>
			</div>
			
			<form action="MAILTO:someone@example.com" method="post">
			<div class="row uniform">
				<div class="6u 12u$(xsmall)">
				<label for="address">Your Email:</label>
				<textarea name="address" name="text" placeholder="you@email.com" /></textarea></div>

				<div class="6u 12u$(xsmall)">
				<label for="subject">Subject Title:</label>
				<textarea name="subject" type="text" placeholder="Title of Email" placeholder="Email" /></textarea></div>

				<div class="12u$">
				<label for="email">Your Message:</label>
				<textarea name="email" placeholder="Type Here" rows="4"></textarea></div>

				<div class="12u$">
				<ul class="actions">
				<li><input type="submit" value="Send Message" class="special" /></li>
				</ul>
				</div>
				</div>
			</form>
			</div>
		
				
				<footer>
					<ul class="icons">
						<li><a href="mailto:danikuck@aol.com" class="icon alt fa-envelope"><span class="label">Email Me</span></a></li>
						<li><a href="http://www.twitter.com/danielisee" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="http://www.facebook.com/danielise" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="" class="icon alt fa-female"><span class="label">Login</span></a></li>
					
					</ul>
					<ul class="copyright">
						<li>&copy; Danielle Kuck 2015</li>
					</ul>
				</footer>
				</section>

			

		<!-- JS -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/better-simple-slideshow.min.js"></script>
			<script>
			  var opts = {
			    auto       : false,
			    fullScreen : true,
			    swipe      : false
			  };
			  makeBSS('.num2', opts);
			</script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>