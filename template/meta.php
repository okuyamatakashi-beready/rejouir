
<!DOCTYPE html>
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		
		
		<title>REJOUIR</title>


		<!-- CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/scss/main.css" rel="stylesheet" type="text/css">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" id="favicon">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">

		<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" rel="stylesheet">
		<script	src="https://cdn.jsdelivr.net/npm/viewport-extra@2.0.1/dist/iife/viewport-extra.min.js"	defer></script>

		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var ua = navigator.userAgent
				var isSmartPhone = ua.indexOf('iPhone') > -1 ||
					(ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)
				var isTablet = !isSmartPhone && (
					ua.indexOf('iPad') > -1 ||
					(ua.indexOf('Macintosh') > -1 && 'ontouchend' in document) ||
					ua.indexOf('Android') > -1
				)
				if (isTablet) ViewportExtra.setContent({ minWidth: 1200 })
			})
		</script>

		
		

		
		<?php wp_head(); ?>

		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-JD6PPSGQ0X"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-JD6PPSGQ0X');
		</script>
	</head>