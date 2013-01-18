<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Image Gallery</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
 <script type="text/javascript">
 $(function() {
$(".image").click(function() {
var image = $(this).attr("rel");
$('#image').hide();
$('#image').fadeIn('slow');
$('#image').html('<img src="' + image + '"/>');
return false;
	});
});
</script>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include 'header.php'; ?>
<div id="container">
<div id="image"><img src="images/1.jpg" border="0"/></div>
<a href="#" rel="images/1.jpg" class="image"><img src="images/1t.jpg" class="thumb" border="0"/></a>
<a href="#" rel="images/2.jpg" class="image"><img src="images/2t.jpg" class="thumb" border="0"/></a>
<a href="#" rel="images/3.jpg" class="image"><img src="images/3t.jpg" class="thumb" border="0"/></a>
<a href="#" rel="images/4.jpg" class="image"><img src="images/4t.jpg" class="thumb" border="0"/></a>
<a href="#" rel="images/5.jpg" class="image"><img src="images/5t.jpg" class="thumb" border="0"/></a>


<div class="clear"></div>
    </div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7025232-1");
pageTracker._trackPageview();
} catch(err) {}</script>
    
  </body>
</html>