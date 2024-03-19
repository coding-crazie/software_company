<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="assets/home/images/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/home/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/home/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Template Stylesheet -->
    <link href="assets/home/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
   <x-home-nav></x-home-nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img class="w-100" src="assets/home/images/carousel-2.jpg" alt="Image"> -->
                    <video  data-uk-cover width="100%" height="100%" data-uk-img autoplay muted loop playsinline>

                        <source src="assets/home/images/main.mp4" type="video/mp4">
                    
                      </video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img class="w-100" src="assets/home/images/carousel-2.jpg" alt="Image"> -->
                    <video  data-uk-cover width="100%" height="100%" data-uk-img autoplay muted loop playsinline>

                        <source src="assets/home/images/main2.mp4" type="video/mp4">
                    
                      </video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <!-- <h1 class="text-white mb-0" data-toggle="counter-up">50 +</h1> -->
                            <h1 class="text-white mb-0" >30+ </h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" >55+</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" >5+</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->





    <!-- About Start -->
    <div class="container-fluid py-5 " >
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">The Best IT Solution With 4+ Years of Experience</h1>
                    </div>
                    <p class="mb-4">A team of dedicated professionals driven by creativity and expertise, we strive to push boundaries and exceed expectations in every project we undertake. From streamlined applications to robust enterprise systems, our goal is to deliver unparalleled quality and efficiency. Join us on our journey to redefine possibilities in the world of software development.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 " >Request A Quote</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded "  src="assets/home/images/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
             <!-- Globe Start -->
             <div class="container-fluid py-5 wow fadeInUp">
                <div class="container py-5">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">Our Clients</h5>
                        <h1 class="mb-0">See Our Clients Around Globe </h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-globe text-white"></i>
                                    </div>
                                    <h4>Global Reach</h4>
                                    <p class="mb-0">"Our clients span across continents, showcasing our international presence."</p>
                                </div>
                                <div class="col-12 wow zoomIn">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-users text-white"></i>
                                    </div>
                                    <h4>Diverse Industries </h4>
                                    <p class="mb-0">"Explore how our services cater to clients in various sectors worldwide."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  wow zoomIn"  style="min-height: 350px;">
                            <div class="position-relative h-100">
                                <!-- <img class="position-absolute w-100 h-100 rounded wow zoomIn" src="assets/home/images/feature.jpg" style="object-fit: cover;"> -->
                                <canvas class="position-absolute w-100 h-100 rounded wow zoomIn" id="cheemaglobe" width="700" height="700"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h4>Success Stories</h4>
                                    <p class="mb-0">"Discover testimonials from satisfied clients across the globe."</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-map text-white"></i>
                                    </div>
                                    <h4>Map of Engagement</h4>
                                    <p class="mb-0">"Visualize the geographical distribution of our clientele and their impact".</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Globe Start -->
        
        
            <section class="section section-2 projectsSection">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Our Popularity</h5>
                    <h1 class="mb-0">Trusted by leaders and fast growing startups worldwide</h1>
                </div>
                <div class="circleShape-2"></div>
        
        
                <div class='marquee-with-options'>
                    <img src="assets/home/images/client21.png"width="200px"  > 
                    <img src="assets/home/images/client22.png"width="200px"  > 
                    <img src="assets/home/images/client23.png"width="200px"  > 
                    <img src="assets/home/images/client24.png"width="200px"  > 
                    <img src="assets/home/images/client14.png"width="200px"  > 
                    <img src="assets/home/images/client25.png"width="200px"  > 
                    <img src="assets/home/images/client26.png"width="200px"  > 
                    <img src="assets/home/images/client27.png"width="200px"  > 
                    <img src="assets/home/images/client28.png"width="200px"  > 
                    <img src="assets/home/images/client29.png"width="200px"  > 
                    <img src="assets/home/images/client30.png"width="200px"  > 
                    <img src="assets/home/images/client31.png"width="200px"  > 
                    <img src="assets/home/images/client32.png"width="200px"  > 
                    <img src="assets/home/images/client1.png" class="marqueeLogo marqueeLogo-1">
                    <img src="assets/home/images/client2.png" class="marqueeLogo marqueeLogo-1">
                    <img src="assets/home/images/client3.png" class="marqueeLogo marqueeLogo-1">
                    <img src="assets/home/images/client4.svg" class="marqueeLogo marqueeLogo-1">
                    <img src="assets/home/images/client5.jpeg" class="marqueeLogo marqueeLogo-1">
                    <img src="assets/home/images/client6.svg" class="marqueeLogo marqueeLogo-1">
                    <img src="assets/home/images/client7.png" class="marqueeLogo marqueeLogo-1">
                    <img src="assets/home/images/client8.png" class="marqueeLogo marqueeLogo-1">
                 

                    <img src="assets/home/images/client9.png" class="marqueeLogo marqueeLogo-1">
                    <img src="assets/home/images/client10.png" class="marqueeLogo marqueeLogo-1">
                    
                    
                    <img src="assets/home/images/client11.png" class="marqueeLogo marqueeLogo-1">
                    <img src="assets/home/images/client12.png" class="marqueeLogo marqueeLogo-13">
                    <img src="assets/home/images/client13.png" class="marqueeLogo marqueeLogo-13">
                    <img src="assets/home/images/client15.png" class="marqueeLogo marqueeLogo-13">
                    <img src="assets/home/images/client16.png" class="marqueeLogo marqueeLogo-13">
                    <img src="assets/home/images/client17.png" class="marqueeLogo marqueeLogo-13">
                    <img src="assets/home/images/client19.png" class="marqueeLogo marqueeLogo-13"> 
                    <img src="assets/home/images/client20.png" width="260px" >

                    <!-- <img src="assets/home/images/project-logo-4.webp" class="marqueeLogo">
                    
                    <img src="assets/home/images/project-logo-6.webp" class="marqueeLogo marqueeLogo-6">
                    <img src="assets/home/images/project-logo-7.webp" class="marqueeLogo marqueeLogo-7">
                    <img src="assets/home/images/project-logo-8.webp" class="marqueeLogo marqueeLogo-8">
                    
                    
                    <img src="assets/home/images/project-logo-12.webp" class="marqueeLogo marqueeLogo-12">
                    <img src="assets/home/images/project-logo-13.webp" class="marqueeLogo marqueeLogo-13"> -->
        
                </div>
            </section>
        
    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Best In Industry</h4>
                            <p class="mb-0">Unleashing excellence, one line of code at a time - reigning as the best in the industry."</p>
                        </div>
                        <div class="col-12 wow zoomIn">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Award Winning</h4>
                            <p class="mb-0">Code that conquers, awards that follow: Unleashing excellence with every line.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn"  style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" src="assets/home/images/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Professional Staff</h4>
                            <p class="mb-0">Transforming code into excellence, one keystroke at a time: Professional Staff, the architects of digital innovation.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p class="mb-0">24/7 Support: Where your software never sleeps, but your competition might.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-9 wow fadeInUp">
        <div class="container py-9">
           
		<div class="page">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">With our years of experience in software development, we have been helping a wide range of clients. Our Services include:</h1>
            </div>		
            <div class="row g-0">
	
			
			<!-- tabs -->
			<div class="pcss3t pcss3t-effect-scale pcss3t-theme-1" style="padding-bottom: 0px;">
				<input type="radio" name="pcss3t" checked  id="tab1"class="tab-content-first">
				<label for="tab1"><svg data-icon-name="world" data-style="line" icon_origin_id="17707" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Flat Line" id="world" class="icon line" width="48" height="48"><ellipse style="fill: rgb(246, 146, 30); stroke-width: 1; stroke: rgb(228, 10, 10);" ry="9" rx="3" cy="12" cx="12" id="secondary"></ellipse><path style="fill: none; stroke: rgb(228, 10, 10); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1;" d="M21,12a9,9,0,1,1-9-9A9,9,0,0,1,21,12ZM12,3c-1.66,0-3,4-3,9s1.34,9,3,9,3-4,3-9S13.66,3,12,3Z" id="primary"></path><path style="fill: none; stroke: rgb(228, 10, 10); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1;" d="M19.2,17.4a9.7,9.7,0,0,0-4.42-2.1,13,13,0,0,0-5.56,0A9.7,9.7,0,0,0,4.8,17.4" data-name="primary" id="primary-2"></path><path style="fill: none; stroke: rgb(228, 10, 10); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1;" d="M19.2,6.6a9.7,9.7,0,0,1-4.42,2.1A12.53,12.53,0,0,1,12,9a12.53,12.53,0,0,1-2.78-.3A9.7,9.7,0,0,1,4.8,6.6" data-name="primary" id="primary-3"></path></svg>Web  </label>
				

				
				<input type="radio" name="pcss3t" id="tab3" class="tab-content-2">
				<label for="tab3"> <img src="/assets/ecomerce.png" width="40px" alt=""> E-commerce</label>
				
				<input type="radio" name="pcss3t" id="tab5" class="tab-content-3">
				<label for="tab5"><img src="/assets/agile.png" width="40px" alt=""> DevOPs</label>

               
                <input type="radio" name="pcss3t" id="tab6" class="tab-content-4">
				<label for="tab6"><img src="/assets/crm.png" width="40px" alt=""> CRM</label>
                <input type="radio" name="pcss3t" id="tab7" class="tab-content-5">
				<label for="tab7"><img src="https://i0.wp.com/compile.blog/wp-content/uploads/2021/11/Web3-Icon-5.png?ssl=1" width="40px" alt=""> Web 3.0</label>
                
                <input type="radio" name="pcss3t" id="tab8" class="tab-content-6">
				<label for="tab8"><img src="/assets/block.png" width="40" alt=""> BlockChain</label>

                
				
				<ul  class="bg-light rounded">
					<li class="tab-content tab-content-first typography">
						<h1>Web</h1>
						<p>From dynamic e-commerce platforms to engaging corporate websites, we leverage the latest technologies and industry best practices to ensure optimal performance, scalability, and security. Whether it's building a new website from scratch, revamping an existing one, or providing ongoing maintenance and support, we are committed to delivering innovative web solutions that exceed expectations and help our clients succeed in the digital marketplace.</p>
					</li>
					
					<li class="tab-content tab-content-2 typography">
						<h1> E-commerce</h1>
						<p>
                            In today's digital landscape, e-commerce has become an integral part of the services offered by software companies. Leveraging cutting-edge technologies, these companies provide comprehensive e-commerce solutions to businesses across various industries. From developing user-friendly websites and mobile applications to implementing secure payment gateways and robust inventory management systems, software firms cater to the diverse needs of e-commerce businesses. With a focus on enhancing user experience, optimizing conversion rates, and ensuring seamless transactions, these companies play a crucial role in driving the success of online retailers. Through innovative software solutions, they empower businesses to adapt to the ever-evolving demands of the digital marketplace, facilitating growth and expansion in the competitive e-commerce sector.</p>
					</li>
					
					<li class="tab-content tab-content-3 typography">
						<h1>DevOPs</h1>
						<p>DevOps is at the heart of our approach, enabling seamless collaboration between development and operations teams to accelerate delivery cycles and improve overall product quality. Our team leverages automation, continuous integration, and continuous delivery pipelines to ensure efficient code deployment and rapid response to customer feedback. With a focus on infrastructure as code (IaC) and containerization technologies like Docker and Kubernetes, we enable scalability, resilience, and flexibility in our clients' software solutions. By embracing DevOps principles, we empower organizations to achieve faster time-to-market, enhanced reliability, and greater innovation in their software development endeavors.</p>
					</li>
					
					<li class="tab-content tab-content-4 typography">
						<div class="typography">
							<h1>CRM</h1>
							<p>Management (CRM) as a fundamental aspect of our operations. We understand the significance of building and maintaining strong relationships with our clients. Our CRM approach involves leveraging cutting-edge technology to effectively manage interactions and relationships with current and potential customers. Through our CRM software solutions, we streamline processes, personalize interactions, and enhance customer satisfaction. By harnessing data-driven insights, we empower our clients to better understand their customers' needs and preferences, ultimately driving growth and success. At our core, we are committed to delivering exceptional customer experiences, and our CRM services play a pivotal role in achieving this goal.</p>		
						</div>
					</li>

                    <li class="tab-content tab-content-5 typography">
						<div class="typography">
							<h1>Web 3.0</h1>
							<p>
                                In the rapidly evolving landscape of technology, the emergence of Web 3.0 marks a significant paradigm shift. At [Software Company Name], we are at the forefront of harnessing the potential of Web 3.0 to revolutionize the services we offer. Web 3.0 represents a decentralized, interconnected ecosystem where data ownership, privacy, and security are paramount. Leveraging blockchain technology, smart contracts, and decentralized applications (DApps), we empower our clients with solutions that transcend traditional boundaries. From decentralized finance (DeFi) platforms to self-sovereign identity management systems, our Web 3.0 services enable unparalleled efficiency, transparency, and trust. Embracing the principles of decentralization and interoperability, we are committed to shaping the future of the digital landscape through innovative Web 3.0 solutions.</p>
						</div>
					</li>


                    <li class="tab-content tab-content-6 typography">
						<div class="typography">
							<h1>BlockChain</h1>
							<p> Blockchain has emerged as a transformative force across industries, revolutionizing the way data is stored, secured, and shared. Our team specializes in developing blockchain-based applications tailored to meet the unique needs of our clients. Whether it's implementing smart contracts for automated transactions, building decentralized applications (DApps) for enhanced security and transparency, or integrating blockchain into existing systems for improved efficiency, we provide end-to-end solutions that harness the power of distributed ledger technology. With a focus on innovation and expertise in blockchain development, we empower businesses to unlock new opportunities and drive growth in the digital economy.
                            </p>
						</div>
					</li>
				</ul>
			</div>
        </div>
			<!--/ tabs -->
		</div>
         
        </div>
    </div>
    <!-- Service End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
                <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Hourly Price</h4>
                            <h1 class="display-5 mb-3">
                                <img src="assets/home/images/offer-icon-1.svg" alt="">
                             </h1>
                        </div>
                        <div class="p-5 pt-0">
                           
                            <div class="d-flex justify-content-between mb-3"><span>Good, when you have flexible scope</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Cost-effective</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Agile approach</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Minimize price discussions, maximize delivery speed</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Tasks hour tracking for transparency</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Includes Project Management & QA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Fixed Price</h4>
                            <h1 class="display-5 mb-3">
                                <img src="assets/home/images/offer-icon-2.svg" alt="">
                             </h1>
                        </div>
                        <div class="p-5 pt-0">
                         
                            <div class="d-flex justify-content-between mb-3"><span>Good, when you have clear scope</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Predictable Cost</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>No Overhead Costs</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>No Recruitment Fee</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Reduced risk</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Faster delivery</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Includes Project Management & QA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" >
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Dedicated Development</h4>
                            <h1 class="display-5 mb-3">
                                <img src="assets/home/images/offer-icon-3.svg" alt="">
                             </h1>
                        </div>
                        <div class="p-5 pt-0">
                          
                            <div class="d-flex justify-content-between mb-3"><span>Ideal for dedicated team management</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Greater control</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Test Before You Hire</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Immediate Starts</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Cost-effective</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Less business operations, more development time</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">We understand that every project is unique, and we're here to provide you with tailored solutions to meet your specific needs. Whether you're looking for product pricing, custom services, or specialized solutions, our team is ready to assist you. Simply fill out the form below with details about your project requirements, and we'll get back to you with a comprehensive quote. At our company, we prioritize transparency, efficiency, and delivering value to our clients. Let us help bring your vision to life.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" >
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

 <!--roadmap area start-->
 <div class="roadmap-area section-padding wow fadeInUp" id="roadmap" style="padding-bottom: 90px;"> 
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="heading">
                    <div class="space-10"></div>
                    <div class="space-10"></div>
                    <br>
                    <h2 class="fw-bold text-primary text-uppercase">Development Roadmap</h5>
                </div>
                <div class="space-60 d-none d-sm-block"></div>
            </div>
        </div>
        
    </div>
    <div class="container">
        <div class="roadmap-carousel owl-carousel">
            <div class="roadmap-item">
                <div class="single-roadmap text-center road-left">
                    <div class="single-roadmap-img">
                        <img src="assets/home/images/roadmap-1.png" alt="">
                    </div>
                    <div class="space-30"></div>
                    <div class="roadmap-text">
                        <h1 style="color:#ffff"> Step 1</h1>
                        <div class="space-10"></div>
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <p style="color:#ffff">Fill up the quote form and in few minutes you will receive your answer or you can also chat with us via whatsapp or livechat </p>
                    </div>
                </div>
            </div>
            <div class="roadmap-item align-self-center">
                <div class="single-roadmap road-right">
                    <div class="row">
                        <div class="col-5 align-self-center">
                            <div class="single-roadmap-img">
                                <img src="assets/home/images/roadmap-2.png" alt="">
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="roadmap-text">
                                <h1 style="color:#ffff"> Step 2</h1>

                                <h5 class="fw-bold text-primary text-uppercase">Get Your Client Panel</h5>
                                <p style="color:#ffff">When you say done to the project we will welcome you to your client dashboard, where you can see all activites regarding to your projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item">
                <div class="single-roadmap text-center road-left">
                    <div class="single-roadmap-img">
                        <img src="assets/home/images/roadmap-4.png" alt="">
                    </div>
                    <div class="space-30"></div>
                    <div class="roadmap-text">
                        <h1 style="color:#ffff"> Step 3</h1>
                        <div class="space-10"></div>
                        <h5 class="fw-bold text-primary text-uppercase">Under Production </h5>
                        <p style="color:#ffff">Now you need to sit back and wait for the deadline, you will be notified via email or phone number (if given) about your project </p>
                    </div>
                </div>
            </div>
            <div class="roadmap-item align-self-center">
                <div class="single-roadmap road-right">
                    <div class="row">
                        <div class="col-5 align-self-center">
                            <div class="single-roadmap-img">
                                <img src="assets/home/images/roadmap-5.png" alt="">
                            </div>
                    
                        </div>
                        <div class="col-7">
                            <div class="roadmap-text">
                                <h1 style="color:#ffff"> Step 4</h1>
 
                                 <h5 class="fw-bold text-primary text-uppercase">Taking Reviews</h5>
                                <p style="color:#ffff">Taking reviews one critique at a time, until perfection prevails. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item">
                <div class="single-roadmap text-center road-left">
                    <div class="single-roadmap-img">
                        <img src="assets/home/images/roadmap-4.png" alt="">
                    </div>
                    <div class="space-30"></div>
                    <div class="roadmap-text">
                        <h1 style="color:#ffff"> Step 5</h1>

                        <div class="space-10"></div>
                        <h5 class="fw-bold text-primary text-uppercase">Payment </h5>
                        <p style="color:#ffff">Complete Your Payment via confirm methods during deal After archiving perfection  </p>
                    </div>
                </div>
            </div>
            <div class="roadmap-item align-self-center">
                <div class="single-roadmap road-right">
                    <div class="row">
                        <div class="col-5 align-self-center">
                            <div class="single-roadmap-img">
                                <img src="assets/home/images/roadmap-5.png" alt="">
                            </div>
                    
                        </div>
                        <div class="col-7">
                            <div class="roadmap-text">
                                <h1 style="color:#ffff"> Final </h1>

                                <h5 class="fw-bold text-primary text-uppercase">Remarks</h5>
                                <p style="color:#ffff">Your feedback is the final piece of code needed to complete our project masterpiece. We eagerly await your remarks to perfect our creation. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--roadmap area end-->
    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="assets/home/images/testimonals.png" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Fischer Martin</h4>
                            <small class="text-uppercase">Trader</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                       Thanks to XYZ Software, our productivity soared while our competition trembled. Their solution killed it – literally.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <!-- <img class="img-fluid rounded" src="assets/home/images/testimonial-2.jpg" style="width: 60px; height: 60px;" > -->
                        <img class="img-fluid rounded" src="assets/home/images/testimonals.png" style="width: 60px; height: 60px;" >

                        <div class="ps-4">
                            <h4 class="text-primary mb-1">James Jacob </h4>
                            <small class="text-uppercase">Business </small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "Using XYZ software has revolutionized the way we manage our business operations. It's intuitive, efficient, and has significantly boosted our productivity. Highly recommend it!"
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <!-- <img class="img-fluid rounded" src="assets/home/images/testimonial-3.jpg" style="width: 60px; height: 60px;" > -->
                        <img class="img-fluid rounded" src="assets/home/images/testimonals.png" style="width: 60px; height: 60px;" >

                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Julian Ross </h4>
                            <small class="text-uppercase">Finance</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Using XYZ software has truly streamlined our business processes, saving us time and increasing efficiency. Highly recommended!
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <!-- <img class="img-fluid rounded" src="assets/home/images/testimonial-4.jpg" style="width: 60px; height: 60px;" > -->
                        <img class="img-fluid rounded" src="assets/home/images/testimonals.png" style="width: 60px; height: 60px;" >

                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dexter</h4>
                            <small class="text-uppercase">Business</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">

