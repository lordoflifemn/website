<!DOCTYPE html>
<html lang="en">

<head>
	<title>Lord of Life | Home</title>
	<?php include("/bootstrap.html"); ?>
</head>

<body>
	<!-- header -->
	<header>
		<?php include("/header.html"); ?>
	</header>

    <div class="container">
		<div class="row">
            <div class="grid_8">
                <div class="slide_box">
					<!-- Slider -->
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
            <div class="grid_4" style="margin-top: 2px;">
                <div class="title_box" style="border-top: 1px solid #d9d9d9; padding-top: 10px;">
                    <h6 class="icon_title">
                        <a target="building_use" href="/forms/building_use_request.pdf">Building Use Request</a>
                    </h6>
                    <p>
                        Weddings, community events and more...
                    </p>
                </div>
                <div class="title_box">
                    <h6 class="icon_title">
                        <a target="online_giving" href="https://www.eservicepayments.com/cgi-bin/Vanco_ver3.vps?appver3=tYgT1GfNxRUldiimjHMvOaDUNE_2n1aV010wIx6-w5W6LyvD9eZ_F1OGVLl-PCpSums9tj3wI7okSf0MyMa8urOwf8eq3EVxVGM3f4X8K3Y=&ver=3">Online Giving</a>
                    </h6>
                    <p>
                        Simple, convenient, consistent.
                    </p>
                </div>
                <div class="title_box">
                    <h6 class="icon_title">
                        <a target="volunteer_calendar" href="/forms/volunteer_calendars/2017_10_October.pdf">Volunteer Calendar</a>
                    </h6>
                    <p>
                        Check for when you'll get to serve.
                    </p>
                </div>
                <div class="title_box">
                    <h6 class="icon_title">
                        <a target="church_calendar" href="http://www.google.com/calendar/embed?src=p6paf1v8o9kcen41ec0q6mraps%40group.calendar.google.com&ctz=America/Chicago">Church Calendar</a>
                    </h6>
                    <p>
                        What's on the calendar at Lord of Life?
                    </p>                
                </div>
            </div>
		</div>
	</div>

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
						<?php include("/welcome.html"); ?>
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
                        <?php include("/latest_news.html"); ?>
					</div>
				</div>
                <div class="grid_4">
                    <!-- Worship Schedule -->
                    <div class="box1">
				        <div class="title_box">
					        <h4>
						        Worship <span>Schedule</span>
					        </h4>
				        </div>
                        <?php include("/worship_schedule.html"); ?> 
                    </div>

                    <!-- Upcoming Events -->
					<div class="box1">
						<div class="title_box">
							<h4>
								Upcoming <span>Events</span>
							</h4>
						</div>
                        <?php include("/upcoming_events.html"); ?>
						<a href="#" class="simple_link">See all</a>
					</div>

                    <!-- Sermon Notes -->
					<div class="box1">
						<div class="title_box">
							<h4>
								Sermon <span>Notes</span>
							</h4>
						</div>
                        <?php include("/sermon_notes.html"); ?>
					</div>

                    <!-- Additional References -->
					<div class="box1">
						<div class="title_box">
							<h4>
								Additional <span>References</span>
							</h4>
						</div>
                        <?php include("/additional_references.html"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
    <footer>
        <?php include("/footer.html"); ?>
    </footer>
</body>
</html>
