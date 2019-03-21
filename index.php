<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Great Idea!</title>

  <link href="https://fonts.googleapis.com/css?family=Bangers|Titillium+Web" rel="stylesheet">
  

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  
  <style>
	/* http://meyerweb.com/eric/tools/css/reset/ 
	v2.0 | 20110126
	License: none (public domain)
		*/
	
	html, body, div, span, applet, object, iframe,
	h1, h2, h3, h4, h5, h6, p, blockquote, pre,
	a, abbr, acronym, address, big, cite, code,
	del, dfn, em, img, ins, kbd, q, s, samp,
	small, strike, strong, sub, sup, tt, var,
	b, u, i, center,
	dl, dt, dd, ol, ul, li,
	fieldset, form, label, legend,
	table, caption, tbody, tfoot, thead, tr, th, td,
	article, aside, canvas, details, embed, 
	figure, figcaption, footer, header, hgroup, 
	menu, nav, output, ruby, section, summary,
	time, mark, audio, video {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;
	}
	/* HTML5 display-role reset for older browsers */
	article, aside, details, figcaption, figure, 
	footer, header, hgroup, menu, nav, section {
		display: block;
	}
	*{
		box-sizing:border-box;
    }
	body {
		line-height: 1;
	}
	ol, ul {
		list-style: none;
	}
	blockquote, q {
		quotes: none;
	}
	blockquote:before, blockquote:after,
	q:before, q:after {
		content: '';
		content: none;
	}
	table {
		border-collapse: collapse;
		border-spacing: 0;
	}
	html, body {
		height: 100%;
		font-family: 'Titillium Web', sans-serif;
	}
	h1, h2, h3, h4, h5 {
		font-family: 'Bangers', cursive;
		letter-spacing: 1px;
		margin-bottom: 15px;
	}
	/* Your code starts here! */
    
    p{
		line-height:1.25;
    }
		main,section,footer, span{
		width:875px;
		margin:auto;
    }
    header{
		display:flex;
		justify-content:space-between;
		align-items:center;
		position:fixed;
			top:0;
			left:0;
			right:0;
		width:100%;
		background:#fff;
    }
    header nav{
		display:flex;
    }
    header nav a{
		text-decoration:none;
		color:grey;
		margin:20px;
		font-size:1.25rem;
    }
  
    section{
		display:flex;
		justify-content:space-between;
		margin:10px auto;
    }
	
	section.first{
		margin-top:100px;
		border-bottom:1px solid #000;
		align-items:center;
	}
	
	section div{
		padding:10px;
		display:flex;
		flex-direction:column;
	}
	
    section h1{
		font-size:5rem;
		text-align:center;
    }
	
    section button{
		border:1px solid black;
		background-color:transparent;
		padding:5px 20px;
		font-size:1.25rem;
    }
    
    section h2, footer h2{
		font-weight:2;
    }
    
    footer a{
		text-decoration:none;
		color:#000;
		display:block;
		margin-top:20px;
    }
    footer p{
		text-align:center;
    }
  </style>

</head>
  <body>
	<header>
		<nav>
			<a href="?page=services">Services</a>
			<a href="?page=product">Product</a>
			<a href="?page=vision">Vision</a>
			<a href="?page=features">Features</a>
			<a href="?page=about">About</a>
			<a href="?page=contact">Contact</a>
		</nav>
		<a href="?d"><img class="logo" src="https://www.thewebbranch.com/img/logo.png" alt="Great Idea! Company logo."></a>
	</header>
	<section class="first">
	 <div>
		<h1>Innovation<br>On<br>Demand</h1>
		<button>Get Started</button>
	 </div>
	 <div>
		<img src="https://www.thewebbranch.com/img/header-img.png" alt="Image of a code snippet.">
	 </div>
	</section>
	<section>
		<div>
			<h2>Features</h2>
			<p>Aliquam elementum magna eros, ac posuere elvit tempus et. Suspendisse vel tempus odio, in interdutm nisi. Suspendisse eu ornare nisl. Nullam convallis augue justo, at imperdiet metus scelerisque quis.</p>
		</div>
		<div>
			<h2>About</h2>
			<p>Aliquam elementum magna eros, ac posuere elvit tempus et. Suspendisse vel tempus odio, in interdutm nisi. Suspendisse eu ornare nisl. Nullam convallis augue justo, at imperdiet metus scelerisque quis.</p>
		</div>
	</section>
	<section>
		<img class="middle-img" src="https://www.thewebbranch.com/img/mid-page-accent.jpg" alt="Image of code snippets across the screen">
	</section>
	<section>
		<div>
			<h2>Services</h2>
			<p>Aliquam elementum magna eros, ac posuere elvit tempus et. Suspendisse vel tempus odio, in interdutm nisi. Suspendisse eu ornare nisl. Nullam convallis augue justo, at imperdiet metus scelerisque quis.</p>
		</div>
		<div>
			<h2>Product</h2>
			<p>Aliquam elementum magna eros, ac posuere elvit tempus et. Suspendisse vel tempus odio, in interdutm nisi. Suspendisse eu ornare nisl. Nullam convallis augue justo, at imperdiet metus scelerisque quis.</p>
		</div>
		<div>
			<h2>Vision</h2>
			<p>Aliquam elementum magna eros, ac posuere elvit tempus et. Suspendisse vel tempus odio, in interdutm nisi. Suspendisse eu ornare nisl. Nullam convallis augue justo, at imperdiet metus scelerisque quis.</p>
		</div>
	</section>
	<footer>
		<h2>Contact</h2>
		<address>
			123 Way 456 Street<br>
			Somewhere, USA
		</address>
		<a href="">1 (888) 888-8888</a>
		<a href="">sales@greatidea.io</a>
		<p>Copyright Great Idea! 2018</p>
	</footer>
  </body>
</html>
