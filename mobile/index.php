<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wide Media Production</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../Assets/css/mobile-style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../Assets/js/hor-scroll.js"></script>
	<!--link rel="apple-touch-icon" sizes="60x60" href="Assets/images/favicon.png"-->
	<!--link rel="icon" href="Assets/images/favicon.ico"-->
</head>
<body>

<!-- ###################### NAVIGASI TIMELINE ###################### -->
<div class="brand-hero-logo" id="brandLogo">
	<a href="index.html">
		<img src="../Assets/images/logo.png" alt="Logo">
	</a>
</div>
<!-- ############################################ NAVIGASI TIMELINE BETA ############################################ -->
<!-- Use any element to open the sidenav -->
<div class="effect__click">
	<div class="openNav card__front"> <!-- positioning the menubar -->
		<span onclick="openNav()" class="glyphicon glyphicon-th"></span>
	</div>
	<div class="closeNav card__back">
		<span onclick="closeNav()" class="glyphicon glyphicon-th"></span>
	</div>
</div>

<div id="mySidenav" class="sidenav">
	<div class="sideN">
		<a href="#section1" style="margin-bottom: 20px;">home</a><br>
		<a href="#section2" style="margin-bottom: 20px;">about us</a><br>
		<a href="#section3" style="margin-bottom: 20px;">officers</a><br>
		<a href="#section4" style="margin-bottom: 20px;">services</a><br>
		<a href="#section5" style="margin-bottom: 20px;">projects</a><br>
		<a href="#section6" >keep in touch with us</a>
	</div>
	<div class="footer-fix">
		<span>wide media production &copy; 2017</span>
	</div>
</div>
<!-- ############################################ NAVIGASI TIMELINE BETA ############################################ -->

<!-- ###################### HOME PAGE ###################### -->
<div class="section home" id="section1">
	<div class="glasseffect">
		<h1 class="hero-title">DIGITAL AGENCY</h1>
		<h1 class="vertical-intro">CREATIVE</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, maxime cum nulla nobis qui illo animi quisquam consequatur fuga? Optio labore consectetur, minima maiores! Possimus at reprehenderit magnam vel perferendis.</p>
	</div>
</div>
<video id="my-video" class="video" muted loop>
	<source src="../Assets/video/demo.mp4" type="video/mp4">
	<source src="../Assets/video/demo.ogv" type="video/ogg">
	<source src="../Assets/video/demo.webm" type="video/webm">
</video><!-- BG VIDEO -->

<!-- ###################### ABOUT PAGE ###################### -->
<div class="section about" id="section2">
	<div class="container-about">
		<h1 class="hero-title">ABOUT</h1>
		<h1 class="vertical-intro">IT'S ALL</h1>
		<p>‘A fathomless and boundless deep, There we wander, there we weep; On the hungry craving wind My Spectre follows thee behind. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero reiciendis accusamus atque expedita debitis reprehenderit, adipisci, nobis illo est in unde tempora fugit veniam suscipit voluptatibus sint ut sed amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit libero quasi provident est magni, autem! Quibusdam recusandae modi, asperiores voluptas quisquam totam adipisci sint aspernatur, iure, soluta eos veritatis sequi!</p>
	</div>
</div>

<!-- ###################### OFFICERS PAGE ###################### -->
<div class="section officers" id="section3">
	<div class="container-officers wrapper">
		<!--div class="titlePage">
			<h1 class="hero-title">OFFICERS</h1>
		</div-->
		<div class="col-bg-full first-bg" id="officer1">
			<div id="off1">
				<h2>LUKAS RIZKIAWAN</h2>
				<h2>Chief Executive Officer</h2>
				<p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi maiores veritatis pariatur quidem corrupti enim iste eum.</p>
			</div>
		</div>
		<div class="col-bg-full second-bg" id="officer2">
			<div id="off2">
			    <h2>PAK YUSAK</h2>
				<h2>Chief Creative Officer</h2>
				<p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>
			</div>
		</div>
	</div>
</div>

<!-- ###################### SERVICES PAGE ###################### -->
<div class="section services" id="section4">
	<div class="container-service">
		<h1 class="hero-title">SERVICES</h1>
		<h1 class="vertical-intro">OUR</h1>
		<div class="panel-group" id="accordion">
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">COMPANY PROFILE</a>
		        </h4>
		      </div>
		      <div id="collapse1" class="panel-collapse collapse in">
		        <div class="panel-body" style="border-top: 1px solid transparent;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">SITUATION LOOPING</a>
		        </h4>
		      </div>
		      <div id="collapse2" class="panel-collapse collapse">
		        <div class="panel-body" style="border-top: 1px solid transparent;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		      </div>
		    </div>
			<div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">SPECIFIC CONDITION</a>
		        </h4>
		      </div>
		      <div id="collapse3" class="panel-collapse collapse">
		        <div class="panel-body" style="border-top: 1px solid transparent;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		      </div>
		    </div>
			<div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">DIGITAL FLYER</a>
		        </h4>
		      </div>
		      <div id="collapse4" class="panel-collapse collapse">
		        <div class="panel-body" style="border-top: 1px solid transparent;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		      </div>
		    </div>
			<div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">DIGITAL NAME CARD</a>
		        </h4>
		      </div>
		      <div id="collapse5" class="panel-collapse collapse">
		        <div class="panel-body" style="border-top: 1px solid transparent;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">VIDEO EDITING & COMPOSITING</a>
		        </h4>
		      </div>
		      <div id="collapse6" class="panel-collapse collapse">
		        <div class="panel-body" style="border-top: 1px solid transparent;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">DIGITAL NAME CARD</a>
		        </h4>
		      </div>
		      <div id="collapse7" class="panel-collapse collapse">
		        <div class="panel-body" style="border-top: 1px solid transparent;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">FILM MAKING</a>
		        </h4>
		      </div>
		      <div id="collapse8" class="panel-collapse collapse">
		        <div class="panel-body" style="border-top: 1px solid transparent;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">WEBSITE</a>
		        </h4>
		      </div>
		      <div id="collapse9" class="panel-collapse collapse">
		        <div class="panel-body" style="border-top: 1px solid transparent;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		      </div>
		    </div>
		</div>
	</div>
