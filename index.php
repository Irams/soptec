<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soptec</title>
	<meta name="description" content="Card Expansion Effect with SVG clipPath" />
	<meta name="keywords" content="clipPath, svg, effect, layout, expansion, images, grid, polygon" />
	<meta name="author" content="Claudio Calautti for Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/card.css" />
	<link rel="stylesheet" type="text/css" href="css/pattern.css" />
	<!--[if IE]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script>
	if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
		var root = document.getElementsByTagName('html')[0];
		root.setAttribute('class', 'ff');
	};
	</script>
</head>

<body class="demo-2">
	<div class="container">
		<header class="codrops-header">
			<div class="codrops-links">
				<a class="codrops-icon codrops-icon--prev" href="http://sedesem.edomex.gob.mx/" title="Previous Demo"><span>Previous Demo</span></a>
				<a class="codrops-icon codrops-icon--drop" href="http://sedesem.edomex.gob.mx/" title="Back to the article"><span>Back to the Codrops article</span></a>
			</div>
			<h1>Soporte Técnico  <span>SEDESEM</span></h1>
			<nav class="codrops-demos">
				<a href="index.html">Demo 1</a>
				<a class="current-demo" href="index2.html">Demo 2</a>
				<a href="index3.html">Demo 3</a>
				<a href="index4.html">Demo 4</a>
			</nav>
		</header>
		<div class="content">
			<!-- trianglify pattern container -->
			<div class="pattern pattern--hidden"></div>
			<!-- cards -->
			<div class="wrapper">
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath1">
									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath1)" width="1920" height="500" xlink:href="img/a.jpg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">Quienes somos</h2>
								<p class="card__subtitle">SEDESEM-UDITI-SOPTEC</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<img class="meta__avatar" src="img/authors/1.png" alt="author01" />
									<span class="meta__author">Soptec</span>
									<span class="meta__date">19/02/2019</span>
								</div>
								<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
								<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
								<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
								<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
								<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
								<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath2">
									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath2)" width="1920" height="500" xlink:href="img/b.jpg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">Recursos</h2>
								<p class="card__subtitle">Algo para ayudar</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<img class="meta__avatar" src="img/authors/2.png" alt="author02" />
									<span class="meta__author">Frank Posterius</span>
									<span class="meta__date">06/16/2015</span>
								</div>
								<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
								<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
								<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
								<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
								<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
								<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath3">
									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath3)" width="1920" height="500" xlink:href="img/c.jpg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">Descargas</h2>
								<p class="card__subtitle">Elementos descargables</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<img class="meta__avatar" src="img/authors/3.png" alt="author03" />
									<span class="meta__author">Sarah Lester</span>
									<span class="meta__date">06/16/2015</span>
								</div>
								<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
								<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
								<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
								<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
								<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
								<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath4">
									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath4)" width="1920" height="500" xlink:href="img/d.jpg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">Enlaces de Interés</h2>
								<p class="card__subtitle">Sitios que podrían interesarte</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<img class="meta__avatar" src="img/authors/4.png" alt="author04" />
									<span class="meta__author">Lena Bestofos</span>
									<span class="meta__date">06/14/2015</span>
								</div>
								<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
								<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
								<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
								<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
								<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
								<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath5">
									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath5)" width="1920" height="500" xlink:href="img/e.jpg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">Directorio</h2>
								<p class="card__subtitle">Directorio soptec</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<img class="meta__avatar" src="img/authors/5.png" alt="author05" />
									<span class="meta__author">Michaela Walters</span>
									<span class="meta__date">06/11/2015</span>
								</div>
								<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
								<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
								<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
								<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
								<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
								<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath6">
									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
								</clipPath>
							</defs>
							<image clip-path="url(#clipPath6)" width="1920" height="500" xlink:href="img/f.jpg"></image>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">Calendario</h2>
								<p class="card__subtitle">Calendarización anual de Mantenimientos</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<img class="meta__avatar" src="img/authors/6.png" alt="author06" />
									<span class="meta__author">Tom Goldman</span>
									<span class="meta__date">06/10/2015</span>
								</div>
								<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
								<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
								<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
								<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
								<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
								<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /cards -->
		</div><!-- /content -->
		<!-- Related demos -->
		<section class="content content--related">
			<p>If you enjoyed this demo you might also like:</p>
			<a class="media-item" href="http://tympanus.net/Development/AnimatedGridLayout/">
				<img class="media-item__img" src="img/related/GridItemAnimation.jpg">
				<h3 class="media-item__title">Grid Item Animation Layout</h3>
			</a>
			<a class="media-item" href="http://tympanus.net/Tutorials/ThumbnailGridExpandingPreview/">
				<img class="media-item__img" src="img/related/ThumbnailGridExpandingPreview.jpg">
				<h3 class="media-item__title">Thumbnail Grid with Expanding Preview</h3>
			</a>
		</section>
	</div>
	<!-- /container -->
	<!-- JS -->
	<script src="js/vendors/trianglify.min.js"></script>
	<script src="js/vendors/TweenMax.min.js"></script>
	<script src="js/vendors/ScrollToPlugin.min.js"></script>
	<script src="js/vendors/cash.min.js"></script>
	<script src="js/Card-polygon.js"></script>
	<script src="js/demo-2.js"></script>
</body>

</html>
