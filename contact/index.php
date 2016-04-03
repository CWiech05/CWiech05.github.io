<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'From: Website Visitor';
	$to = 'cwiech@alumni.nd.edu';
	$subject = 'Message from My Portfolio Page';

	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
	    
	if ($_POST['submit']) {
	    if (mail ($to, $subject, $body, $from)) { 
        	echo '<p>Your message has been sent!</p>';
    	} else { 
        	echo '<p>Something went wrong, go back and try again!</p>'; 
    	}
	}
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Christina Wiech - Front End Developer</title>
		<meta name="description" content="Christina Wiech's front end developer portfolio site">
	    <link rel="stylesheet" href="../css/foundation.css" />
	    <link rel="stylesheet" type="text/css" href="../css/app.css">
	</head>

	<body>

		<!-- NAV -->
		<div class="row max-width">
			<div class="small-12 column no-margin no-padding">
				<header>
					<img src="../images/site-logo-green.png" alt="Logo of the initials CW" />

					<nav id="top-nav">
						<ul class="no-bullet">
							<li>
              					<a href="../index.html">Home</a>
            				</li>

							<li>
								<a href="../index.html#about">About</a>
							</li>

							<li>
								<a href="../index.html#portfolio-top">Portfolio</a>
							</li>

							<li>
								<a href="index.html">Contact</a>
							</li>
						</ul>
					</nav>
				</header>
			</div>
		</div>

		<!-- Contact header -->
		<div class="row">
	      <div class="small-4 small-offset-1 column">
	        <header id="portfolio-header">
	          <h3>Get In Touch</h3>

	        </header>
	      </div>
	    </div>

	    <!-- Contact Form -->
	    <div class="row">
		    <form action="index.php" method="post">
		    	<div class="row">
			    	<div class="small-4 small-offset-1 column">
			    		<label>Name</label>
			    		<input type="text" name="name" placeholder="Who are you?"/>
			    	</div>
			    </div>

			    <div class="row">
			    	<div class="small-4 small-offset-1 column">
			    		<label for="mail">E-mail</label>
			    		<input name="email" type="email" placeholder="kylo.ren@thefirstorder.org" />
			    	</div>
			    </div>

			    <div class="row">
			    	<div class="small-4 small-offset-1 column">
			    		<label for="msg">Message</label>
			    		<textarea id="msg" placeholder="Do, or do not. There is no try."></textarea>
			    	</div>
			    </div>

			    <div class="row">
			    	<div class="button small-1 small-offset-1 column">
			    		<button type="submit" name="submit">Send</button>
			    	</div>
			    </div>
		    </form>
		</div>
	    

	    <!-- Social Links Grid -->
		<div class="row" id="social">
			<div class="small-6 small-offset-3 column">
				<section>
					<h3>Find Me Here</h3>

					<ul class="no-bullet">
		      			<li>
		      				<a href="https://github.com/CWiech05" target="_blank">
		      					<svg xmlns="http://www.w3.org/2000/svg" width="66" height="60" viewBox="0 0 256 250" preserveAspectRatio="xMidYMid"><path d="M128 0C57.3 0 0 57.3 0 128 0 184.6 36.7 232.5 87.5 249.5 93.9 250.6 96.3 246.7 96.3 243.3 96.3 240.3 96.2 230.2 96.1 219.5 60.5 227.2 53 204.4 53 204.4 47.2 189.6 38.8 185.6 38.8 185.6 27.2 177.7 39.6 177.9 39.6 177.9 52.5 178.8 59.3 191 59.3 191 70.7 210.6 89.2 205 96.5 201.7 97.7 193.4 101 187.8 104.6 184.6 76.2 181.3 46.3 170.4 46.3 121.3 46.3 107.3 51.3 95.9 59.5 87 58.2 83.7 53.8 70.7 60.8 53.1 60.8 53.1 71.5 49.6 96 66.2 106.2 63.4 117.1 61.9 128 61.9 138.9 61.9 149.8 63.4 160.1 66.2 184.5 49.6 195.2 53.1 195.2 53.1 202.2 70.7 197.8 83.7 196.5 87 204.7 95.9 209.7 107.3 209.7 121.3 209.7 170.5 179.7 181.3 151.2 184.5 155.8 188.4 159.9 196.2 159.9 208.2 159.9 225.3 159.7 239.1 159.7 243.3 159.7 246.7 162.1 250.7 168.5 249.4 219.4 232.5 256 184.5 256 128 256 57.3 198.7 0 128 0ZM47.9 182.3C47.7 183 46.7 183.2 45.7 182.7 44.8 182.3 44.3 181.4 44.6 180.8 44.9 180.2 45.9 180 46.8 180.4 47.7 180.8 48.3 181.7 47.9 182.3ZM54.2 188C53.6 188.5 52.4 188.3 51.6 187.4 50.8 186.5 50.6 185.3 51.2 184.7 51.9 184.1 53 184.4 53.9 185.3 54.7 186.2 54.9 187.4 54.2 188ZM58.6 195.1C57.8 195.7 56.5 195.2 55.7 194 54.9 192.9 54.9 191.5 55.7 191 56.5 190.4 57.8 190.9 58.6 192.1 59.4 193.2 59.4 194.6 58.6 195.1ZM65.9 203.5C65.2 204.2 63.7 204 62.6 203 61.5 201.9 61.1 200.5 61.8 199.7 62.6 198.9 64.1 199.2 65.2 200.2 66.3 201.2 66.6 202.7 65.9 203.5ZM75.3 206.3C75 207.3 73.6 207.7 72.1 207.3 70.7 206.9 69.7 205.7 70 204.7 70.3 203.7 71.7 203.2 73.2 203.7 74.7 204.1 75.6 205.3 75.3 206.3ZM86 207.5C86.1 208.5 84.9 209.4 83.3 209.4 81.8 209.5 80.6 208.6 80.5 207.6 80.5 206.5 81.7 205.6 83.3 205.6 84.8 205.6 86 206.4 86 207.5ZM96.6 207.1C96.8 208.1 95.7 209.2 94.2 209.4 92.7 209.7 91.4 209.1 91.2 208.1 91 207 92.1 205.9 93.5 205.7 95.1 205.4 96.4 206 96.6 207.1Z" fill="#fff"/>
		                </svg>
		      				</a>
		      			</li>

		      			<li>
		      				<a href="http://codepen.io/CWiech05/" target="_blank">
		      					<svg xmlns="http://www.w3.org/2000/svg" width="66" height="60" viewBox="0 0 256 256" preserveAspectRatio="xMidYMid"><path d="M255.8 87.1C255.7 86.8 255.7 86.5 255.6 86.2 255.6 86 255.5 85.8 255.4 85.6 255.4 85.4 255.3 85.1 255.2 84.8 255.1 84.6 255 84.5 254.9 84.3 254.8 84 254.7 83.8 254.5 83.6 254.4 83.4 254.3 83.2 254.2 83.1 254.1 82.8 253.9 82.6 253.8 82.4 253.6 82.2 253.5 82.1 253.4 81.9 253.2 81.7 253 81.5 252.8 81.3 252.7 81.2 252.5 81 252.4 80.9 252.2 80.7 252 80.5 251.8 80.4 251.6 80.2 251.4 80.1 251.3 80 251.2 79.9 251.2 79.9 251.1 79.9L134.1 1.8C130.4-0.6 125.6-0.6 121.9 1.8L4.9 79.8C4.8 79.9 4.8 79.9 4.7 80 4.5 80.1 4.4 80.2 4.2 80.4 4 80.5 3.8 80.7 3.6 80.9 3.4 81 3.3 81.2 3.2 81.3 3 81.5 2.8 81.7 2.6 81.9 2.5 82.1 2.4 82.2 2.2 82.4 2.1 82.6 1.9 82.8 1.8 83.1 1.7 83.2 1.6 83.4 1.5 83.6 1.3 83.8 1.2 84 1.1 84.3 1 84.5 0.9 84.6 0.8 84.8 0.7 85.1 0.6 85.4 0.5 85.6 0.5 85.8 0.4 86 0.4 86.1 0.3 86.4 0.2 86.8 0.2 87.1 0.2 87.2 0.1 87.4 0.1 87.5 0 88 0 88.5 0 89L0 167C0 167.5 0 168 0.1 168.4 0.1 168.6 0.2 168.7 0.2 168.9 0.3 169.2 0.3 169.5 0.4 169.8 0.5 170 0.5 170.2 0.6 170.4 0.7 170.6 0.8 170.9 0.9 171.2 0.9 171.3 1 171.5 1.1 171.7 1.2 171.9 1.3 172.2 1.5 172.4 1.6 172.6 1.7 172.8 1.8 172.9 1.9 173.2 2.1 173.4 2.3 173.6 2.4 173.8 2.5 173.9 2.7 174.1 2.8 174.3 3 174.5 3.2 174.7 3.3 174.8 3.5 175 3.7 175.1 3.9 175.2 4.1 175.4 4.3 175.6 4.4 175.7 4.6 175.8 4.8 176 4.8 176 4.9 176.1 4.9 176.1L121.9 254.1C123.7 255.4 125.9 256 128 256 130.1 256 132.3 255.4 134.1 254.1L251.1 176.1C251.2 176.1 251.2 176.1 251.3 176 251.5 175.9 251.6 175.8 251.8 175.6 252 175.5 252.2 175.3 252.4 175.1 252.6 175 252.7 174.8 252.8 174.7 253 174.5 253.2 174.3 253.4 174.1 253.5 173.9 253.6 173.8 253.8 173.6 253.9 173.4 254.1 173.2 254.2 172.9 254.3 172.8 254.4 172.6 254.5 172.4 254.7 172.2 254.8 172 254.9 171.7 255 171.5 255.1 171.4 255.2 171.2 255.3 170.9 255.4 170.6 255.5 170.4 255.5 170.2 255.6 170 255.6 169.8 255.7 169.5 255.8 169.2 255.8 168.9 255.8 168.8 255.9 168.6 255.9 168.4 256 168 256 167.5 256 167L256 89C256 88.5 256 88 255.9 87.6 255.9 87.4 255.8 87.3 255.8 87.1L255.8 87.1ZM128 154L89.1 128 128 102 166.9 128 128 154 128 154ZM117 82.9L69.3 114.8 30.8 89 117 31.6 117 82.9 117 82.9ZM49.5 128L22 146.4 22 109.6 49.5 128 49.5 128ZM69.3 141.2L117 173.1 117 224.4 30.8 167 69.3 141.2 69.3 141.2ZM139 173.1L186.7 141.2 225.2 167 139 224.4 139 173.1 139 173.1ZM206.5 128L234 109.6 234 146.4 206.5 128 206.5 128ZM186.7 114.8L139 82.9 139 31.6 225.2 89 186.7 114.8 186.7 114.8Z" fill="#fff"/></svg>
		      				</a>
		      			</li>

		      			<li>
		      				<a href="#" target="_blank">
		      					<svg xmlns="http://www.w3.org/2000/svg" width="66" height="60" viewBox="0 0 256 194" preserveAspectRatio="xMidYMid"><style>.a{fill:#D54B3D;}.b{fill:#D72B27;}</style><defs><linearGradient y1="50" x2="100" y2="50"><stop stop-color="#000000" offset="0%" stop-opacity="0.1"/><stop stop-color="#000000" offset="100%" stop-opacity="0.2"/></linearGradient></defs><path d="M238.8 193.6L16.2 193.6C7.5 193.6 0.2 186.6 0.2 177.7L0.2 16.8C0.2 8.2 7.3 0.9 16.2 0.9L238.8 0.9C247.5 0.9 254.7 8 254.7 16.8L254.7 177.7C254.7 186.6 247.7 193.6 238.8 193.6L238.8 193.6Z" fill="#E3E3E3"/><path d="M32.1 193.6L127.3 117 127.9 112.9 29.8 42.3 29.6 190.2 32.1 193.6Z" style="fill:#231F20;opacity:0.1"/><path d="M16.2 193.6C7.3 193.6 0.2 186.6 0.2 177.7L0.2 16.6C0.2 7.7 7.3 6.1 16.2 6.1 25 6.1 32.1 8 32.1 16.6L32.1 193.6 16.2 193.6 16.2 193.6Z" class="a"/><path d="M16.2 8.4C27.5 8.4 29.8 11.8 29.8 16.6L29.8 191.3 16.2 191.3C8.7 191.3 2.5 185.2 2.5 177.7L2.5 16.6C2.5 11.6 4.8 8.4 16.2 8.4L16.2 8.4ZM16.2 6.1C7.3 6.1 0.2 8 0.2 16.6L0.2 177.7C0.2 186.6 7.3 193.6 16.2 193.6L32.1 193.6 32.1 16.6C32.1 7.7 25 6.1 16.2 6.1L16.2 6.1 16.2 6.1Z" class="b"/><path d="M238.8 193.6L222.9 193.6 222.9 16.1C222.9 7.3 230 6.1 238.8 6.1 247.7 6.1 254.7 7.3 254.7 16.1L254.7 177.9C254.7 186.6 247.7 193.6 238.8 193.6L238.8 193.6Z" class="a"/><path d="M238.8 8.4C249.1 8.4 252.5 10.5 252.5 16.1L252.5 177.9C252.5 185.4 246.3 191.5 238.8 191.5L225.2 191.5 225.2 16.1C225.2 10.2 228.6 8.4 238.8 8.4L238.8 8.4ZM238.8 6.1C230 6.1 222.9 7.3 222.9 16.1L222.9 193.8 238.8 193.8C247.7 193.8 254.7 186.8 254.7 177.9L254.7 16.1C254.7 7.3 247.7 6.1 238.8 6.1L238.8 6.1 238.8 6.1Z" class="b"/><path d="M170.7 193.6L1.6 23.2 10.5 26.8 128.2 111.6 254.7 18.8 254.7 177.9C254.7 186.6 247.7 193.6 238.8 193.6L170.7 193.6Z" fill="url(#linearGradient-1)"/><path d="M127.3 117L7.1 29.8C0 24.5-2 14.5 3.2 7.5 8.4 0.5 18.7-1.1 25.9 4.1L127.5 77.9 229.7 3.2C236.8-2 246.8-0.5 252 6.8 257.2 13.9 255.6 23.9 248.4 29.1L127.3 117 127.3 117Z" class="a"/><path d="M238.8 2.3L238.8 2.3C243.2 2.3 247.2 4.3 250 8 254.3 14.1 252.9 22.5 247 27L127.3 114.3 8.4 27.9C2.3 23.4 0.7 14.8 5 8.9 7.5 5.5 11.8 3.2 16.4 3.2 19.3 3.2 22.3 4.1 24.6 5.9L125.9 79.5 127.3 80.4 128.6 79.5 230.7 4.8C233.2 3.2 235.9 2.3 238.8 2.3L238.8 2.3ZM238.8 0C235.7 0 232.2 0.9 229.5 3L127.3 77.7 25.7 3.9C23 1.8 19.6 0.9 16.2 0.9 11.2 0.9 6.2 3.2 3 7.5 -2 14.5 0 24.5 7.1 29.8L127.3 117.2 248.2 29.1C255.2 23.9 256.8 14.1 251.8 6.8 248.6 2.3 243.8 0 238.8 0L238.8 0 238.8 0Z" class="b"/></svg>
		      				</a>
		      			</li>

		      			<li>
		      				<a href="https://www.linkedin.com/in/christina-wiech-ab841226" target="_blank">
		      					<svg xmlns="http://www.w3.org/2000/svg" width="66" height="60" viewBox="0 0 256 256"><path d="M45.98 10.51c-19.6 0-35.48 15.88-35.48 35.48V210c0 19.6 15.88 35.5 35.48 35.5H210c19.6 0 35.5-15.9 35.5-35.5V45.99c0-19.6-15.9-35.48-35.5-35.48H45.98zm18.2 39.8c12.08 0 19.52 7.93 19.75 18.36 0 10.2-7.67 18.36-19.98 18.36h-.23c-11.86 0-19.52-8.16-19.52-18.36 0-10.43 7.89-18.36 19.98-18.36zM168.3 99.04c23.2 0 40.7 15.16 40.7 47.76v61h-35.3v-56.9c0-14.3-5.2-24-17.9-24-9.8 0-15.6 6.5-18.2 12.9-.9 2.3-1.1 5.4-1.1 8.6v59.4h-35.3s.4-96.3 0-106.3h35.3v15c4.7-7.2 13.1-17.46 31.8-17.46zM46.29 101.5H81.6v106.3H46.29V101.5z" fill="#fff"/></svg>
		      				</a>
		      			</li>

		      			<li>
		      				<a href="https://twitter.com/ChristinaWiech" target="_blank">
		      					<svg xmlns="http://www.w3.org/2000/svg" width="66" height="60" viewBox="0 0 256 209" preserveAspectRatio="xMidYMid"><path d="M256 25.5C246.6 29.6 236.5 32.5 225.8 33.7 236.7 27.2 245 16.9 248.9 4.7 238.8 10.7 227.5 15.1 215.6 17.4 206 7.2 192.3 0.8 177.2 0.8 148.2 0.8 124.7 24.3 124.7 53.3 124.7 57.5 125.2 61.5 126.1 65.3 82.4 63.1 43.7 42.2 17.8 10.4 13.3 18.2 10.7 27.2 10.7 36.8 10.7 55.1 20 71.1 34.1 80.6 25.5 80.3 17.4 77.9 10.3 74 10.3 74.2 10.3 74.4 10.3 74.6 10.3 100.1 28.4 121.3 52.4 126.1 48 127.3 43.4 128 38.6 128 35.2 128 31.9 127.7 28.7 127 35.4 147.9 54.8 163.1 77.8 163.5 59.8 177.6 37.1 186 12.5 186 8.3 186 4.1 185.8 0 185.3 23.2 200.2 50.9 208.9 80.5 208.9 177.1 208.9 229.9 128.8 229.9 59.4 229.9 57.2 229.9 54.9 229.8 52.6 240.1 45.2 249 36 256 25.5" fill="#fff"/></svg>
		      				</a>
		      			</li>
	      			</ul>
				</section>
			</div>
		</div>

		<!-- Contact page bottom section -->
		<div class="row" id="bottom">
			<footer>
				<div class="small-5 column">
					<nav>
		      	  		<ul class="no-bullet">
		      	  			<li>
		      	  				<a href="../index.html">Home</a>
		      	  			</li>
		      	  			
		      	  			<li>
		      	  				<a href="../index.html#about">About</a>
		      	  			</li>

		      	  			<li>
		      	  				<a href="../index.html#portfolio-top">Portfolio</a>
		      	  			</li>

		      	  			<li>
		      	  				<a href="index.html">Contact</a>
		      	  			</li>
		      	  		</ul>
	      	  		</nav>
	      	  	</div>

	      	  	<div class="small-4 column">
	      	  		<p>&copy; Christina Wiech 2016</p>
	      	  	</div>
			</footer>
		</div>

	</body>
</html>