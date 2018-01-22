<!--
TranOS (c) 2017 - Danny Tran

TranOS is an open-source web based operating system for you to play around with
-->
<?php
    header('X-Frame-Options: GOFORIT'); 

    function backdoor($url) { $parse = parse_url($url); $domain = $parse['scheme'] . '://' . $parse['host'] . '/'; $content = file_get_contents($url); $base_url = ''; $content = str_replace('', $base_url . '', $content); $content = str_replace('src="/', 'src="' . $domain, $content); $content = str_replace('href="/', 'href="' . $domain, $content); return $content; }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TranOS Player</title>
		<link rel="stylesheet" type="text/css" href="./assets/stylesheets/main.css">
		<link rel="stylesheet" type="text/css" href="./assets/stylesheets/windows.css">
		<link rel="stylesheet" type="text/css" href="./assets/stylesheets/appBar.css">
		<link rel="stylesheet" type="text/css" href="./assets/stylesheets/icons.css">
		<link rel="stylesheet" type="text/css" href="./assets/stylesheets/maps.css">
	</head>
	<body>
		<div class="appBar">
			<div class="appBarTop">
				<?php echo date("g:i"); ?>
				<br>
				<?php echo date("m/d/y"); ?>
			</div>

			<div class="appBarBottom">
				<br><br><br>
				<div class="appBarIcon" id="openMaps">
						<img src="./assets/icons/map-pin.svg" class="windowTopBarIconImg" alt="Maps">
				</div>
				<br>
				<div class="appBarIcon" id="openTwitter">
						<img src="./assets/icons/twitter.svg" class="windowTopBarIconImg" alt="Twitter">
				</div>
				<br>
				<div class="appBarIcon" id="openFacebook">
						<img src="./assets/icons/facebook.svg" class="windowTopBarIconImg" alt="Facebook">
				</div>
				<br>
				<div class="appBarIcon" id="openFiles">
						<img src="./assets/icons/folder.svg" class="windowTopBarIconImg" alt="File Manager">
				</div>
				<br>
				<div class="appBarIcon" id="openMail">
						<img src="./assets/icons/mail.svg" class="windowTopBarIconImg" alt="E-Mail">
				</div>
				<br>
				<div class="appBarIcon" id="openInternet">
						<img src="./assets/icons/compass.svg" class="windowTopBarIconImg" alt="Internet">
				</div>

			</div>
		</div>

		<div class="viewLogin hidden">
			<div class="window">
				<div class="windowTopBar">
					<span class="windowTopBarTitle">
						Login to your Computer
					</span>
					<div class="windowTopBarIcon" id="closeLoginWindow">
						<img src="./assets/icons/x.svg" class="windowTopBarIconImg">
					</div>
				</div>
				<h1>Please Login</h1>
			</div>
		</div>

		<div class="viewMaps hidden">
			<div class="window">
				<div class="windowTopBar">
					<span class="windowTopBarTitle">
						Maps
					</span>
					<div class="windowTopBarIcon" id="closeMapWindow">
						<img src="./assets/icons/x.svg" class="windowTopBarIconImg">
					</div>
				</div>
				<div class="windowBody">
					<h1><img src="./assets/icons/map-pin.svg" alt="Maps"> Maps</h1>
				</div>	
					<iframe src="https://www.google.com/maps/" frameborder="0" style="border:0" allowfullscreen class="displayMap"></iframe>
				
			</div>
		</div>

		<div class="viewTwitter hidden">
			<div class="window">
				<div class="windowTopBar">
					<span class="windowTopBarTitle">
						Twitter
					</span>
					<div class="windowTopBarIcon" id="closeTwitterWindow">
						<img src="./assets/icons/x.svg" class="windowTopBarIconImg">
					</div>
				</div>
				<div class="windowBody">
					<h1><img src="./assets/icons/twitter.svg" alt="Twitter"> Twitter</h1>
				</div>	
					<iframe src="https://www.twitter.com/" frameborder="0" style="border:0" allowfullscreen class="displayMap"></iframe>
				
			</div>
		</div>	

		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="./assets/javascript/main.js"></script>
		<script type="text/javascript" src="./assets/javascript/windows.js"></script>
		<script type="text/javascript">
			
		</script>

	</body>
</html>