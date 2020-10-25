<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $page_title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $page_description ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="chinco-page/css/page-style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<?php require_once('chinco-page/php/show-listings.php'); ?>
	<?php 
	if($map_view == 'yes')
	{
		echo "<script src='chinco-page/js/chincoMap.js'></script>\n";
		echo "<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCoOAGy-jQCQ1tbnRv8A1qJdAnsKxibrbA'></script>\n";
		echo "<script>\n";
		echo "var listingType = '$listing_type';\n";
		echo "google.maps.event.addDomListener(window, 'load', chincoMap)\n";
		echo "</script>\n";
	} ?>
	<?php echo "$header_addendum"; ?>
</head>
<body>

<!-- Top Banners -->
<div id="top-div" class="container-fluid">
	<table class="top-banners">
		<tr>
			<td>
				<a href="http://www.chincoteagueoceaneast.com/" target="_blank">
				<img src="chinco-page/images/banners/ocean_east_banner.jpg" width="225" height="120" alt="ocean east banner">
				</a>
			</td>
			<td>
				<a href="https://www.marriott.com/hotels/travel/sbyci-fairfield-inn-and-suites-chincoteague-island/" target="_blank">
				<img src="chinco-page/images/banners/fairfield-inn-top-banner.png" width="225" height="120" alt="fairfield inn banner">
				</a>
			</td>
			<td>
				<a href="http://www.hamptoninnchincoteague.com/" target="_blank">
				<img src="chinco-page/images/banners/hampton-inn-banner.png" width="225" height="120" alt="hampton inn banner">
				</a>
			</td>
			<td>
				<a href="http://www.chincoteaguecomfortsuites.com/" target="_blank">
				<img src="chinco-page/images/banners/comfort-suites-banner1.jpg" width="225" height="120" alt="comfort suites banner">
				</a>
			</td>
		</tr>
	</table>
</div>

<!-- Main Navigation Bar -->
<div class="container-fluid" id="navbar-container">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>			
			</button>
			<div class="social">
				<a href="https://www.facebook.com/chincoteagueisland/" target="_blank"><i class="fa fa-facebook" id="social-icon"></i></a>
				<a href="https://www.instagram.com/chincoteague_dot_com/" target="_blank"><i class="fa fa-instagram" id="social-icon"></i></a>
			</div>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">WHERE<br>TO STAY</a>
				<ul class="dropdown-menu">
					<li><a href="accommodations.html">Accommodations</a></li>
					<li><a href="hotels.html">Hotels</a></li>
					<li><a href="b-and-bs.html">Bed &amp; Breakfasts</a></li>
					<li><a href="vacation-rental-homes.html">Vacation Rental Homes</a></li>
					<li><a href="vacation-rental-companies.html">Vacation Rental Companies</a></li>
					<li><a href="campgrounds.html">Campgrounds</a></li>
					<li><a href="long-term-rentals.html">Long Term Rentals</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">WHERE<br>TO EAT</a>
				<ul class="dropdown-menu">
					<li><a href="dining.html">Dining</a>
					<li><a href="restaurants.html">Restaurants</a></li>
					<li><a href="carryout.html">Carryout</a></li>
					<li><a href="ice-cream-parlors.html">Ice Cream Parlors</a></li>	
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">THINGS<br>TO DO</a>
				<ul class="dropdown-menu">
					<li><a href="activities.html">Chincoteague Island</a></li>
					<li><a href="assateague-island.html">Assateague Island</a></li>					
				</ul>
			</li>
			<li><a href="shops.html">WHERE<br>TO SHOP</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">PONY<br>SWIM</a>
				<ul class="dropdown-menu">
					<li><a href="pony_swim_guide.html">Pony Swim Guide</a></li>
					<li><a href="pony_swim_shuttle.html">Pony Swim Shuttle</a></li>
					<li><a href="pony_auction.html">Pony Auction</a></li>
					<li><a href="https://www.chincoteague.com/blog/?p=446">Pony Swim Pics &amp; Video</a></li>
					<li><a href="ponies.html">Chincoteague Ponies</a></li>					
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">REAL<br>ESTATE</a>
				<ul class="dropdown-menu">
					<li><a href="real-estate-companies.html">Real Estate Companies</a></li>
					<li><a href="real-estate-agents.html">Real Estate Agents</a></li>					
				</ul>				
			</li>
			<li><a href="services.html">AREA<br>SERVICES</a></li>
		  </ul>
		</div>
	</nav>
	<hr style="padding:0;margin:0;">
	<table class="menu">
		<tr>
		    <td class="social-small">
				<a href="https://www.facebook.com/chincoteagueisland/" target="_blank"><i class="fa fa-facebook" style="color:white;padding-right:5px;font-size: 16px;"></i></a>
				<a href="https://www.instagram.com/chincoteague_dot_com/" target="_blank"><i class="fa fa-instagram" style="color:white;padding-right:5px;font-size: 16px;"></i></a>
			</td>
			<td  class="social-small" style="color: white;">|</td>
			<td><a href="index.html">HOME</a></td>
			<td style="color: white;">|</td>
			<td><a href="events.html">EVENTS</a></td>
			<td style="color: white;">|</td>
			<td><a href="blog/">BLOG</a></td>
			<td style="color: white;">|</td>
			<td><a href="webcams.html">WEBCAMS</a></td>
		</tr>
	</table>			
</div>

<?php 
if($index_page==False) {
	echo "<!-- Top Pic -->\n";
	echo "	<div class='top-pic'>\n";
	echo "		<img src='chinco-page/images/logos/chinco-logo-top.png' alt='chincoteague logo'>\n";
	echo "	</div>\n";
} ?>
