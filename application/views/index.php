<html>
	<head>

		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>

		<!-- Attach JavaScript files -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
		<script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>

		<title><?php echo $title; ?></title>
	</head>

	<body>

		<header>
			
			<?php $this -> load -> view('navigation'); ?>
		</header>
		<section class="content"></section>
		<footer>
			<section class="social">
				<img src="<?php echo base_url(); ?>images/social/facebook.png"  />
				<img src="<?php echo base_url(); ?>images/social/twitter.png"/>
				<img src="<?php echo base_url(); ?>images/social/google.png" />
				<img src="<?php echo base_url(); ?>images/social/linkedin.png"/>
			</section>
		</footer>
	
	</body>
</html>