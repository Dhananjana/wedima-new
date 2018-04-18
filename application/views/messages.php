<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Modern Business - Start Bootstrap Template</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/modern-business.css" rel="stylesheet">

</head>

<body>
<style type="text/css">
	.container {
		padding-bottom: 45px;
	}
	.screen {
		padding: 15px 10px;
	}

	.message__list {
		padding: 0;
		margin: 0;
		list-style: none;
		width: 100%;
		position: relative;

	&:after {
		 content: '';
		 display: table;
		 clear: both;
	 }
	}

	.message__item {
		max-width: 50%;
		clear: both;
	}

	.message__item--bot {
		float: left;

	&:first-of-type .message {
		 border-top-left-radius: 20px;
	 }

	&:last-of-type .message {
		 border-bottom-left-radius: 20px;
	 }
	}

	.message__item--user {
		float: right;
		text-align: right;

	&:first-of-type .message {
		 border-top-right-radius: 20px;
	 }

	&:last-of-type .message {
		 border-bottom-right-radius: 20px;
	 }
	}

	.message {
		padding: 8px 15px;
		margin-top: 2px;
		display: inline-block;
		text-align: left;
	}

	.message--bot {
		background-color: #eee;
		border-radius: 3px 20px 20px 3px;
		margin-left: 35px;
	}

	.message--user {
		background-color: #0baaff;
		color: #fff;
		border-radius: 20px 3px 3px 20px;
	}

	.bot__image {
		width: 28px;
		height: 28px;
		position: absolute;
		bottom: 3px;
		left: 0;
		border-radius: 20px;
	}

	.answer {
		position: fixed;
		bottom: 0;
		background-color: #fff;
		width: 61.3%;
		padding: 10px;
	}


</style>