"Using XYZ Software has streamlined our processes and increased our efficiency tenfold. Highly recommend it to any business looking for reliable solutions!"
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



<!-- End skills  -->
    <!-- Team Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="assets/home/images/team.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="assets/home/images/team.jpg" alt="">

                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Ahmad </h4>
                            <p class="text-uppercase m-0">Senior Developer  </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" >
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="assets/home/images/team.jpg" alt="">

                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Faizam Azam Dev </h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->





    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Startup</h1>
                        </a>
                        <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd eos duo.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved. 
						
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
                        <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type='text/javascript' src='http://d3js.org/d3.v3.min.js'></script>
    <script type='text/javascript' src='http://d3js.org/topojson.v1.min.js'></script>
    <script type='text/javascript' src="assets/home/scripts/planetaryjs.min.js"></script>
    <script type="text/javascript" src="assets/home/scripts/planetaryjs-objects.js"></script>
    <script src="assets/home/scripts/myscript.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/home/lib/wow/wow.min.js"></script>
    <script src="assets/home/lib/easing/easing.min.js"></script>
    <script src="assets/home/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/home/lib/counterup/counterup.min.js"></script>
    <script src="assets/home/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/home/js/custom.js"></script>
<script src="assets/home/js/jquery.marquee.js"></script>
    <!-- Template Javascript -->
    <script src="assets/home/js/main.js"></script>
</body>

</html>