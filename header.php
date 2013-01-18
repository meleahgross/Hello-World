<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Meleah Gross</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="style.css" rel="stylesheet" type="text/css" />


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

</head>

<body>
<div id="navigation">
<ul>
<li><a href="list.php">Favorite Movies</a></li>
<li><a href="image-gallery.php">Photography</a></li>
</ul>
</div>
