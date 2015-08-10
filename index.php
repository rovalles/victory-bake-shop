<!doctype html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]>  <html> <![endif]-->
<!--[if !IE]><!--> 
<html lang="en"><!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<title>Victory Bake Shop</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!--link rel="stylesheet" href="bower_components/material-design-lite/material.min.css"-->
		<link rel="stylesheet" href="assets/styles/main.css">
		<!--[if lt IE 9]>
				<script src="html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<header class="header">
				<h1>
					<a href="/">
						<img class="logo" src="assets/images/logo.png" alt="Victory Bake Shop">
					</a>
				</h1>
			</header>
			<main>
				<section class="cakes">
					<h2 class="title">Cakes and cupcakes for weddings, birthdays, special occasions and more.</h2>
					<div class="gallery">
						<script id="template" type="x-tmpl-mustache">
							{{#data}}
								<div class="panel">
									<div class="inner-panel box-shadow">
										<div class="likes hearts box-shadow">
											{{likes.count}}
										</div>
										<img src="{{images.standard_resolution.url}}" />
										{{#caption.text}}
											<p>{{caption.text}}</p>
										{{/caption.text}}
									</div>
								</div>
							{{/data}}
						</script>
					</div>
				</section>
				<div class="about">
					<p>Victory Bake Shop is a work in progress. I pay very close attention to detail and I feel it's the small precise details that set my cakes apart from the rest. I would be honored to be your baker and create memorable personalized desserts for all those special celebrations in your life</p>
					<p>Contact Crissy for more information.</p>
					<p><a class="email" href="mailto:crissy@victorybakeshop.com" target="_blank">crissy@victorybakeshop.com</a></p>
				</div>
				<section class="contact">
					<form action="contact.php" id="contactForm" method="POST">
						<div>
							<input type="hidden" name="extra">
						</div>
						<div>
							<label for="name">Name</label>
						</div>
						<div>
							<input name="name" type="text" required>
						</div>
						<div>
							<label for="email">Email Address</label>
						</div>
						<div>
							<input name="email" type="email" placeholder="johndoe@test.com" required>
						</div>
						<div>
							<label for="message">What can make for you?</label>
						</div>
						<div>
							<textarea name="message" cols="25" rows="10" spellcheck="true" required></textarea>
						</div>
						<div>
							<label for="due-date">When do you need it?</label>
						</div>
						<div>
							<input name="due-date" type="date" required\>
						</div>
						<input class="btn" type="submit" value="Send Form">
					</form>
				</section>
			</main>
		</div>
		<footer>

		</footer>
	</body>
	<script src="bower_components/material-design-lite/material.min.js"></script>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/mustache.js/mustache.min.js"></script>
	<script src="assets/scripts/main.js"></script>
</html>
