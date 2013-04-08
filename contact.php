<?php
	session_start() ;
	include("php/my.php");
	include("php/utility.php");
	$db		= new mydb();
	$util	= new utility();
?>
<!doctype html>
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>TAPROD - Contact</title>
	<meta name="description" content="">
	<meta name="author" content="Jyyoi">

	<link rel="stylesheet" href="css/style.css">

	<script src="js/libs/modernizr-2.5.3.min.js"></script>
    
</head>
<body>
<?php include('inc/header.php'); ?>

<div class="container" role="main">
	<div class="contact">
		<h1 class="page-heading left">Contact</h1>
		<div class="content">
			<h1 class="heading-line">Address</h1>
			<p>42/3  Soi Ngamduphli , Rama4 rd., Thoongmahamek, Sathorn, Bangkok 10120</p>
			<p><strong>Tel:</strong> +66 2286 7433</p>
			<p><strong>Fax:</strong> +66 2286 7434</p>
			<p style="margin-bottom:20px"><strong>Email:</strong> <a href="mailto:info@taprod.net" title="info@taprod.net">info@taprod.net</a></p>
			<h1 class="heading-line">Team Members</h1>
			<table class="team-members" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th>Serge Thimbre</th>
					<td>MD / Executive Producer</td>
					<td><a href="mailto:st@taprod.net" title="st@taprod.net">st@taprod.net</a></td>
					<td>+668 4852 0868</td>
				</tr>
				<tr>
					<th>Tom Tongtasee</th>
					<td>Manager / Line Producer</td>
					<td><a href="mailto:tom@taprod.net" title="tom@taprod.net">tom@taprod.net</a></td>
					<td>+668 4174 0612</td>
				</tr>
				<tr>
					<th>Achana Klangprapan</th>
					<td>Account Manager</td>
					<td><a href="mailto:account@taprod.net" title="account@taprod.net">account@taprod.net</a></td>
					<td>+668 4984 9119</td>
				</tr>
				<tr>
					<th>Anne Guyon</th>
					<td>Producer</td>
					<td><a href="mailto:anne@taprod.net" title="anne@taprod.net">anne@taprod.net</a></td>
					<td>+668 1984 0944</td>
				</tr>
				<tr>
					<th>Gob Tangtham</th>
					<td>Producer </td>
					<td><a href="mailto:gob@taprod.net" title="gob@taprod.net">gob@taprod.net</a></td>
					<td>+668 1821 3389</td>
				</tr>
				<tr>
					<th>Moodang Osborn</th>
					<td>Producer</td>
					<td><a href="mailto:moodang@taprod.net" title="moodang@taprod.net">moodang@taprod.net</a></td>
					<td>+668 9204 0788</td>
				</tr>
				<tr>
					<th>Louis Ditapichai</th>
					<td>Junior Producer</td>
					<td><a href="mailto:louis@taprod.net" title="louis@taprod.net">louis@taprod.net</a></td>
					<td>+668 4463 2917</td>
				</tr>
				<tr>
					<th>Chloe Visaiket</th>
					<td>Production Manager</td>
					<td><a href="mailto:chloe@taprod.net" title="chloe@taprod.net">chloe@taprod.net</a></td>
					<td>+668 9225 6333</td>
				</tr>
				<tr>
					<th>Ivee Suphawan</th>
					<td>Production Assistant</td>
					<td><a href="mailto:ivee@taprod.net" title="ivee@taprod.net">ivee@taprod.net</a></td>
					<td>+668 1566 1221</td>
				</tr>
				<tr>
					<th>Nes Tabellion</th>
					<td>Client Service </td>
					<td><a href="mailto:nes@taprod.net" title="nes@taprod.net">nes@taprod.net</a></td>
					<td>+668 1298 9155</td>
				</tr>
			</table>
			<h1 class="heading-line clear">Leave us a message</h1>
			<form class="contact-form" action="" method="post" name="contact_form" id="contact_form">
				<div class="left-col">
					<label for="name">name</label>
					<input id="name" name="name" type="text" class="required">
					<label for="telephone">telephone</label>
					<input id="telephone" name="telephone" type="text" class="required">
					<label for="email">email</label>
					<input id="email" name="email" type="email"  class="required email">
				</div><!--end left-col-->
				<div class="right-col">
					<label for="message">message</label>
					<textarea id="message" name="message" class="required"></textarea>
				</div><!--end right-col-->
				<input id="send" name="Send" type="submit" value="Send a message">
			</form>
		</div><!--end content-->
	</div><!--end news-->
</div><!--end container-->
<footer>
	<p>&copy; Copyright 2012 Taprod. All Rights Reserved.</p>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<!-- scripts concatenated and minified via ant build script-->
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<!--[if (gte IE 7)&(lte IE 8)]>
  <script type="text/javascript" src="js/libs/selectivizr-min.js"></script>
<![endif]--> 
<script>
    $.backstretch("attach/background/7.jpg");
</script>
<!-- end scripts-->

<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
	<script src="js/jquery.validate.js" type="text/javascript"></script>
	<script type="text/javascript">
    $(document).ready(function() {
        $("#contact_form").validate();
    });
    </script>

</body>
</html>
