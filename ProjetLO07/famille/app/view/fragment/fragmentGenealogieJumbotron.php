<!-- ----- debut fragmentCaveJumbotron -->
<div class="jumbotron">
  <?php
  if(isset($_SESSION["nom"])) {
      echo("<h4>" . $_SESSION["nom"] . "</h4>");
  } else {
      echo("<h4>PAS DE FAMILLE SELECTIONNEE</h4>");
  }  
  ?>
</div>
<p/>
<!-- ----- fin fragmentCaveJumbotron -->  