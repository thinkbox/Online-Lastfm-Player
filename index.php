<?php include 'radio/setup.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Online Last.fm Player - Version 3</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	
	<?php if ( !isset($lastfmapi_auth) ) : ?>
		<div class="panel" id="login">
			<p>To login to this service you need to login at lastfm and allow this service to <a href="http://www.last.fm/api/auth/?api_key=<?php echo $config['api_key']; ?>">use your account</a>.</p>
		</div>
	<?php else: ?>
		<?php if ( $lastfmapi_auth->subscriber == 1 ) : ?>
			Welcome <?php echo $lastfmapi_auth->username; ?>
		<?php else: ?>
			Woops! You don't seem to be a <a href="">subscriber</a>. Last.fm only allows us to stream readio to paying subscribers. It's only £3 a month. Why not subscribe?
		<?php endif; ?>
	<?php endif; ?>
	
</body>
</html>