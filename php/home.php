<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- DESCRIPTION -->
	
	
	<!-- OG -->

	
	<!-- FAVICONS ICON ============================================= -->
	
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Optics Simulator </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/main.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	
	
	<!-- SHORTCODES============================================= -->
	
	
	<!-- STYLESHEETS ============================================= -->

	
	<!-- REVOLUTION SLIDER CSS ============================================= -->
	
	<!-- REVOLUTION SLIDER END -->	
</head>
<body id="bg">
<div class="col-md-12">

	<!-- Header Top ==== -->
    <header class="header rs-nav header-transparent">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
							<li><a href="faq-1.html">Admin</a></li>
							<li><a href="#"></i>Student</a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div  class="menu-links navbar-collapse collapse justify-content-start"  id="menuDropdown">
                        <ul id = navbar class="nav navbar-nav">	
							<li class="active"><a class=one href="#">Home </a>
							</li>
							<li class = "pages"><a class=one href="#">Pages <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu1">
									<li><a class=one href="profile.html">Profile</a></li>
									<li class ="activities"><a class=one href="#">Activities <i class="fa fa-chevron-right"></i></a>
										<ul class="sub-menu">
											<li><a class=one href="#">Uploaded Activities</a></li>
											<li><a class=one href="#">Upcoming Activities</a></li>
										</ul>
									</li>
									<li><a class=one href="#">About Us</i></a></li>
									<li><a class=one href="#">FAQ's</a></li>
									<li><a class=one href="#">Contact Us</i></a></li>
								</ul>
							</li>
							
							
							<li class="nav-dashboard"><a class=one href="javascript:;">Dashboard <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu2">
									<li><a class=one href="admin/index.html">Dashboard</a></li>
									<li><a class=one href="admin/courses.html">Courses</a></li>
									<li><a class=one href="admin/review.html">Review</a></li>
									<li><a class=one href="admin/teacher-profile.html">Teacher Profile</a></li>
									
								</ul>
							</li>
							<li class="nav-simulator"><a class=one href="javascript:;">Optics Simulator <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu3">
									<li><a class=one href="admin/index.html">How to Use</a></li>
									<li><a class=one href="admin/courses.html">Simulator</a></li>
									
								</ul>
							</li>
						</ul>
						<div class="nav-social-link"> 
							<!-- Search Button ==== -->
							<input type="text" class = "search" placeholder="Search.." name="search2">
  							<button type="submit"><i class="fa fa-search"></i></button>
							<a class=one href="javascript:;"><i class="fa fa-facebook"></i></a>
							<a class=one href="javascript:;"><i class="fa fa-google-plus"></i></a>
							<a class=one href="javascript:;"><i class="fa fa-linkedin"></i></a>
							
						</div> 
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
	
    <!-- Header Top END ==== -->
    <!-- Content -->
	<div class="content">
		<h1 class="heading">Welcome To Optics Simulator</h1>
		<button class="signin" style="margin: 15px;">Sign In</button>
		<button class="signup" style="margin: 15px;">Sign Up</button>
	</div>


	<!-- Footer ==== -->
    <footer>
		<?php include '../include/footer.html' ?> 
		
	</footer>
    <!-- Footer END ==== -->
	<script>
		window.onscroll = function() {myFunction()};

		var navbar = document.getElementById("menuDropdown");
		var sticky = navbar.offsetTop;

		function myFunction() {
		if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		} else {
			navbar.classList.remove("sticky");
		}
		}
	</script>  
</div>

<!-- External JavaScripts -->

</body>

</html>
