<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PotGallary</title>
	
	<link rel="stylesheet" href="./src/bootsrapsrc/font-awesome-4.7.0/css/font-awesome.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="./src/SrcFile/index.css">
	
	
<style type="text/css">

</style>
</head>
<body >
	<div class="progress-container">
		<div class="progressbar" id="pbar"></div>
	</div>
	<header>
		<div>
			<nav id="headnav" class="navbar navbar-expand-sm navbar-dark bg-dark">
			  	
				<div id="popdiv">
					<button onclick=
					"document.getElementById('id01').style.display=
					'block'">Login</button>

					<div id="id01" class="modals">
					  <span onclick="document.getElementById('id01').style.display='none'" 
					  			class="close" title="Close Modals">&times;</span>
					  	<form class="modal-content" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
							<div class="containers">
							    
							    <h1>Sign Up</h1>
							    <p>Please fill in this form to create an account.</p>
							    
							    <hr id="hrpop">

							    <label for="email"><b>Email</b></label>
							    <input type="email" name="email" placeholder="Enter Email" required>

							    <label for="password"><b>Password</b></label>
							    <input type="password" name="password" placeholder="Enter Password" required>

							    <label for="pswrepeat"><b>Repeat Password</b></label>
							    <input type="password" name="pswrepeat" placeholder="Repeat Password" required>
							      
							    <label>
							        <input type="checkbox" checked="checked" name="remember" 
							        style="margin-bottom:15px"> Remember me
							    </label>

							    <p>By creating an account you agree to our <a href="#" 
							    	style="color:dodgerblue">Terms & Privacy</a>.</p>

							    <div class="clearfix">
							        <button type="button" 
							        onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
							    	Cancel</button>
							        
							        <button type="submit" name="signup" class="signupbtn">Sign Up</button>
							    </div>
						    
						    </div>
					  	
					  	</form>
					</div>

				</div>
				<div class="mainnav">
					
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
			    		data-bs-target="#mynavbar">
			      <span class="navbar-toggler-icon"></span>
			    	</button>
				    <div id="mynavbar" class="collapse navbar-collapse" >
				      <ul class="navbar-nav me-auto">
				        <li class="nav-item">
				          <a class="nav-link" href="./index.html">HOME</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="#.profile">PROFILE</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link"  href="#feedform">FeedBack</a>
				        </li>
				      </ul>
				      <marquee id="marquee1" behavior="alternate" scrollamount="2" >
				      	<label id="headline1">&nbsp; Portrait Gallary &nbsp;</label>
				      </marquee>
				      <form id="form1" class="d-flex searchs">
				      	<div class="formdiv">
				          <input class="form-control me-2" type="text" placeholder="     Search not working currently">
				          <button class="btn btn-primary" type="button">Search</button>
				      	</div>
				      </form>
				    </div>
				</div>
			</nav>
		</div>
	</header>
	<br>
	<?php require_once ('./src/SrcFile/config.php'); ?>					  
	<main class="maincont">
		<div class="container" >
			  <span onclick="this.parentElement.style.display='none'" class="closebtn" >&times;</span><br>
			  <img id="expandedImg" style=" border-radius:20px ;" ><br><br>
			  
			  <div id="imgtext"></div><br>
			  <hr id="hr1" width="660px" /><br>
		</div>

		<!-- The four columns -->
		<div class="row">
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG1.jpg" alt="IMG01" style="width:100%" 	onclick="myFunction(this);">
			  </div>
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG2.jpg" alt="IMG11" style="width:100%" 	onclick="myFunction(this);">
			  </div>
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG3.jpg" alt="IMG21" style="width:100%" onclick="myFunction(this);">
			  </div>
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG4.jpg" alt="IMG31" style="width:100%" onclick="myFunction(this);">
			  </div>
			  			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG5.jpg" alt="IMG02" style="width:100%" 	onclick="myFunction(this);">
			  </div>
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG6.jpg" alt="IMG12" style="width:100%" 	onclick="myFunction(this);">
			  </div>
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG7.jpg" alt="IMG22" style="width:100%" onclick="myFunction(this);">
			  </div>
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG8.jpg" alt="IMG32" style="width:100%" onclick="myFunction(this);">
			  </div>
  			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG9.jpg" alt="IMG03" style="width:100%" 	onclick="myFunction(this);">
			  </div>
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG10.jpg" alt="IMG13" style="width:100%" 	onclick="myFunction(this);">
			  </div>
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/Abstract.jpg" alt="IMG23" style="width:100%" onclick="myFunction(this);">
			  </div>
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG1.jpg" alt="IMG33" style="width:100%" onclick="myFunction(this);">
			  </div>
			  			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG2.jpg" alt="IMG04" style="width:100%" 	onclick="myFunction(this);">
			  </div>
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG3.jpg" alt="IMG14" style="width:100%" 	onclick="myFunction(this);">
			  </div>
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG4.jpg" alt="IMG23" style="width:100%" onclick="myFunction(this);">
			  </div>
			  <div class="column">
			    	<img id="img1" src="./src/Gallary/IMG5.jpg" alt="IMG34" style="width:100%" onclick="myFunction(this);">
			  </div>

		</div>
		<script src="./src/SrcFile/index.js"></script>
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
			<!-- 
		<script src="./src/SrcFile/FileSaver.js/js1/FileSaver.js" ></script>
		<script src="./src/SrcFile/FileSaver.js/js1/FileSaver.js"></script>
		<script src="./src/SrcFile/FileSaver.js/srcjs/FileSaver.js"></script>
		 -->
		<script type="text/javascript">
			// Get the modal
			var modals = document.getElementById('id01');

			// When the user clicks anywhere outside of the modals, close it
			window.onclick = function(event) {
			  if (event.target == modals) {
			    modals.style.display = "none";
			  }
			}

		</script>
		<script type="text/javascript">
			// When the user scrolls the page, execute myFunction
			window.onscroll = function(){mypbarFunct()};

			function mypbarFunct(){
				var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
				var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
				var scrolled = (winScroll / height) * 100;
				document.getElementById("pbar").style.width = scrolled + "%";
			}
		</script>

		<br>

		<br><br>
		<hr id="hr1" width="300rem" />
	   	<br>
		<fieldset id="fieldart">
		 	<legend>About Artist & Painting</legend><hr width="200em"  style="margin: auto; color: yellow " >
		 	<br>
		 	<p id="pre" >
				&emsp; &emsp;<em>Painting Prevent the <u>Blindness</u> of the mind</em> painting is the Answer to Unresolve Questions of the Mind, which we Landed on Canvas. Painting is a Fine Art. <br>
				&emsp; &emsp;Painting is my life Colorful Love, that is the biggest Gift given to me by God, the one who Connected my Life with a purpose, or the way to go the Unique form of Nature or Park. <br>
				&emsp; &emsp;Painting gives us a chance to get to know the Beauty of Nature More Closely in my Life, Painting had given me strength to Show mi identity to the World. <br>
				&emsp; &emsp;The Existence of my Life is Related to Painting, this is My Friend who has given me a lot without asking for anything from which i have made me my name Recognized. <br><strong>That's Why I Love Paintings...</strong>	
		 	</p>		
		</fieldset>
	   <br><br>

		<hr id="hr1" width="550rem" >
		<br>
	</main>
	<footer class="footer">

		<div class="container2">

			<div class="footer-row">

				<div class="footer-col">
					<h4> Contact US	</h4>
					<ul>
						<li>Artist : Neelam</li>
						<li>Location : Pune</li>
						<li>Company : Elite Eagle</li>
						<li>Developer : Lakesh Jat</li>
						<li>Contact : 879685....</li>
					</ul>
				</div>

				<div class="footer-col">
					<h4> Follows Us</h4>
					<a href="https://www.facebook.com"><i class="fa fa-facebook circle"></i></a>
					<a href="https://www.instagram.com"><i class="fa fa-instagram circle"></i></a>
					<a href="https://www.twitter.com"><i class="fa fa-twitter circle"></i></a>
					<a href="https://www.youtube.com"><i class="fa fa-youtube circle"></i></a><br><br>
					<a href="https://www.pinterest.com"><i class="fa fa-pinterest circle"></i></a>

				</div>

				<div class="footer-col">
					<h4> Help </h4>
					<ul style="text-decoration: none;">
						<li><a id="foothelp" href="#">FAQ</a></li>
					</ul>
				</div>

				<div id="feedform" class="footer-col">
					<h4> FeedBack</h4>
					<ul>
						<li>Please Fill Feedback Form</li>
						<li> how you Feel About Gallery</li>	
					</ul>
					<label for="title">
						<input id="title" type="text" name="name" placeholder="Enter Name" />	
					</label>

					<label for="title">
						<input id="location" type="text" name="name" placeholder="Enter Location" />	
					</label>

					<input type="hidden" id="date" size="40">

					<label for="content">

						<textarea id="content" 
						placeholder="Enter FeedBack Text Here.." >
						 </textarea><br>
					</label>

					<button onclick="saveFormAsTextFile()" class="footbtn" > Submit</button>
					
				</div>

			</div>
			
		</div>

	</footer>

</body>
</html>