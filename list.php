<?php include 'header.php'; ?>

<div id="container">
    <h1>Favorite Movies</h1>

    <ul id="sortable">
      <li class="btn btn-primary btn-large" data-role="list-divider">Forrest Gump</li>
      <li class="btn btn-primary btn-large">Pitch Perfect</li>
      <li class="btn btn-primary btn-large">Hunger Games</li>
      <li class="btn btn-primary btn-large">Harry Potter Series</li>
      <li class="btn btn-primary btn-large">Across the Universe</li>
      <li class="btn btn-primary btn-large">The Notebook</li>
      <li class="btn btn-primary btn-large">The Other Bolyn Girl</li>
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