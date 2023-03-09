
<!-- ----- debut viewInsert -->
<?php 
require ($root . '/app/view/fragment/fragmentGenealogieHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentGenealogieMenu.html';
      include $root . '/app/view/fragment/fragmentGenealogieJumbotron.php';
    ?> 

     <form role="form" method='get' action='router1.php'>
      <div class="form-group">
          <h3>Ajout d'un evenement</h3>
        <input type="hidden" name='action' value='evenementCreated'>
         
        <label for="nom">selectionnez un individu: </label><br> 
        <select class="form-control" id='individu'  name='individu' style="width: 100px">
            <?php
            foreach ($results as $individu) {
             echo ("<option value='{$individu ->getFamille_id()}|{$individu->getId()}'>"
             . "{$individu->getNom()} :{$individu->getPrenom()} </option>");
            }
            ?>
        </select><br>

        <label for="nom">selectionnez un type d'evenement: </label><br> 
        <select class="form-control" id='nom' name='event_type' style="width: 100px">
           <option value="Naissance">Naissance</option>
           <option value="Deces" selected>Deces</option>
        </select><br>
        
        <label>Date(AAAA-MM-JJ)?  </label><br>
            <input type="event_date" name="event_date" required pattern="\d{4}-\d{2}-\d{2}"><br>
            
         <label>Lieu?  </label><br>
            <input type='text' name='event_lieu'>
       
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">GO</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentGenealogieFooter.html'; ?>
<!-- ----- fin ViewInsert -->