</div>

<!-- ###################### PROJECTS PAGE ###################### -->
<div class="section projects" id="section5">
	<div class="container-project">
		<h1 class="hero-title">PROJECTS</h1>
		<h1 class="vertical-intro">LATEST</h1>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="../Assets/images/project_1.jpg" alt="Chania">
		      <div class="carousel-caption">
		        <h3>Los Angeles</h3>
		        <p>LA is always so much fun!</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="../Assets/images/project_2.jpg" alt="Chicago">
		      <div class="carousel-caption">
		        <h3>Chicago</h3>
		        <p>Thank you, Chicago!</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="../Assets/images/project_3.jpg" alt="New York">
		      <div class="carousel-caption">
		        <h3>New York</h3>
		        <p>We love the Big Apple!</p>
		      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<div id="myCarousel2" class="carousel slide" data-ride="carousel2">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel2" data-slide-to="1"></li>
		    <li data-target="#myCarousel2" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="../Assets/images/project_4.jpg" alt="Chania">
		      <div class="carousel-caption">
		        <h3>Los Angeles</h3>
		        <p>LA is always so much fun!</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="../Assets/images/project_5.jpg" alt="Chicago">
		      <div class="carousel-caption">
		        <h3>Chicago</h3>
		        <p>Thank you, Chicago!</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="../Assets/images/project_6.jpg" alt="New York">
		      <div class="carousel-caption">
		        <h3>New York</h3>
		        <p>We love the Big Apple!</p>
		      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel2" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>

<!-- ###################### CONTACT PAGE ###################### -->
<div class="section contact" id="section6">
	<div class="container-contact">
		<h1 class="hero-title">TOUCH WITH US</h1>
		<h1 class="vertical-intro">GET IN</h1>
		<div class="form-kontak">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group" style="margin-bottom: 20px">
					<label for="name">NAME</label>
					<input type="text" id="name" class="form-control" name="fname" required>
				</div>
				<div class="form-group" style="margin-bottom: 20px">
					<label for="mail">EMAIL</label>
					<input type="email" id="mail" class="form-control" name="mail" required>
				</div>
				<div class="form-group">
					<label for="phone">PHONE</label>
					<input type="text" id="phone" class="form-control" name="phone" required>
				</div>
				<div class="form-group">
					<label for="message">MESSAGE</label>
					<textarea name="message" id="message" class="form-control form-pesan"></textarea>
				</div>
				<input type="submit" id="submit" name="submit" value="Send">
			</form>
		</div>
	</div>
	<div class="social-media" id="sosMedia">
		<a href="#"><img src="../Assets/images/layout_05.png" alt="Facebook"></a>
		<a href="#"><img src="../Assets/images/layout_07.png" alt="Google Plus"></a>
		<a href="#"><img src="../Assets/images/layout_09.png" alt="Instagram"></a>
		<a href="#"><img src="../Assets/images/layout_11.png" alt="Twitter"></a>
		<a href="#"><img src="../Assets/images/layout_13.png" alt="Youtube"></a>
	</div>
</div>

<!-- ###################### JS ###################### -->
<script type="text/javascript" src="../Assets/js/jquery.fullpage.js"></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js'></script>
<script type="text/javascript">
	FastClick.attach(document.body);
	$('#fullpage').fullpage();

	(function() {
	  /**
	   * Video element
	   * @type {HTMLElement}
	   */
	  var video = document.getElementById("my-video");

	  /**
	   * Check if video can play, and play it
	   */
	  video.addEventListener( "canplay", function() {
	    video.play();
	  });
	})();

	/* Set the width of the side navigation to 250px */
	function openNav() {
	    document.getElementById("mySidenav").style.right = "0";
	}
	
	(function() {
	  var cards = document.querySelectorAll(".effect__click");
	  for ( var i  = 0, len = cards.length; i < len; i++ ) {
	    var card = cards[i];
	    clickListener( card );
	  }

	  function clickListener(effect__click) {
	    card.addEventListener( "click", function() {
	      var c = this.classList;
	      c.contains("flipped") === true ? c.remove("flipped") : c.add("flipped");
	    });
	  }
	})();

	/* Set the width of the side navigation to 0 */
	function closeNav() {
	    document.getElementById("mySidenav").style.right = "-75%";
	}
	
</script>

</body>
</html>
