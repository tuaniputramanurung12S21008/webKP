<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PT Bara Blasting Perkasa | Dynamite Detail</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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
 	
 	<!-- Main Header -->
    <header class="main-header header-style-one">
    	
		<!-- Header Top -->
		<div class="header-top">
			<div class="auto-container">
				<div class="inner-container d-flex flex-wrap">
					<!-- Info List -->
					<ul class="info-list">
						<li><a href="#"><span class="icon fa-solid fa-phone fa-fw"></span>+62 21 837 85938</a></li>
						<li><a href="#"><span class="icon fa-solid fa-envelope fa-fw"></span>company.info@barablastingperkasa.co.id</a></li>
						<li><a href="#"><span class="icon fa-solid fa-map fa-fw"></span>Office Address : Menara Imperium 10th Floor, Jalan H.R. Rasuna Said Kav 1,<br> Setiabudi, Jakarta Selatan 12980</a></li>
					</ul>
					<!-- Social Box -->

				</div>
			</div>
		</div>
		<!-- End Header Top -->
		
        <!-- Header Lower -->
        <div class="header-lower">
            
			<div class="auto-container">
				<div class="inner-container d-flex justify-content-between align-items-center">
					
					<!-- Logo Box -->
					<div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
					
					<div class="nav-outer d-flex align-items-center">
						
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
									<li><a href="{{ url('/') }}">Home</a></li>
									<li><a href="{{ url('about') }}">About Us</a></li>
									<li><a href="{{ url('products') }}">Products</a></li>
									<li><a href="{{ url('contact') }}">Contact</a></li>
								</ul>
							</div>
							
						<!-- Main Menu End-->
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
						
					</div>
					
				</div>
				
			</div>
        </div>
        <!-- End Header Lower -->
        
		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo">
						<a href="{{ url('/') }}" title=""><img src="{{ asset('images/logo.png') }}" alt="" title=""></a>
					</div>
		
					<!-- Right Col -->
					<div class="right-box d-flex align-items-center flex-wrap">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
		
						<div class="outer-box d-flex align-items-center">
							<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- End Sticky Menu -->
		
		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-020-x-mark"></span></div>
			<nav class="menu-box">
				<div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="" title=""></a></div>
				<!-- Search -->
				<div class="search-box">
					<form method="POST" action="{{ url('contact') }}">
						@csrf
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
							<button type="submit"><span class="icon flaticon-001-loupe"></span></button>
						</div>
					</form>
				</div>
				<div class="menu-outer"><!-- Here Menu Will Come Automatically Via Javascript / Same Menu as in Header --></div>
			</nav>
		</div>
		
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Page Title -->
	<section class="page-title" style="background-image:url({{ asset('images/background/7.jpg') }})">
		<div class="auto-container">
			<h2>Products</h2>
			<ul class="bread-crumb clearfix" role="navigation" aria-label="Breadcrumb">
				<li><a href="{{ url('/') }}" aria-label="Home">Home</a></li>
				<li>Products</li>
			</ul>
		</div>
	</section>
	
    <!-- End Page Title -->
	
	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Sidebar Side -->
                <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">
						<!-- Sidebar Widget -->
						<div class="sidebar-widget category-widget">
							<ul class="cat-list">
								<li class="active"><a href="#powermite-pro">Powermite Pro</a></li>
								<li><a href="#trojan-booster">Trojan Booster</a></li>
								<li><a href="#nitric-acid">Nitric Acid</a></li>
								<li><a href="#ammonium-nitrate">Ammonium Nitrate</a></li>
								<li><a href="#calcium-nitrate">Calcium Nitrate</a></li>
							</ul>
						</div>
						
						
						<!-- Contact Widget -->
						<div class="sidebar-widget contact-widget">
							<div class="widget-content" style="background-image:url(images/background/8.jpg)">
								<div class="title">Contact us now</div>
								<a class="phone" href="tel:+62 21 837 85938">+62 21 837 85938</a>
								<div class="form">or go to contact form:</div>
								<div class="button-box text-center">
									<a href="#">Let’s start now <span class="fa-solid fa-link fa-fw"></span></a>
								</div>
							</div>
						</div>
						
					<!-- </aside> -->
				</div>
				
				<!-- Content Side -->
				<div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
					<div class="service-detail" id="powermite-pro">
						<div class="inner-box">
							<!-- POWERMITE Pro Section -->
							<div class="image">
								<img src="images/resource/service-10.jpg" alt="POWERMITE Pro" />
							</div>
							<div class="text mb-5">
								<li>Pro is a detonator sensitive emulsion explosive, packaged in a plastic film cartridge.</li>
							</div>
							<div class="text mb-5">
								<h3>Application</h3>
								<ul class="list-style-one">
									<li>POWERMITE Pro is formulated as a high-energy explosive for use in blasting rock and initiating columns of bulk explosives in surface and underground mining and general blasting. It may be used as a primer of ANFO, Heavy ANFO, and ANFO PS in small-diameter blastholes.</li>
								</ul>
							</div>
							<div class="text mb-5">
								<h3>Features and Benefits</h3>
								<ul class="list-style-one">
									<li>The relatively high Velocity of Detonation (VoD) makes this product particularly suitable for use in hard rock blasting conditions. However, the product still has sufficient gas energy to provide optimal diggability. Being an emulsion-based product, it has inherent resistance to water, both static as well as dynamic, and is suitable for use in wet conditions.</li>
								</ul>
							</div>
							<div class="text mb-5">
								<h3>Recommendations</h3>
								<ul class="list-style-one">
									<li><strong>Priming requirements:</strong> POWERMITE Pro is formulated to be sensitive to a No. 8 strength detonator. The preferred method of initiation is via the NONEL® system. When inserting the detonator into the cartridge, always use a wooden skewer, not the detonator, to pierce the plastic film.</li>
									<li><strong>Sleep time:</strong> The sleep time of POWERMITE Pro will be limited to the recommended sleep time of the explosive it is priming or that of the initiation system.</li>
									<li><strong>Water Resistance:</strong> POWERMITE Pro provides high water resistance, minimizing product loss to the environment in wet conditions.</li>
									<li><strong>Shelf life:</strong> POWERMITE Pro products have a recommended shelf life of one (1) year when transported and stored under ideal conditions.</li>
									<li><strong>Ground Temperature:</strong> Suitable for use in ground with a temperature range of 0°C to 50°C. For applications in ground temperatures outside this range, consult your Dyno Nobel representative.</li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="service-detail">
						<div class="inner-box" id="nitric-acid">
							<!-- Nitric Acid Production Section -->
							<div class="image">
								<img src="images/resource/Nitric Acid.jpg" alt="Nitric Acid Production" />
							</div>
							<div class="text mb-5">
								<h3>Nitric Acid Production</h3>
								<p><strong>58% Nitric Acid</strong></p>
								<p>Nitric acid is often used in metal purification processes, as a solvent, oxidizer, and as a raw material for producing fertilizers and explosives. Typically, nitric acid is used by the mining and chemical industries. This strong acid is a colorless liquid.</p>
							</div>
							<div class="text mb-5">
								<h3>Guaranteed Supply and Prompt Delivery to Customers</h3>
								<p>With a production capacity of up to 150 tons per day, 58% Nitric Acid is available through our local manufacturing plants, ensuring a secure supply via our extensive customer distribution network.**.</p>
							</div>
							<div class="text mb-5">
								<h3>58% Nitric Acid is Easy to Store, Transport, and Load</h3>
								<p>We are ready to deliver directly to customers. This ensures that Nitric Acid is available whenever and wherever it is needed.</p>
							</div>
							<div class="text mb-5">
								<h3>Safe and Convenient Packaging</h3>
								<p>We are committed to providing packaging solutions that meet customer requirements. Nitric Acid is available in various packaging options, such as 8-ton ISO tanks, 1 m³ IBC tanks, or 35 kg Jerry Cans. Regardless of the choice, 58% Nitric Acid is designed to be safe, easy to store, transport, and handle.</p>
							</div>
							<div class="text mb-5">
								<h3>Specification</h3>
								<ul class="list-style-one">
									<p><strong>Specific Gravity (20°C):</strong> 1.37 g/cm<sup>3</sup></p>
									<p><strong>Appearance:</strong> Liquid, clear</p>
									<p><strong>Concentration:</strong> 58%</p>
									<p><strong>Nitrous Content:</strong> &lt; 50 ppm</p>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="service-detail">
						<div class="inner-box" id="ammonium-nitrate">
							<!-- Ammonium Nitrate Section -->
							<div class="image">
								<img src="images/resource/Ammonium Nitrate.jpg" alt="Ammonium Nitrate" />
							</div>
							<div class="text mb-5">
								<h3>Ammonium Nitrate</h3>
								<p>This production technology is designed to:</p>
								<ul class="list-style-one">
									<li>Prevent prill degradation caused by temperature fluctuations.</li>
									<li>Minimize atmospheric moisture absorption.</li>
									<li>Enhance abrasion resistance.</li>
								</ul>
								<p>The manufacturing process has undergone various improvements to ensure a highly consistent prill size distribution.</p>
							</div>
							<div class="text mb-5">
								<h3>Application</h3>
								<p>Ammonium Nitrate Prill allows for the production of low-cost ANFO and emulsion agents with high quality, suitable for a wide range of applications in mining, quarrying, and construction blasting.</p>
							</div>
							<div class="text mb-5">
								<h3>Safe and Convenient Packaging</h3>
								<p>We are committed to providing packaging solutions that meet customer needs. Ammonium Nitrate Prill is available in 1.2-ton, 1-ton, and 25-kg bags. Each option is designed to ensure safety, convenience, and ease of storage, transport, and handling.</p>
							</div>
							<div class="text mb-5">
								<h3>Specification</h3>
								<ul class="list-style-one">
									<p><strong>Moisture:</strong> 0.20 % max. wt</p>
									<p><strong>pH (10% solution):</strong> 4.5 – 5.5</p>
									<p><strong>Bulk Density:</strong> 0.73 – 0.78 kg/l</p>
									<p><strong>Oil absorption:</strong> 6 % min</p>
									<p><strong>Coating agent:</strong> 0.07 - 0.14 %</p>
									<p><strong>Prill size:</strong> 
										<ul>
											<li>Prill > 2.4 mm: 5 % max</li>
											<li>Prill < 0.5 mm: 1 % max</li>
										</ul>
									</li>
									<li><strong>Total Nitrogen:</strong> 34.5 %</li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="service-detail">
						<div class="inner-box" id="calcium-nitrate">
							<!-- Calcium Nitrate Anhydrous Section -->
							<div class="image">
								<img src="images/resource/Calcium Nitrate.jpg" alt="Calcium Nitrate Anhydrous" />
							</div>
							<div class="text mb-5">
								<h3>Calcium Nitrate Anhydrous</h3>
								<p>Due to its chemical properties, calcium nitrate has widespread application in various industries. Calcium compounds are the main components of cement-based construction materials. Calcium nitrate-based concrete additives increase concrete curing speed, improve strength characteristics, and slow down corrosion processes in reinforcing steel.</p>
								<p>In the oil and gas industry, calcium nitrate, owing to its water solubility and anti-corrosion properties, is used as a component of well-killing fluids and in scheduled servicing and work-over of wells.</p>
								<p>It is also widely used in the chemical industry, among other things, as a coagulating agent in the manufacturing of rubber and plastics.</p>
							</div>
							<div class="text mb-5">
								<h3>Calcium Nitrate Anhydrous</h3>
								<ul class="list-style-one">
									<p><strong>Chemical name:</strong> Calcium nitrate anhydrous</p>
									<p><strong>CAS/EINECS number:</strong> 10124-37-5 / 233-332-1</p>
									<p><strong>Chemical formula:</strong> Ca(NO<sub>3</sub>)<sub>2</sub></p>
									<p><strong>Custom code (TARIC):</strong> 28342980</p>
								</ul>
							</div>
							<div class="text mb-5">
								<h3>Specification</h3>
								<ul class="list-style-one">
									<p><strong>Appearance:</strong> White granules</p>
									<p><strong>Calcium nitrate:</strong> Min 96%</p>
									<p><strong>Moisture content:</strong> Max 3%</p>
									<p><strong>Ammoniacal Nitrogen:</strong> 0.3%</p>
									<p><strong>Insolubles:</strong> Max 0.1%</p>
								</ul>
							</div>
							<div class="text mb-5">
								<h3>Granulometric Composition</h3>
								<ul class="list-style-one">
									<p><strong>Under 1 mm:</strong> Max 10%</p>
									<p><strong>1 - 4 mm:</strong> Min 90%</p>
									<p><strong>Under 6 mm:</strong> 100%</p>
									<p><strong>Friability:</strong> 100%</p>
								</ul>
							</div>
						</div>
					</div>
					
				
				
								
								
								
							</div>
							
							
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Sidebar Page Container -->
	
	
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
										<a href="index.html"><h4>PT. Bara Blasting Perkasa</h4></a>
									</div>
									<div class="text">"Our locally produced Ammonium Nitrate, manufactured with high-quality facilities, enables us to consistently ensure the availability of supply through comprehensive distribution to our customers."</div>
									<a href="#" class="theme-btn about-btn">About us</a>
								</div>
							</div>
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget newsletter-widget">
									<h4>Email</h4>
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
<!-- End PageWrapper -->

<!-- Search Popup -->
<div class="search-popup">
	<div class="color-layer"></div>
	<button class="close-search"><span class="flaticon-020-x-mark"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="flaticon-001-loupe"></i></button>
		</div>
	</form>
</div>
<!-- End Search Popup -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/odometer.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/magnific-popup.min.js"></script>

<script src="js/script.js"></script>



</body>
</html>