<?php 
require_once(CLASSES_PATH.'AJAX.class.php');
$AJAX = new AJAX();
$_SESSION['log'] = time();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="verify-v1" content="suNKze0EGJgDsLyUqOIMWMNJkI7y4nYct8KtL+Uj+5w=" />
<meta name="verifyownership" content="f5c12b9a0329aecd1e94cd1f01af8613" />
<meta name="google-site-verification" content="67vM05JIAQaDeTD7KqUHhOoxw3EYuK2lsQziZ72y-jU" />
	<title>Signature Generator and Email Icon Generator</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="description" content="Free signature and email icon generator" />
	<meta name="keywords" content="php, sig, signature, sigs, free, FREE, Sigs, Sig, Signatures, Signature, needasig, Needasig, NeedASig, Free, generator, maker, generate, email, e-mail, userbar, Userbar, bars, icon, icons" />
	<link rel="stylesheet" type="text/css" href="style/main.css" />
	
	
	<script type="text/javascript" src="style/main.js"></script>
	<script type="text/javascript" src="style/aff.js"></script>
	<script type="text/javascript" src="style/jscolor/jscolor.js"></script>
	
		
</head>

<body onload="pre_forms();">

<div id="header"><a href='http://needasig.com/' id="logo"><img src="style/logo.png" alt="NeedASig.com"/></a></div>



<div id="holder">
	<div id="holder_left">
		<div id="news">
			<div>Signature Generator</div>
			<!--<div><b>&raquo; </b><a href="http://needasig.com/" onclick="ex(this); return true">Get an Email Icon!</a></div>-->
			
		</div>
		<div id="stats">
			<div><b>&raquo; Users Online:</b> <?php echo $this -> total_online(); ?></div>
			<div><b>&raquo; Files Hosted:</b> <?php echo $this -> total_hosted(); ?></div>
			<div><b>&raquo; Created Today:</b> <?php echo $this -> total_today(); ?></div>
			<!--<div id="aff_list" style="border:none;margin-left:35px;height:34px;"></div>-->
			<sub style="display:block;margin-top:-5px;margin-left:90px;"><a href="javascript:view_affs();">View All</a></sub>
			<script type="text/javascript">setInterval("ran_aff()", 10000); ran_aff();</script>
		</div>
	</div>

	<div id="holder_right">
		<div id="content">
			<div id="menu">
				<a href="javascript:tabs('1');"><img src="style/home.png" alt="[Signature Generator]"/></a>
				<a href="javascript:tabs('2');"><img src="style/email.png" alt="[Email Icon]"/></a>
				<a href="javascript:tabs('3');"><img src="style/custom.png" alt="[Custom Signature]"/></a>
				<a href="javascript:tabs('4');"><img src="style/contactus.png" alt="[Contact Us]"/></a>
				<a href="http://needasig.com/" onclick="ex(this); return true"><img src="style/community.png" alt="[Underground]"/></a>
			</div>

			<div id="info-1"><?php include_once(VIEW_PATH.'sig.view.php'); ?></div>
			<div id="info-2" style="display:none"><?php include_once(VIEW_PATH.'email.view.php'); ?></div>
			<div id="info-3" style="display:none"><?php include_once(VIEW_PATH.'custom.view.php'); ?></div>
			<div id="info-4" style="display:none"><?php include_once(VIEW_PATH.'contact.view.php'); ?></div>
		</div>
	</div>
</div>

<div id="copy">
	<span class="right">NeedASig.com<sup>&copy;</sup> 2011 <br/> <sub><a href="http://validator.w3.org/check?uri=referer" onclick="ex(this); return true">xHTML</a> - <a href="http://jigsaw.w3.org/css-validator/check/referer" onclick="ex(this); return true">CSS</a></sub></span>
	<span class="left">
		<a href="http://www.stumbleupon.com/submit?url=http://www.needasig.com&amp;title=Need A Sig" onclick="ex(this); return true"><img src="style/su.png" alt="StumbleUpon"/></a>
		<a href="http://del.icio.us/post?url=http://www.needasig.com&amp;title=Need A Sig" onclick="ex(this); return true"><img src="style/deli.png" alt="Delicious"/></a>
		<a href="http://twitter.com/home/?status=RT+%40tweetmeme++http%3A%2F%2Fbit.ly%2FCNHMM" onclick="ex(this); return true"><img src="style/twitter.png" alt="Twitter"/></a>
		<a href="http://m.digg.com/tech_news/NeedASig" onclick="ex(this); return true"><img src="style/digg.png" alt="Digg"/></a>
		<a href="http://www.facebook.com/share.php?u=http://www.needasig.com&amp;t=Need A Sig" onclick="ex(this); return true"><img src="style/facebook.png" alt="Facebook"/></a>
	</span>
</div>


<!-- To Update: http://needasig.com/mod/Update //-->

<div id="ads2">
	
</div>


</body>
</html>