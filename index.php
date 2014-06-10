<!DOCTYPE html>
<html> <!--manifest="cache.appcache"-->
<head>
  <title>Subnetting Calculator</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv='cleartype' content='on'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Subnetting Calculator">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="robots" content="index, follow">
    <meta name="bitly-verification" content="7c235b444737"/>
    <meta name="author" content="Eric Lagergren">
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
    <!--<link href="/assets/css/style.css" rel="stylesheet">
    <script src="/assets/js/google-analytics.js"></script>-->
    <!--<script type="text/javascript">
    if("standalone"in window.navigator&&window.navigator.standalone){var noddy,remotes=false;document.addEventListener("click",function(event){noddy=event.target;while(noddy.nodeName!=="A"&&noddy.nodeName!=="HTML")noddy=noddy.parentNode;if("href"in noddy&&noddy.href.indexOf("http")!==-1&&(noddy.href.indexOf(document.location.host)!==-1||remotes)){event.preventDefault();document.location.href=noddy.href}},false)};
    </script>-->
</head>
<body>
    <?php include '/assets/scripts/calculator.php';?>
    <script>
        var obj = <?php echo json_encode($php_variable); ?>;
    </script>
	<h2>Jay Inslee Gas Prices Calculator</h2>
	<form name="form" method="post" action="/assets/scripts/calculator.php">
		<input class="clearfix autocomplete" type="text" id="year" name="year" placeholder="2014">
		<input class="clearfix autocomplete" type="text" id="make" name="make" placeholder="Toyota">
		<input class="clearfix autocomplete" type="text" id="model" name="model" placeholder="Camry">
		<!--<input class="clearfix autocomplete" type="text" name="city" placeholder="Puyallup">-->
		<input class="clearfix autocomplete" type="text" id="miles" name="miles" placeholder="1000">
		<input class="submit" type="submit" name="submit" value="submit">
	</form>

	<div id="foo"></div>



  

</body>

</html>
