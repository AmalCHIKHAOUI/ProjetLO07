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
          <h3>Ajout d'une union </h3>
        <input type="hidden" name='action' value='LienUnionCreated'>
        <label for="nom">selectionnez un homme: </label><br> <select class="form-control" id='idd' name='individu1' style="width: 100px">
          <?php
            foreach ($resultshomme as $individu1) {
             echo ("<option  value='{$individu1->getId()}|{$individu1->getFamille_id()}'>"
             . "{$individu1->getNom()}:{$individu1->getPrenom()}</option>");
            }
            ?>
        </select><br>
        
     
        <label for="nom">selectionnez un femme: </label><br> <select class="form-control" id='idd' name='individu2' style="width: 100px">
            <?php
            foreach ($resultsfemme as $individu2) {
             echo ("<option value='{$individu2->getId()}'>"
                     . "{$individu2->getNom()}:{$individu2->getPrenom()}</option>");
            }
            ?>
        </select><br>

        <label for="nom">selectionnez un type d'union: </label><br> 
        <select class="form-control" id='nom' name='lien_type' style="width: 100px">
           <option value="Couple">Couple</option>
           <option value="Divorce" selected>Divorce</option>
           <option value="Separation">Separation</option>
           <option value="Pacs">Pacs</option><!-- comment -->
           <option value="Mariage">Mariage</option>
        </select><br>
        
        <label>Date(AAAA-MM-JJ)?  </label><br>
            <input type="event_date" name="lien_date" required pattern="\d{4}-\d{2}-\d{2}"><br>
            
         <label>Lieu?  </label><br>
            <input type='text' name='lien_lieu'>
       
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">GO</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentGenealogieFooter.html'; ?>

<!-- ----- fin viewInsert -->
