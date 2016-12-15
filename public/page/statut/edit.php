<form method="POST" action="admin.php?controller=statut&amp;action=update&amp;id=<?php echo $unStatut->getId();?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Modification du statut: <?php echo $unStatut->getIntitule();?> </label>
    <input type="text" class="form-control" value="<?php echo $unStatut->getIntitule();?>" name="intitule" placeholder="Nouveau statut">
  </div>
  
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>