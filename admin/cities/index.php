<?php require_once"../../config.php";?>
<?php require_once BLA . "inc/header.php"; ?>

<div class="add-admin view">
  <h2>All Cities</h2>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $data = getRows('cities'); $count = 1; ?>
      <?php foreach ($data as $row) { ?>
      <tr>
        <th scope="row"><?php echo $count;?></th>
        <td><?php echo $row['city_name']?></td>
        <td>
          <a class="edit" href="<?php echo BURLA . 'cities/edit.php?id=' . $row['city_id']; ?>"><i class="fa fa-edit">
          </i></a>
          <a class="delete" href="#" data-field="city_id" data-id="<?php echo $row['city_id']; ?>" data-table="cities">
            <i class="fa fa-times"></i></a>
        </td>
      </tr>
      <?php $count++; } ?>
    </tbody>
  </table>
</div>

<?php require_once BLA . "inc/footer.php"; ?>