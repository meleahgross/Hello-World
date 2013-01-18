<?php include 'header.php'; ?>

<div>
    <h1>Favorite Movies</h1>

    <ul id="sortable">
      <li data-role="list-divider">Forrest Gump</li>
      <li>Pitch Perfect</li>
      <li>Hunger Games</li>
      <li>Harry Potter Series</li>
      <li>Across the Universe</li>
      <li>The Notebook</li>
      <li>The Other Bolyn Girl</li>
    </ul>
  </div>


<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
  
  <script src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>
  <script>
  $(document).bind('pageinit', function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
    <!-- Refresh list to the end of sort to have a correct display -->
    $( "#sortable" ).bind( "sortstop", function(event, ui) {
      $('#sortable').listview('refresh');
    });
  });
  </script>
  
<?php include 'footer.php'; ?>