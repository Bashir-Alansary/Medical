<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>

    <div class="add-admin view">
        <h2>All Services</h3>
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
       
                </tr>
            </thead>
            <tbody>
                <?php $data = getRows('services');  $x=1; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"> <?php echo $row['serv_name'] ?>  </td>
                    
                    <td>
                      <a class="edit" href="<?php echo BURLA . 'services/edit.php?id=' . $row['serv_id']; ?>"><i class="fa fa-edit">
                      </i></a>
                      <a class="delete" href="#" data-field="serv_id" data-id="<?php echo $row['serv_id']; ?>" 
                        data-table="services"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>


<?php require BLA.'inc/footer.php';  ?>

