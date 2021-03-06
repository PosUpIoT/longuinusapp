<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>CardPost - Home Version 1</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="<?php echo base_url(); ?>/assets/css/uikit.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>/assets/js/html5shiv.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<!-- Main Navbar -->
		<nav class="main-navbar unibar unibar-lg bg-white bd-b">

			<!-- unibar container -->
			<div class="container unibar-container bg-inherit">

				<!-- header block -->
				<div class="unibar-block header-block bg-primary hide-border">
				
					<!-- brand cell -->
					<div class="unibar-cell menucon-cell">
						<a href="#" class="menucon morphs" data-ctoggle="unhide" data-target="#fullmenu"><span></span></a>
					</div>
					<!-- /brand cell -->

					<!-- brand cell -->
					<div class="unibar-cell brand-cell">
						<a href="index.html" class="unibar-brand fw-bold">Longinus</a>
					</div>
					<!-- /brand cell -->
					
					<!-- brand cell -->
					<div class="unibar-cell search-toggle-cell">
						<div class="ie-fix">
							<a class="search-toggle" href="#" data-ctoggle="unhide-search" data-target=".main-navbar"><i class="fa-search hidden-toggled"></i><i class="fa-close visible-toggled"></i></a>
						</div>
					</div>
					<!-- /brand cell -->

				</div>
				<!-- /header block -->
				
				<!-- nav block -->
				<div class="unibar-block nav-block bg-inherit">
				
					<!-- nav cell -->
					<div class="unibar-cell nav-cell cell-max">
					
						<!-- unibar search -->
						<form class="unibar-search">
							<div class="search-box">
								<input class="text-box" type="text" placeholder="Search anything...">
								<button type="button" class="btn btn-primary case-u"><i class="fa-search mgr-5"></i>search</button>
							</div>
						</form>
						<!-- /unibar search -->
						
						<!-- mobile quick links -->
						<div class="visible-sm visible-xs">
						
							<!-- uninav -->
							<ul class="uninav unibar-uninav uninav-fga-primary uninav-fillh auto-invert case-u fw-bold text-center">
								<li class="active"><a href="index.html">home</a></li>
								<li><a href="#">latest</a></li>
								<li><a href="#" data-ctoggle="unhide" data-target="#menu-col1">more<i class="fs-80 ti-plus dd-icon toggled-rotz-135"></i></a>
							</ul>
							<!-- /uninav -->
						
						</div>
						<!-- /mobile quick links -->
						
						<!-- collapsible menu -->
						<div id="menu-col1" class="unibar-collapse-sm">
						
							<!-- uninav -->
							<ul class="uninav unibar-uninav uninav-fga-primary uninav-fillh auto-invert case-u fw-bold">
								<li class="active"><a href="index.html">home</a></li>
								<li><a href="index-2.html">home II</a></li>
								<li class="dropdown"><a href="#" data-toggle="dropdown">pages<i class="fs-80 ti-plus dd-icon open-rotz-135"></i></a>
									<ul class="dropdown-menu dropdown-right case-c">
										<li class="active"><a href="index.html">Home Version 1</a></li>
										<li><a href="index-2.html">Home Version 2</a></li>
										<li><a href="post.html">Post View</a></li>
										<li><a href="search.html">Search Results</a></li>
										<li class="divider"></li>
										<li><a href="login.html">Sign In page</a></li>
										<li><a href="register.html">Sign Up page</a></li>
										<li><a href="error.html">404 Page</a></li>
										<li class="divider"></li>
										<li><a href="colors.html">Color Guide</a></li>
										<li><a href="features.html">Selected Features</a></li>
									</ul>
								</li>
							</ul>
							<!-- /uninav -->
						
						</div>
						<!-- collapsible menu -->
						
					</div>
					<!-- /nav cell -->
					
					<!-- cell -->
					<div class="unibar-cell hidden-xs hidden-sm cell-min case-u">
						Sunday, July 3, 2016
					</div>
					<!-- /cell -->
					
				</div>
				<!-- /nav block -->

				<!-- mega menu -->
				<div id="fullmenu" class="mega-menu efx-slide-down">

					<!-- Cont -->
					<div class="menu-cont">
					
						<!-- Col -->
						<div class="cont-col nav-col bg-primary-d">
						
							<ul class="uninav uninav-v uninav-inverse uninav-lline uninav-bga-accent-xl uninav-fga-accent-xl uninav-default case-u uninav-ruled">
								<li><a href="#">home</a></li>
								<li><a href="#">videos</a></li>
								<li><a href="#">photos</a></li>
								<li><a href="#">trending</a></li>
								<li><a href="#">photos</a></li>
								<li><a href="#">music</a></li>
								<li><a href="#">technology</a></li>
								<li><a href="#">celebrities</a></li>
								<li><a href="#">fashion</a></li>
								<li><a href="#">television</a></li>
							</ul>
							
						</div>
						<!-- /Col -->
						
						<!-- Col -->
						<div class="cont-col extras-col hidden-xs">
						
							<!-- extras block -->
							<div class="extras-block">
							
								<h5>top stories</h5>

								<!-- row -->
								<div class="row">

									<!-- col -->
									<div class="col-sm-3">

										<div class="post-img mgb-10">
											<a href="#" class="img-link"><img src="<?php echo base_url(); ?>/assets/images/story2.jpg" alt="" /></a>
										</div>
										<h6 class="post-title case-c"><a href="#">Kanye Launches Personal Time Capsule Into Space As "Gift To Aliens"</a></h6>

									</div>
									<!-- /col -->
									
									<!-- col -->
									<div class="col-sm-3">

										<div class="post-img mgb-10">
											<a href="#" class="img-link"><img src="<?php echo base_url(); ?>/assets/images/story3.jpg" alt="" /></a>
										</div>
										<h6 class="post-title case-c"><a href="#">Beautiful woman has no incentive to be less annoying</a></h6>

									</div>
									<!-- /col -->
									
									<!-- col -->
									<div class="col-sm-3">

										<div class="post-img mgb-10">
											<a href="#" class="img-link"><img src="<?php echo base_url(); ?>/assets/images/story5.jpg" alt="" /></a>
										</div>
										<h6 class="post-title case-c"><a href="#">This Melbourne Cafe Is Now Selling Deconstructed Irony</a></h6>

									</div>
									<!-- /col -->
									
									<!-- col -->
									<div class="col-sm-3">

										<div class="post-img mgb-10">
											<a href="#" class="img-link"><img src="<?php echo base_url(); ?>/assets/images/story10.jpg" alt="" /></a>
										</div>
										<h6 class="post-title case-c"><a href="#">Whoops! Reality TV Contestant Goes To Air Without A Backstory</a></h6>

									</div>
									<!-- /col -->

								</div>
								<!-- /row -->

							</div>
							<!-- /extras block -->
						
							<!-- extras block -->
							<div class="extras-block">
							
								<h5>popular tags</h5>
								
								<ul class="unitags">
									<li><a href="#">kardashians (634)</a></li>
									<li><a href="#">trump (220)</a></li>
									<li><a href="#">bieber (180)</a></li>
									<li><a href="#">kanye west (98)</a></li>
									<li><a href="#">kylie jenner (74)</a></li>
									<li><a href="#">blac chyna (61)</a></li>
									<li><a href="#">nba finals (59)</a></li>
									<li><a href="#">Amber Heard (34)</a></li>
								</ul>
								
							</div>
							<!-- /extras block -->
						
						</div>
						<!-- /Col -->
					
					</div>
					<!-- /Cont -->
					
				</div>
				<!-- /mega menu -->

			</div>
			<!-- /unibar Cont -->
				
		</nav>
		<!-- /Main Navbar -->

		<!-- Content -->
		<section class="content pad-lg bg-black-3">
			<?php if(isset($message)){ ?>
				<div class="alert alert-<?php echo $message['type']; ?> alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $message['content']; ?>
				</div>
			<?php } ?>