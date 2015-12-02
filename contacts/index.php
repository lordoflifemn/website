<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lord of Life | Contacts</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
	
	<link rel="stylesheet" href="/css/form.css">
	
	<link rel="stylesheet" href="/css/style.css">
	
	<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	
	<script src="/js/jquery.js"></script>
	<script src="/js/jquery-migrate-1.1.1.js"></script>
	<script src="/js/jquery.easing.1.3.js"></script>
	<script src="/js/superfish.js"></script>
	<script src="/js/jquery.mobilemenu.js"></script>

	<script src="/js/jquery.ui.totop.js"></script>
	
	<script src="/js/TMForm.js"></script>
	
	<script src="/js/script.js"></script>
	
	<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="/js/jquery.mobile.customized.min.js"></script>
	<!--<![endif]-->

	<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
			</a>
		</div>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="/js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
	<![endif]-->

    <script> 
        $(function(){
          $("#includedFooter").load("/footer.html");
          $("#includedHeader").load("/header.html");
        });
    </script>
</head>

<body>
	<!-- header -->
	<header>
		<div id="includedHeader"></div>
	</header>

	<!-- content -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="grid_8">
					<div class="box1">
						<div class="title_box m_14">
							<h4>
								Contact 
								<span> Information</span>
							</h4>
						</div>
						<div class="wrapper m_80">
							<div class="map">
								<figure class="map_box img_thumbnail">
									  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11341.280511332136!2d-93.18386358491965!3d44.71307769126755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f636a1d8c0975f%3A0x99fb1615e494fc17!2sLord+of+Life+Lutheran+Church!5e0!3m2!1sen!2sus!4v1442801767935" style="border:0"></iframe>
								</figure>
							</div>
							
							<div class="address_box">
								<h6 class="italic">Lord of Life Lutheran Church</h6>
								<address>
									<dl>
										<dt>
											16200 Dodd Lane, Lakeville MN
										</dt>
										<dd><span>Telephone:</span> 952-953-4484</dd>
										<dd class="mail">E-mail: <a href="#">info@lordoflifemn.org</a></dd>
									</dl>
								</address>
							</div>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="box1">
						<div class="title_box m_14">
							<h4>
								Contact 
								<span> Form</span>
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
							  <textarea placeholder="Message" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
							  
							  <span class="empty-message">*This field is required.</span>
							  <span class="error-message">*The message is too short.</span>
							  </label>
							  <div>								
								<div class="wrapper">
								  <div class="btns">
									 <a data-type="reset" class="btn resrt">
										<span>Clear</span>
									 </a>									 
								  </div>
								  <div class="btns mr_0">
									<a data-type="submit" class="btn">
										<span>Send</span>
									</a>									
								  </div>
								</div>
							</div>
						</form>
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
