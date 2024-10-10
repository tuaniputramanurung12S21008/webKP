<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PT Bara Blasting Perkasa| Homepage 02</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/*.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
 
<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
 	<!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">
    	
		<!-- Header Top -->
		<div class="header-top_two">
			<div class="auto-container">
				<div class="d-flex justify-content-center align-items-center flex-wrap">
					
					<!-- Info List -->
					<ul class="info-list">
						<li><a href="#"><span class="icon fa-solid fa-phone fa-fw"></span>+62 21 837 85938</a></li>
						<li><a href="#"><span class="icon fa-solid fa-envelope fa-fw"></span>company.info@barablastingperkasa.co.id</a></li>
						<li><a href="#"><span class="icon fa-solid fa-map fa-fw"></span>Office Address : Menara Imperium 10th Floor, Jalan H.R. Rasuna Said Kav 1,<br> Setiabudi, Jakarta Selatan 12980</a></li>
					</ul>
					
				
				</div>
			</div>
		</div>
		<!-- End Header Top -->
		
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
				<div class="inner-container d-flex">
					<!-- Logo Box -->
					<div class="logo">
						<a href="{{ url('/') }}">
							<img src="{{ asset('images/logo-3.png') }}" alt="Logo" title="Company Logo">
						</a>
					</div>
					
					
					<!-- Upper Right -->
					<div class="upper-right">
						<div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">
						
							<!-- Main Menu -->
							<nav class="main-menu show navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<!-- Home Menu -->
										<li class="current">
											<a href="{{ url('/') }}">Home</a>
										</li>
								
										<!-- About Us Menu -->
										<li>
											<a href="{{ route('about') }}">About Us</a>
										</li>
								
										<!-- Products Menu -->
										<li>
											<a href="product">Products</a>
											<ul>
												<!-- Add product-related links here if needed in the future -->
											</ul>
										</li>
								
										<!-- Contact Menu -->
										<li>
											<a href="{{ route('contact') }}">Contact</a>
										</li>
									</ul>
								</div>
								
							<!-- Main Menu End-->
							
							<div class="outer-box d-flex align-items-center">
								
								<!-- Search Box -->

								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
        <!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo">
						<a href="{{ url('/') }}" title="">
							<img src="{{ asset('images/logo-3.png') }}" alt="Logo" title="Logo">
						</a>
					</div>
					
					<!-- Right Col -->
					<div class="right-box d-flex align-items-center flex-wrap">
						<!-- Main Menu -->
						<nav class="main-menu"></nav> <!-- Menu akan di-load menggunakan JavaScript -->
		
						<!-- Outer Box -->
						<div class="outer-box d-flex align-items-center">
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler">
								<span class="icon fa-solid fa-bars fa-fw"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- End Sticky Menu -->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn">
				<span class="icon flaticon-020-x-mark"></span>
			</div>
			
			<nav class="menu-box">
				<!-- Logo -->
				<div class="nav-logo">
					<a href="{{ url('/') }}">
						<img src="{{ asset('images/logo.png') }}" alt="Logo" title="Logo">
					</a>
				</div>
		
				<!-- Search Box -->
				<div class="search-box">
					<form method="POST" action="{{ route('contact') }}">
						@csrf
						<div class="form-group">
							<input type="search" name="search-field" placeholder="SEARCH HERE" required>
							<button type="submit">
								<span class="icon flaticon-001-loupe"></span>
							</button>
						</div>
					</form>
				</div>
		
				<!-- Menu Outer (JavaScript Generated Menu) -->
				{{-- <div class="menu-outer"></div> <!-- Menu akan dimuat otomatis via JavaScript, sesuai dengan menu di Header -->
			</nav>
		</div>
		 --}}
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Main Slider -->
	<section class="slider-two">
		<div class="single-item-carousel owl-carousel owl-theme">
	
			<!-- Slide 1 -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url({{ asset('images/main-slider/2.jpg') }})"></div>
				<div class="slider-two_pattern-layer" style="background-image:url({{ asset('images/main-slider/pattern-1.png') }})"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">We Make Explosives and Fertilizer</div>
							<h1 class="slider-two_heading">Better Products with a Lot Less</h1>
							<div class="slider-two_text"></div>
						</div>
					</div>
					
				</div>
			</div>
	
			<!-- Slide 2 -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url({{ asset('images/main-slider/slider2.jpg') }})"></div>
				<div class="slider-two_pattern-layer" style="background-image:url({{ asset('images/main-slider/pattern-1.png') }})"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">We Make Explosives and Fertilizer</div>
							<h1 class="slider-two_heading">Versatility at Its Finest</h1>
							<div class="slider-two_text"></div>
						</div>
					</div>
	
				</div>
			</div>
	
		</div>
	</section>
	

	<!-- End Main Slider -->
	
	<!-- Featured One -->
	<section class="featured-one">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- Feature Block One -->
            <div class="feature-block_one">
                <div class="feature-block_one-inner">
                    <a href="{{ route('product-detail') }}"></a>
                    <span class="color-layer"></span>
                    <span class="feature-block_one-icon">
                        <img src="{{ asset('images/icons/dynamite.png') }}" alt="Dynamite" />
                    </span>
                    <h5 class="feature-block_one-title">Dynamite</h5>
                </div>
            </div>

            <!-- Feature Block One -->
            <div class="feature-block_one">
                <div class="feature-block_one-inner">
                    <a class="overlay-link" href="{{ route('product-detail') }}"></a>
                    <span class="color-layer"></span>
                    <span class="feature-block_one-icon">
                        <img src="{{ asset('images/icons/feature-2.png') }}" alt="Ammonium Nitrate (AN)" />
                    </span>
                    <h5 class="feature-block_one-title">Ammonium Nitrate (AN)</h5>
                </div>
            </div>

            <!-- Feature Block One -->
            <div class="feature-block_one">
                <div class="feature-block_one-inner">
                    <a class="overlay-link" href="{{ route('product-detail') }}"></a>
                    <span class="color-layer"></span>
                    <span class="feature-block_one-icon">
                        <img src="{{ asset('images/icons/feature-3.png') }}" alt="Calcium Nitrate (CN)" />
                    </span>
                    <h5 class="feature-block_one-title">Calcium Nitrate (CN)</h5>
                </div>
            </div>

            <!-- Feature Block One -->
            <div class="feature-block_one">
                <div class="feature-block_one-inner">
                    <a class="overlay-link" href="{{ route('product-detail') }}"></a>
                    <span class="color-layer"></span>
                    <span class="feature-block_one-icon">
                        <img src="{{ asset('images/icons/nitric.png') }}" alt="Natrium Acid (NA)" />
                    </span>
                    <h5 class="feature-block_one-title">Natrium Acid (NA)</h5>
                </div>
            </div>

            <!-- Feature Block One -->
            <div class="feature-block_one">
                <div class="feature-block_one-inner">
                    <a class="overlay-link" href="{{ route('product-detail') }}"></a>
                    <span class="color-layer"></span>
                    <span class="feature-block_one-icon">
                        <img src="{{ asset('images/icons/booster.png') }}" alt="Booster" />
                    </span>
                    <h5 class="feature-block_one-title">Booster</h5>
                </div>
            </div>
            
        </div>
    </div>
</section>

	<!-- End Featured One -->
	
	
	<!-- End Clients One -->
	
	<!-- About Two -->
	<section class="about-two">
		<div class="about-two_pattern-two" style="background-image:url(images/background/pattern-13.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="about-two_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_pattern-one" style="background-image:url(images/background/pattern-12.png)"></div>
					<div class="about-two_image">
						<img src="images/resource/about-2.jpg" alt="" />
						<!-- About One Detail -->
						{{-- <a class="about-two_play lightbox-video fa-solid fa-play fa-fw" href="https://www.youtube.com/watch?v=3TPDLWOFP-o">
							<i class="ripple"></i>
						</a> --}}
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="about-two_content col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_content-inner">
						<div class="sec-title_two">
							<div class="sec-title_two-title">About Our Company</div>
							<p>PT Bara Blasting Perkasa is a company engaged in the production of explosives, which has been operating since 2020. With a strong commitment to meeting the domestic demand for explosives, the company produces various types of explosives such as ammonium nitrate, dynamite, and boosters.
								PT Bara Blasting Perkasa utilizes advanced technology to produce high-quality products. In its production process, the company relies on Casale technology for the production of Nitric Acid, and CFiH technology for the production of Ammonium Nitrate and Calcium Nitrate. Additionally, PT Bara Blasting Perkasa has established a strategic partnership with Dyno Nobel, a leading company in the explosives industry, for the production of dynamite and boosters.
								By combining modern technology and international collaboration, PT Bara Blasting Perkasa strives to become a leader in the explosives industry in Indonesia and contribute to meeting the growing needs of the domestic industry."</p>
						</div>
						<div class="about-two_text"></div>
						<div class="about-two_feature">
							<div class="row clearfix">
							
								<!-- About Two Block -->
								<div class="about-two_block col-lg-6 col-md-6 col-sm-6">
									<div class="about-two_block-inner">
										<span class="about-two_block-icon">
											<img src="images/icons/about-1.png" alt="" />
										</span>
										<h6 class="about-two_block-heading">Moneyback <br> Gurentee</h6>
									</div>
								</div>
								
								<!-- About Two Block -->
								<div class="about-two_block col-lg-6 col-md-6 col-sm-6">
									<div class="about-two_block-inner">
										<span class="about-two_block-icon">
											<img src="images/icons/about-2.png" alt="" />
										</span>
										<h6 class="about-two_block-heading">Technical <br> Support</h6>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="d-flex flex-wrap">
							<a class="btn-style-three theme-btn btn-item" href="#">
								<div class="btn-wrap">
									<span class="text-one">Contact Us <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									<span class="text-two">Contact Us <i class="fa-solid fa-arrow-right fa-fw"></i></span>
								</div>
							</a>
							
							<!-- About Phone Box -->
							<div class="about-phone_box">
								<span class="about-phone_icon fa-solid fa-phone fa-fw"></span>
								Call for help <br>
								<a class="about-two_phone-number" href="tel:+62 21 837 85938">+62 21 837 85938 </a>
							</div>
							
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Two -->
	
	<!-- Services One -->
	<section class="services-one">
		<div class="services-one_pattern-layer" style="background-image:url(images/background/pattern-14.png)"></div>
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title_two centered">
				<div class="sec-title_two-title">~ Our Awesome Poducts ~</div>
				<h2 class="sec-title_two-heading">PT Bara Blasting Perkasa<br><span class="different-font">Best</span><br> Produk</h2>

			</div>
			
			<div class="services-one_inner-coontainer">
				<div class="four-item-carousel owl-carousel owl-theme">
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/icons/service-8.png" alt="" /></span>
							<h5 class="service-block_three-heading">Dynamite</h5>
							<div class="service-block_three-text">
								BBP akan memproduksi bahan peledak berbasis emulsi. Bahan peledak berbasis emulsi memiliki TKDN yang lebih besar. BBP akan bekerjasama dengan Dyno Nobel Ltd. Untuk membuat produk-produk ini.
							</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/icons/service-8-1.png" alt="" /></span>
								<h5 class="service-block_three-heading alternate">
									<a href="{{ url('/product') }}">Dynamite</a>
								</h5>
								<a class="service-block_three-learn" href="{{ url('/product') }}">Learn More</a>
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/icons/service-9.png" alt="" /></span>
							<h5 class="service-block_three-heading">Ammonium Nitrate (AN)</h5>
							<div class="service-block_three-text">
								Designed to prevent prill degradation caused by temperature fluctuations, minimize atmospheric moisture absorption, and enhance abrasion resistance. The manufacturing process ensures a highly consistent prill size distribution.
							</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/icons/an.png" alt="" /></span>
								<h5 class="service-block_three-heading alternate">
									<a href="{{ url('/product') }}">Ammonium Nitrate</a>
								</h5>
								<a class="service-block_three-learn" href="{{ url('/product') }}">Learn More</a>
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/icons/service-10.png" alt="" /></span>
							<h5 class="service-block_three-heading">Calcium Nitrate (CN)</h5>
							<div class="service-block_three-text">
								Calcium nitrate has broad applications across various industries. It is a key component in cement-based construction materials, speeds up concrete curing, improves concrete strength, and slows corrosion in reinforcing steel. In the oil and gas industry, calcium nitrate is used in well-killing fluids and for well servicing and workovers.
							</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/icons/cn.png" alt="" /></span>
								<h5 class="service-block_three-heading alternate">
									<a href="{{ url('/product') }}">Calcium Nitrate (CN)</a>
								</h5>
								<a class="service-block_three-learn" href="{{ url('/product') }}">Learn More</a>
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/icons/nitric1.png" alt="" /></span>
							<h5 class="service-block_three-heading">Natrium Acid (NA)</h5>
							<div class="service-block_three-text">
								Nitric acid is often used in metal purification processes, as a solvent, oxidizer, and as a raw material for producing fertilizers and explosives. Typically, nitric acid is used by the mining and chemical industries. This strong acid is a colorless liquid.
							</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/icons/nitric2.png" alt="" /></span>
								<h5 class="service-block_three-heading alternate">
									<a href="{{ url('/product') }}">Natrium Acid (NA)</a>
								</h5>
								<a class="service-block_three-learn" href="{{ url('/product') }}">Learn More</a>
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/icons/booster.png" alt="" /></span>
							<h5 class="service-block_three-heading">Booster</h5>
							<div class="service-block_three-text">
								Trojan Booster is a booster explosive specifically designed to enhance the efficiency and power of blasting in various mining and construction applications. Made from a blend of explosives designed to provide an additional boost to the main explosives, Trojan Booster ensures more effective material fragmentation and optimal blasting results.
							</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/icons/booster.png" alt="" /></span>
								<h5 class="service-block_three-heading alternate">
									<a href="{{ url('/product') }}">Booster</a>
								</h5>
								<a class="service-block_three-learn" href="{{ url('/product') }}">Learn More</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>			
	</section>
	<!-- End Services One -->
	
	<!-- Footer -->
	<footer class="main-footer" style="background-image:url(images/background/pattern-11.png)">
		<div class="auto-container">
			<!-- Widgets Section -->
			<div class="widgets-section">
				<div class="row clearfix">
					
					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="logo">
										<!-- Ganti gambar dengan teks yang dapat diklik -->
										<a href="{{ url('/') }}"><h4>PT. Bara Blasting Perkasa</h4></a>
									</div>
									<div class="text">
										"Our locally produced Ammonium Nitrate, manufactured with high-quality facilities, enables us to consistently ensure the availability of supply through comprehensive distribution to our customers."
									</div>
									<a href="#" class="theme-btn about-btn">About us</a>
								</div>
							</div>
							
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget newsletter-widget">
									<h4>Newsletter</h4>
									<div class="text">company.info@barablastingperkasa</div>
									
								
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h4>Official info:</h4>
									<ul class="contact-list">
										<li><span class="icon fa fa-phone"></span> Menara Imperium 10th Floor, Jalan H.R. Rasuna Said Kav 1, Setiabudi, Jakarta Selatan 12980</li>
										<li><span class="icon fa fa-envelope"></span> +62 21 837 85938</li>
									</ul>
									<div class="timing">
										<strong>Open Hours: </strong>
										Mon - Fri: 8 am - 5 pm
									</div>
								</div>
							</div>
							
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget instagram-widget">
									<h4>Gallery</h4>
									<div class="widget-content">
										<div class="images-outer clearfix">
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-1.jpg"><img src="images/gallery/g1.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-2.jpg"><img src="images/gallery/g2.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-3.jpg"><img src="images/gallery/g3.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-4.jpg"><img src="images/gallery/g4.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-5.jpg"><img src="images/gallery/g5.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-6.jpg"><img src="images/gallery/g6.jpg" alt=""></a></figure>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			
			
		</div>
		
	</footer>
	<!-- End Footer -->
	
</div>
	<!-- Footer -->
	
	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="fa-solid fa-power-off fa-fw"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa-solid fa-paper-plane fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup -->
		
</div>
<!-- End PageWrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/odometer.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/parallax-scroll.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/magnific-popup.min.js"></script>

<script src="js/script.js"></script>



</body>
</html>