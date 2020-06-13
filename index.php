<!DOCTYPE html>
<?php require "includes/config.inc.php"; ?>

<head>
	<?php require "includes/head.inc.php"; ?>
</head>

<body id="top">
	<?php
	if (isset($_GET['sucesso'])) {
		switch ($_GET['sucesso']) {
			case 'entrada':
				echo  "<script>alert('Você está logado agora!');</script>";
				break;
			default:
				break;
		}
	}
	?>

	<!-- header  -->
	<?php include "includes/header.inc.php"; ?>

	<!-- home  -->
	<section id="home" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=1620 data-natural-height=1080>

		<div class="overlay"></div>
		<div class="home-content">

			<div class="row contents">
				<div class="home-content-left">

					<h3 data-aos="fade-up">Bem-vindo ao Hexagon</h3>

					<h1 data-aos="fade-up">
						Creative Landing <br>
						Page to Showcase <br>
						Your Amazing App.
					</h1>

					<div class="buttons" data-aos="fade-up">
						<a href="#download" class="smoothscroll button stroke">
							<span class="icon-circle-down" aria-hidden="true"></span>
							Baixe o Aplicativo
						</a>
						<a href="http://player.vimeo.com/video/148751763?title=0&amp;byline=0&amp;portrait=0&amp;color=653EC1" data-lity class="button stroke">
							<span class="icon-play" aria-hidden="true"></span>
							Assista ao vídeo
						</a>
					</div>

				</div>

				<div class="home-image-right">
					<img src="images/iphone-app-470.png" srcset="images/iphone-app-470.png 1x, images/iphone-app-940.png 2x" data-aos="fade-up">
				</div>
			</div>

		</div> <!-- end home-content -->

		<ul class="home-social-list">
			<li>
				<a href="#"><i class="fa fa-facebook-square"></i></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-twitter"></i></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-instagram"></i></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-youtube-play"></i></a>
			</li>
		</ul>
		<!-- end home-social-list -->

		<div class="home-scrolldown">
			<a href="#about" class="scroll-icon smoothscroll">
				<span>Role para baixo</span>
				<i class="icon-arrow-right" aria-hidden="true"></i>
			</a>
		</div>

	</section> <!-- end home -->

	<!-- about  -->
	<section id="about">

		<div class="row about-intro">

			<div class="col-four">
				<h1 class="intro-header" data-aos="fade-up">Sobre o Aplicativo</h1>
			</div>
			<div class="col-eight">
				<p class="lead" data-aos="fade-up">
					Excepteur enim magna veniam labore veniam sint. Ex aliqua esse proident ullamco voluptate. Nisi nisi
					nisi aliqua eiusmod dolor dolor proident deserunt occaecat elit Lorem reprehenderit. Id culpa veniam
					ex aliqua magna elit pariatur do nulla. Excepteur enim magna veniam labore veniam sint.
				</p>
			</div>

		</div>

		<div class="row about-features">

			<div class="features-list block-1-3 block-m-1-2 block-mob-full group">

				<div class="bgrid feature" data-aos="fade-up">

					<span class="icon"><i class="icon-window"></i></span>

					<div class="service-content">

						<h3>Fully Resposive</h3>

						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
							aspernatur aut odit aut fugit.
						</p>

					</div>

				</div> <!-- /bgrid -->

				<div class="bgrid feature" data-aos="fade-up">

					<span class="icon"><i class="icon-image"></i></span>

					<div class="service-content">
						<h3>Retina Ready</h3>

						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
							aspernatur aut odit aut fugit.
						</p>


					</div>

				</div> <!-- /bgrid -->

				<div class="bgrid feature" data-aos="fade-up">

					<span class="icon"><i class="icon-paint-brush"></i></span>

					<div class="service-content">
						<h3>Stylish Design</h3>

						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
							aspernatur aut odit aut fugit.
						</p>

					</div>

				</div> <!-- /bgrid -->

				<div class="bgrid feature" data-aos="fade-up">

					<span class="icon"><i class="icon-file"></i></span>

					<div class="service-content">
						<h3>Clean Code</h3>

						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
							aspernatur aut odit aut fugit.
						</p>

					</div>

				</div> <!-- /bgrid -->

				<div class="bgrid feature" data-aos="fade-up">

					<span class="icon"><i class="icon-sliders"></i></span>

					<div class="service-content">
						<h3>Easy To Customize</h3>

						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
							aspernatur aut odit aut fugit.
						</p>
					</div>

				</div> <!-- /bgrid -->

				<div class="bgrid feature" data-aos="fade-up">

					<span class="icon"><i class="icon-gift"></i></span>

					<div class="service-content">
						<h3>Free of Charge</h3>

						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
							aspernatur aut odit aut fugit.
						</p>

					</div>

				</div> <!-- /bgrid -->

			</div> <!-- end features-list -->

		</div> <!-- end about-features -->

		<div class="row about-how">

			<h1 class="intro-header" data-aos="fade-up">How The App Works?</h1>

			<div class="about-how-content" data-aos="fade-up">
				<div class="about-how-steps block-1-2 block-tab-full group">

					<div class="bgrid step" data-item="1">
						<h3>Sign-Up</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo.
						</p>
					</div>

					<div class="bgrid step" data-item="2">
						<h3>Upload</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo.
						</p>
					</div>

					<div class="bgrid step" data-item="3">
						<h3>Create</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo.
						</p>
					</div>

					<div class="bgrid step" data-item="4">
						<h3>Publish</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo.
						</p>
					</div>

				</div>
			</div> <!-- end about-how-content -->

		</div> <!-- end about-how -->

		<div class="row about-bottom-image">

			<img src="images/app-screens-1200.png" srcset="images/app-screens-600.png 600w, 
                            images/app-screens-1200.png 1200w, 
                            images/app-screens-2800.png 2800w" sizes="(max-width: 2800px) 100vw, 2800px" alt="App Screenshots" data-aos="fade-up">

		</div> <!-- end about-bottom-image -->

	</section> <!-- end about -->

	<!-- pricing  -->
	<section id="pricing">
		<div class="row pricing-content">

			<div class="col-four pricing-intro">
				<h1 class="intro-header" data-aos="fade-up">Nossas opções de preços</h1>

				<p data-aos="fade-up">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
					doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
					architecto beatae vitae dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit
					voluptatem accusantium doloremque laudantium.
				</p>
			</div>

			<div class="col-eight pricing-table">
				<div class="row">

					<div class="col-six plan-wrap">
						<div class="plan-block" data-aos="fade-up">

							<div class="plan-top-part">
								<h3 class="plan-block-title">Lite Plan</h3>
								<p class="plan-block-price"><sup>$</sup>25</p>
								<p class="plan-block-per">Per Month</p>
							</div>

							<div class="plan-bottom-part">
								<ul class="plan-block-features">
									<li><span>3GB</span> Storage</li>
									<li><span>10GB</span> Bandwidth</li>
									<li><span>5</span> Databases</li>
									<li><span>30</span> Email Accounts</li>
								</ul>

								<a class="button button-primary large" href="">Get Started</a>
							</div>

						</div>
					</div> <!-- end plan-wrap -->

					<div class="col-six plan-wrap">
						<div class="plan-block primary" data-aos="fade-up">

							<div class="plan-top-part">
								<h3 class="plan-block-title">Pro Plan</h3>
								<p class="plan-block-price"><sup>$</sup>50</p>
								<p class="plan-block-per">Per Month</p>
							</div>

							<div class="plan-bottom-part">
								<ul class="plan-block-features">
									<li><span>5GB</span> Storage</li>
									<li><span>20GB</span> Bandwidth</li>
									<li><span>15</span> Databases</li>
									<li><span>70</span> Email Accounts</li>
								</ul>

								<a class="button button-primary large" href="">Get Started</a>
							</div>

						</div>
					</div> <!-- end plan-wrap -->

				</div>
			</div> <!-- end pricing-table -->

		</div> <!-- end pricing-content -->
	</section> <!-- end pricing -->

	<!-- Subscribers Section  -->
	<section id="testimonials">

		<div class="row">
			<div class="col-twelve">
				<h1 class="intro-header" data-aos="fade-up">What They Say About Our App.</h1>
			</div>
		</div>

		<div class="row owl-wrap">

			<div id="testimonial-slider" data-aos="fade-up">

				<div class="slides owl-carousel">

					<div>
						<p>
							Your work is going to fill a large part of your life, and the only way to be truly satisfied
							is
							to do what you believe is great work. And the only way to do great work is to love what you
							do.
							If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart,
							you'll know when you find it.
						</p>

						<div class="testimonial-author">
							<img src="images/avatars/user-02.jpg" alt="Author image">
							<div class="author-info">
								Steve Jobs
								<span class="position">CEO, Apple.</span>
							</div>
						</div>
					</div>

					<div>
						<p>
							This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
							Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
							nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
						</p>

						<div class="testimonial-author">
							<img src="images/avatars/user-03.jpg" alt="Author image">
							<div class="author-info">
								John Doe
								<span>CEO, ABC Corp.</span>
							</div>
						</div>
					</div>

				</div> <!-- end slides -->

			</div> <!-- end testimonial-slider -->

		</div> <!-- end flex-container -->

	</section> <!-- end testimonials -->

	<!-- download  -->
	<section id="download">

		<div class="row">
			<div class="col-full">
				<h1 class="intro-header" data-aos="fade-up">Baixe o aplicativo agora!!</h1>

				<p class="lead" data-aos="fade-up">
					Disponível no Google Play e na App Store.
				</p>

				<ul class="download-badges">
					<li><a target="_blank" rel="noopener noreferrer" href="https://youtu.be/dQw4w9WgXcQ" title="" class="badge-appstore" data-aos="fade-up">App Store</a></li>
					<li><a target="_blank" rel="noopener noreferrer" href="https://youtu.be/dQw4w9WgXcQ" title="" class="badge-googleplay" data-aos="fade-up">Play Store</a></li>
				</ul>

			</div>
		</div>

	</section> <!-- end download -->

	<!-- footer  -->
	<?php include "includes/footer.inc.php"; ?>

	<div id="preloader">
		<div id="loader"></div>
	</div>

	<!-- Java Script  -->
	<?php include "includes/javascript.inc.php"; ?>

</body>

</html>