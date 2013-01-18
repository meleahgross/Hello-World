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
    
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>