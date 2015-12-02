<!DOCTYPE html>
<html lang="en">

<head>
	<title>Lord of Life | Home</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
	
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/camera.css">
	
	<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	
	<script src="/js/jquery.js"></script>
	<script src="/js/jquery-migrate-1.1.1.js"></script>
	<script src="/js/jquery.easing.1.3.js"></script>
	<script src="/js/superfish.js"></script>
	<script src="/js/jquery.mobilemenu.js"></script>
	<script src="/js/camera.js"></script>
	<script src="/js/jquery.ui.totop.js"></script>
	<script src="/js/script.js"></script>

	<script>
		$(document).ready(function(){
			$('#slider').camera({
				height: '37.71%',
				loader: true,
				minHeight: '200px',
				navigation: false,
				navigationHover: false,
				pagination:true,
				playPause: false,
				thumbnails: false,
				fx: 'simpleFade'
			});
		});
	</script>

	<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
	<!--<![endif]-->

	<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
			</a>
		</div>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
	<![endif]-->
    
    <script> 
        $(document).ready(function(){
          $("#includedFooter").load("/footer.html");
          $("#includedHeader").load("/header.html");

          $("#includedAdditionalReferences").load("/additional_references.html");
          $("#includedLatestNews").load("/latest_news.html");
          $("#includedSermonNotes").load("/sermon_notes.html");
          $("#includedUpcomingEvents").load("/upcoming_events.html");
          $("#includedWelcome").load("/welcome.html");
          $("#includedWorshipSchedule").load("/worship_schedule.html");
        });
    </script> 
</head>

<body>
	<!-- header -->
	<header>
		<div id="includedHeader"></div>

		<div class="container">
			<div class="row">
				<div class="grid_12">
					<!-- slider -->
					<div class="slide_box">
	                    <div class="camera_wrap" id="slider">
		                    <div data-src="/images/slide1.jpg" data-thumb="/images/slide1.jpg">
			                    <div class="camera_caption">
				                    <h4>A sacred space </h4>
				                    <h3>for everyone </h3>
			                    </div>
		                    </div>
		                    <div data-src="/images/slide2.jpg" data-thumb="/images/slide2.jpg">
			                    <div class="camera_caption">
				                    <h4>Striving to help you </h4>
				                    <h3>connect to Jesus </h3>
			                    </div>
		                    </div>
		                    <div data-src="/images/slide3.jpg" data-thumb="/images/slide3.jpg">
			                    <div class="camera_caption">
				                    <h4>Reaching the world </h4>
				                    <h3>for Christ</h3>
			                    </div>
		                    </div>
	                    </div>
                    </div>
				</div>
			</div>
		</div>
	</header>

	<!-- content -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="grid_8">
                    <!-- Welcome -->
					<div class="box1">
						<div class="title_box">
							<h4>
								Welcome<span> to Our Church</span>
							</h4>
						</div>						
						<div id="includedWelcome"></div>
						<a href="/about" class="btn">
							<span>
								Read more
							</span>
						</a>
					</div>

                    <!-- Latest News -->
                    <div class="box1">
                        <div class="title_box">
							<h4 style="margin-bottom: 10px;">
								Latest<span> News</span>
							</h4>
                        </div>
                        <div id="includedLatestNews"></div>
                        <a href="/about/latest_news" class="btn">
							<span>
								Read more
							</span>
						</a>
					</div>
				</div>
				
                <div class="grid_4">
                    <!-- Worship Schedule -->
					<div class="box1">
						<div class="title_box">
							<h4>
								Worship<span> Schedule</span>
							</h4>
						</div>
                        <div id="includedWorshipSchedule"></div>	
					</div>

                    <!-- Quick Links -->
					<div class="box1">
						<div class="title_box">
							<h4>
								Quick<span> Links</span>
							</h4>
						</div>
                        <h6 class="icon_title">
                            <a target="building_use" href="/forms/building_use_request.pdf">Building Use Request</a>
                        </h6>
                        <h6 class="icon_title">
                            <a target="online_giving" href="https://www.eservicepayments.com/cgi-bin/Vanco_ver3.vps?appver3=tYgT1GfNxRUldiimjHMvOaDUNE_2n1aV010wIx6-w5W6LyvD9eZ_F1OGVLl-PCpSums9tj3wI7okSf0MyMa8urOwf8eq3EVxVGM3f4X8K3Y=&ver=3">Online Giving</a>
                        </h6>
                        <h6 class="icon_title">
                            <a target="volunteer_calendar" href="/forms/volunteer_calendars/2015_11_november.pdf">Volunteer Calendar</a>
                        </h6>
                        <h6 class="icon_title">
                            <a target="church_calendar" href="http://www.google.com/calendar/embed?src=p6paf1v8o9kcen41ec0q6mraps%40group.calendar.google.com&ctz=America/Chicago">Church Calendar</a>
                        </h6>
					</div>

                    <!-- Upcoming Events -->
					<div class="box1">
						<div class="title_box">
							<h4>
								Upcoming<span> Events</span>
							</h4>
						</div>		
						<div id="includedUpcomingEvents"></div>						
						<a href="#" class="simple_link">See all</a>
					</div>

                    <!-- Sermon Notes -->
					<div class="box1">
						<div class="title_box">
							<h4>
								Sermon<span> Notes</span>
							</h4>
						</div>
                        <div id="includedSermonNotes"></div>	
					</div>

                    <!-- Additional References -->
					<div class="box1">
						<div class="title_box">
							<h4>
								Additional<span> References</span>
							</h4>
						</div>
                        <div id="includedAdditionalReferences"></div>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
    <footer>
        <div id="includedFooter"></div>
    </footer>
</body>
</html>