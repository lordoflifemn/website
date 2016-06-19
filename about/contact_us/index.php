<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lord of Life | Contacts</title>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/bootstrap.html"); ?>

    <link rel="stylesheet" href="/css/form.css">

    <script src="/js/TMForm.js"></script>
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
					<div class="box1">
						<div class="title_box m_14">
							<h4>
								Contact <span>Form</span>
							</h4>
						</div>
						<form id="form">
							<div class="success_wrapper">
								<div class="success-message">Contact form submitted</div>
							</div>
							<label class="name">
							    <input type="text" placeholder="Name" data-constraints="@Required @JustLetters" />
							    <span class="empty-message">*This field is required.</span>
							    <span class="error-message">*This is not a valid name.</span>
							</label>
							<label class="email">
							    <input type="text" placeholder="E-mail" data-constraints="@Required @Email" />
							    <span class="empty-message">*This field is required.</span>
							    <span class="error-message">*This is not a valid email.</span>
							</label>
							<label class="phone">
							    <input type="text" placeholder="Phone" data-constraints="@Required @JustNumbers"/>
							    <span class="empty-message">*This field is required.</span>
							    <span class="error-message">*This is not a valid phone.</span>
							</label>							
							<label class="message">
							  <textarea placeholder="Message" data-constraints='@Required @Length(min=10,max=999999)'></textarea>
							  <span class="empty-message">*This field is required.</span>
							  <span class="error-message">*The message is too short.</span>
							</label>
							<div>								
							    <div class="wrapper">
                                    <div class="btns">
								        <a data-type="submit" class="btn">
									        <span>Send</span>
								        </a>									
								    </div>
								    <div class="btns mr_0">
								        <a data-type="reset" class="btn">
										    <span>Clear</span>
									    </a>									 
								    </div>								    
							    </div>
						    </div>
					    </form>
					</div>
				</div>
                <div class="grid_3">
                    <!-- About Menu -->
                    <div class="box1">
                        <?php include($_SERVER["DOCUMENT_ROOT"] . "/about/menu.html"); ?>
                    </div>
					<div class="box2">
						<div class="title_box">
							<h4>
								Online Donations. <span>Real Help to People!</span>
							</h4>
						</div>
						<h6 class="italic m_01">
							<a href="#">
								Ctetur adipisicing elit, sed do eiusmod tempor incididunt
							</a>
						</h6>
						<p class="m_0">
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
						</p>
					</div>
					<div class="box1">
						<div class="title_box">
							<h4>
								What <span> We Believe In</span>
							</h4>
						</div>
						<div class="title_box">						
							<h6 class="icon_title">
								<a href="#">Sit amet conse ctetur adipisicing</a>
							</h6>
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididu
							</p>
						</div>
						<div class="title_box">
							<h6 class="icon_title">
								<a href="#">Officia deserunt mollit </a>
							</h6>
							<p>
								Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
							</p>
						</div>
						<div class="title_box">
							<h6 class="icon_title">
								<a href="#">Amet conse ctetur adipisicing</a>
							</h6>
							<p>
								Conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
							</p>
						</div>
						<h6 class="icon_title">
							<a href="#">Anim id est laborum</a>
						</h6>
						<p class="m_0">
							Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
						</p>
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
