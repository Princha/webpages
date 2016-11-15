<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	if($_SERVER['PHP_AUTH_USER']=='princha'&&$_SERVER['PHP_AUTH_PW']=='123456'){  
	echo('
		<head>
			<title>美帝视频</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<!--标题图标-->
			<link rel="shortcut icon" href="image/icon_16.ico" />
			<!--css样式-->
			<link rel="stylesheet" type="text/css" href="CSS/Basic.css" />
			<script type="text/javascript" src="js/offlights.js"></script>
		</head>
		<frameset border="0" rows="94,*" cols="*" frameborder="NO" framespacing="0">
			<frameset border="0" rows="94" cols="185,*" frameborder="NO" framespacing="0">
				<frame name="logoFrame" src="../frames/logo.htm" scrolling="no" noresize="">
				<frame name="bannerFrame" src="../frames/banner.htm" scrolling="no" noresize="">
			</frameset>
			<frameset border="0" rows="*" cols="145,40,*" framespacing="0">
				<frame name="bottomLeftFrame" src="../userRpm/MenuRpm.htm" noresize="" scrolling="auto">
				<frame name="arcFrame" src="../frames/arc.htm" noresize="" frameborder="NO">
				<frame name="mainFrame" src="../userRpm/StatusRpm.htm" frameborder="NO">
			</frameset>
		</frameset>
		');
	}
	else
	{  
    header('WWW-Authenticate: Basic realm="Prinhca"');  
    header('HTTP/1.0 401 Unauthorized');  
    echo('
		<head>
			<title>Login Fail!</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<style type="text/css">
				body,p{font-family:Arial,"黑体";font-size:14px;line-height:180%%;text-align:left;}
				h1{text-align:center;margin-left:auto;margin-right:auto;font-family:"黑体";font-size:30px;line-height:normal;color:#0068B1}
				#errorbody{width:620px;display:block;padding-top:5em}
			</style>
		</head>
		<body>
			<div align="center">
				<div id="errorbody">
					<h1>Username or Password Error</h1>
					<h1>Please try again</h1>
				</div>
			</div>
		</body>
		'); 
	}
	//phpinfo();
?>
</body></html>