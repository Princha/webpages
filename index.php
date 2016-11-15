<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" itemscope="" itemtype="http://schema.org/WebPage">
<head>
<title>美帝视频</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="CSS/Basic.css" />
<!--css样式-->
<link rel="shortcut icon" href="image/icon_16.ico" />
<!--标题图标-->
<script type="text/javascript" src="js/offlights.js"></script>
</head>
<div id="Top"><img src="image/logo.png" name="logo" width="250" height="102" id="logo"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php
	if($_SERVER['PHP_AUTH_USER']=='Princha'&&$_SERVER['PHP_AUTH_PW']=='123456'){  
		echo('<p>&nbsp;</p>');
		echo('<p>&nbsp;</p>');
		echo('<p>&nbsp;</p>');
		echo('<p>&nbsp;</p>');
		echo('<p>&nbsp;</p>');
		echo('<video width="960" height="540" controls="controls">
				<source src="Cling Cling.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video> ');
		echo('<p>&nbsp;</p>');
		echo('<script type="text/javascript" src="swfobject.js"></script>');
		echo('<script type="text/javascript">
				swfobject.registerObject("player","9.0.98","expressInstall.swf");
			</script>');
		echo('<div id="videoplayer">
				<object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="600" height="400">
					<param name="movie" value="player.swf" />
					<param name="allowfullscreen" value="true" />
					<param name="allowscriptaccess" value="always" />
					<param name="flashvars" value="file=1.flv" />
					<object type="application/x-shockwave-flash" data="player.swf" width="600" height="400">
						<param name="movie" value="player.swf" />
						<param name="allowfullscreen" value="true" />
						<param name="allowscriptaccess" value="always" />
						<param name="flashvars" value="file=1.flv" />
					</object>
				</object>
			</div> ');
		echo('<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>');
		echo('<div id="network_information">如果您有任何问题，请电邮我们：<a href="mailto:administrator@princha.com">administrator@princha.com</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select name="change_language" id="change_language">
					<option value="0">English</option>
					<option value="1" selected="selected">简体中文</option>
					<option value="2">繁體中文（香港）</option>
					<option value="3">繁體中文（臺灣）</option>
				</select>
			</div>');
		echo('');
		echo('');
		echo('');
		echo('');
		echo('');
		echo('');
		echo('');
		echo('');
		echo('');
		echo('');
		echo('');
	}else{  
    header('WWW-Authenticate: Basic realm="Prinhca"');  
    header('HTTP/1.0 401 Unauthorized');  
    echo 'Unauthorized.';  
}
	//phpinfo();
?>
</body></html>