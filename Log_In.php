<?php include('SERVER.php') ?>
<DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<meta name="viewpoint" content="width=device-width">
		<title>AppTheme</title>
		<link rel="stylesheet" href="css/style.css">
			
                
	</head>
	<body>

       
		<!--HEADER-->
		<header>
			
		
		<div class="container">
			<div id="branding">
				<div class="app-theme">
					<h1><span class="highlight">Maintainance</span>Tracker</h1>
				</div>
				<nav>
					<ul>
						<li class="current"><a href="index.html">Home</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="about.html">About</a></li>
					</ul>
				</nav>
			</div>

		</header>
		<section id="showcase">
			<div class="container">
				<h2>WELCOME TO MAINTAINANCE TRACKER WEBSITE</h2 >
				<p>A Simple UI Temlate In HTML5,CSS3 & JavaScript</p>


			</div>
		</section>

		<div class="form">
        
        <div id="login" align="center">   
          <h1>Welcome Back!</h1>
          
          <form action="Log_In.php" method="post">
          
            <div class="field-wrap">
            <label style="margin:10px;">
              Email Address<span class="req" style="margin-left:50px;"></span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label style="margin:10px;">
              Password<span class="req" style="margin-left:75px;"></span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
		
	

  		<footer>
  			<p>
  				Buhwa Web Design,Copyright&copy; 2018
  			</p>
  		</footer>
  		
                
	</body>
</html>