<!-- Page Content -->
<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">Sidebar Page
		<small>Subheading</small>
	</h1>

	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active">About</li>
	</ol>

	<!-- Content Row -->
	<div class="row">
		<!-- Sidebar Column -->
		<div class="col-lg-3 mb-4">
			<div class="list-group">
				<a href="index.html" class="list-group-item">Chat List</a>
				<a href="about.html" class="list-group-item">About</a>
				<a href="services.html" class="list-group-item">Services</a>
				<a href="contact.html" class="list-group-item">Contact</a>
				<a href="portfolio-1-col.html" class="list-group-item">1 Column Portfolio</a>
				<a href="portfolio-2-col.html" class="list-group-item">2 Column Portfolio</a>
				<a href="portfolio-3-col.html" class="list-group-item">3 Column Portfolio</a>
				<a href="portfolio-4-col.html" class="list-group-item">4 Column Portfolio</a>
				<a href="portfolio-item.html" class="list-group-item">Single Portfolio Item</a>
				<a href="blog-home-1.html" class="list-group-item">Blog Home 1</a>
				<a href="blog-home-2.html" class="list-group-item">Blog Home 2</a>
				<a href="blog-post.html" class="list-group-item">Blog Post</a>
				<a href="full-width.html" class="list-group-item">Full Width Page</a>
				<a href="sidebar.html" class="list-group-item active">Sidebar Page</a>
				<a href="faq.html" class="list-group-item">FAQ</a>
				<a href="404.html" class="list-group-item">404</a>
				<a href="pricing.html" class="list-group-item">Pricing Table</a>
			</div>
		</div>
		<!-- Content Column -->
		<div class="col-lg-9 mb-4">
			<div class="screen">
				<div class="message__list">
					<img class="bot__image" src="http://www.status77.in/wp-content/uploads/2015/07/14533584_1117069508383461_6955991993080086528_n.jpg">
					<div class="message__item message__item--bot">

					</div>
				</div>
				<div class="message__list">
					<div class="message__item message__item--user">
						<span class="message message--user">Olá mundo!</span>
					</div>
					<div class="message__item message__item--user">
						<span class="message message--user">Never ending circles</span>
					</div>
					<div class="message__item message__item--user">
						<span class="message message--user">Lorem ipsum dolor sit amet consectetur adispicing elit lorem ipsum dolor sit amet</span>
					</div>
				</div>
				<div class="message__list">
					<img class="bot__image" src="http://www.status77.in/wp-content/uploads/2015/07/14533584_1117069508383461_6955991993080086528_n.jpg">
					<div class="message__item message__item--bot">
						<span class="message message--bot">Bot falando aqui</span>
					</div>
					<div class="message__item message__item--bot">
						<span class="message message--bot">Parece que funcionou</span>
					</div>
				</div>
				<div class="message__list">
					<div class="message__item message__item--user">
						<span class="message message--user">Olá mundo!</span>
					</div>
				</div>
				<div class="message__list">
					<img class="bot__image" src="http://www.status77.in/wp-content/uploads/2015/07/14533584_1117069508383461_6955991993080086528_n.jpg">
					<div class="message__item message__item--bot">
						<span class="message message--bot">Olá</span>
					</div>
				</div>
				<div class="message__list">
					<div class="message__item message__item--user">
						<span class="message message--user">Olá mundo!</span>
					</div>
					<div class="message__item message__item--user">
						<span class="message message--user">Never ending circles</span>
					</div>
					<div class="message__item message__item--user">
						<span class="message message--user">Lorem ipsum dolor sit amet consectetur adispicing elit lorem ipsum dolor sit amet</span>
					</div>
				</div>
				<div class="message__list">
					<img class="bot__image" src="http://www.status77.in/wp-content/uploads/2015/07/14533584_1117069508383461_6955991993080086528_n.jpg">
					<div class="message__item message__item--bot">
						<span class="message message--bot">Bot falando aqui</span>
					</div>
					<div class="message__item message__item--bot">
						<span class="message message--bot">Parece que funcionou</span>
					</div>
				</div>
				<div class="message__list">
					<div class="message__item message__item--user">
						<span class="message message--user">Olá mundo!</span>
					</div>
				</div>
				<div class="message__list">
					<img class="bot__image" src="http://www.status77.in/wp-content/uploads/2015/07/14533584_1117069508383461_6955991993080086528_n.jpg">
					<div class="message__item message__item--bot">
						<span class="message message--bot">Olá</span>
					</div>
				</div>
				<div class="message__list">
					<div class="message__item message__item--user">
						<span class="message message--user">Olá mundo!</span>
					</div>
					<div class="message__item message__item--user">
						<span class="message message--user">Never ending circles</span>
					</div>
					<div class="message__item message__item--user">
						<span class="message message--user">Lorem ipsum dolor sit amet consectetur adispicing elit lorem ipsum dolor sit amet</span>
					</div>
				</div>
				<div class="message__list">
					<img class="bot__image" src="http://www.status77.in/wp-content/uploads/2015/07/14533584_1117069508383461_6955991993080086528_n.jpg">
					<div class="message__item message__item--bot">
						<span class="message message--bot">Bot falando aqui</span>
					</div>
					<div class="message__item message__item--bot">
						<span class="message message--bot">Parece que funcionou</span>
					</div>
				</div>
				<div class="message__list">
					<div class="message__item message__item--user">
						<span class="message message--user">Olá mundo!</span>
					</div>
				</div>
				<div class="message__list">
					<img class="bot__image" src="http://www.status77.in/wp-content/uploads/2015/07/14533584_1117069508383461_6955991993080086528_n.jpg">
					<div class="message__item message__item--bot">
						<span class="message message--bot">Olá</span>
					</div>
				</div>
				<div class="message__list">
					<div class="message__item message__item--user">
						<span class="message message--user">Olá mundo!</span>
					</div>
					<div class="message__item message__item--user">
						<span class="message message--user">Never ending circles</span>
					</div>
					<div class="message__item message__item--user">
						<span class="message message--user">Lorem ipsum dolor sit amet consectetur adispicing elit lorem ipsum dolor sit amet</span>
					</div>
				</div>
				<div class="message__list">
					<img class="bot__image" src="http://www.status77.in/wp-content/uploads/2015/07/14533584_1117069508383461_6955991993080086528_n.jpg">
					<div class="message__item message__item--bot">
						<span class="message message--bot">Bot falando aqui</span>
					</div>
					<div class="message__item message__item--bot">
						<span class="message message--bot">Parece que funcionou</span>
					</div>
				</div>
			</div>
			<div class="answer input-group">
				<input class="form-control" type="text" placeholder="Type Here">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="button">SEND!</button>
				</span>
			</div>
		</div>
	</div>
	<!-- /.row -->

</div>
<!-- /.container -->



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
