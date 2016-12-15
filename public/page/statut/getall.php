 <table class="table table-striped">
    <thead>
      <tr>
        <th>Statuts</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($lesStatuts as $statut):?>
      <tr>
        <td><?php echo $statut->getIntitule();?></td>
        <td>
          <a type="button" class="btn btn-warning" href="admin.php?controller=statut&amp;action=edit&amp;id=<?php echo  $statut->getId();?>">Modifier</a>
          <a type="button" class="btn btn-danger" href="admin.php?controller=statut&amp;action=delete&amp;id=<?php echo  $statut->getId();?>">supprimer</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

<a type="button" class="btn btn-info pull-right" href="admin.php?controller=statut&amp;action=create">ajouter</a>

