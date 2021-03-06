<!DOCTYPE html>

<html lang="en">
<head>
    <title>Lord of Life | About</title>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/bootstrap.html"); ?>
</head>
<body>
    <!-- header -->
	<header>
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/header.html"); ?>
	</header>

    <!-- content -->
	<div id="content">
		<div class="container">
			<div class="row">
                <div class="grid_9">
                    <!-- Meet Our Staff -->
					<div class="box1">
						<div class="title_box">
							<h4>
								Meet <span>Our Staff</span>
							</h4>
						</div>
                        <h6 class="italic">
	                        <a href="/meet_our_staff/administrative_assistant">Administrative Assistant</a>
                        </h6>
                        <h6 class="italic">
	                        <a href="/meet_our_staff/music_directory">Music Director</a>
                        </h6>
                        <h6 class="italic">
	                        <a href="/meet_our_staff/our_pastor">Our Pastor</a>
                        </h6>
					</div>
				</div>
                <div class="grid_3">
                    <!-- About Menu -->
                    <div class="box1">
                        <?php include($_SERVER["DOCUMENT_ROOT"] . "/about/menu.html"); ?>
                    </div>
				</div>
			</div>
		</div>
	</div>

    <!-- footer -->
	<footer>
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/footer.html"); ?>
	</footer>
</body>
</html>
