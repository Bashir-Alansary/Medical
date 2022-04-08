<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>


    <div class="add-admin view v-orders">
        <h2>All Orders</h3>
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Service</th>
                    <th scope="col">City</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Action</th>
       
                </tr>
            </thead>
            <tbody>
                <?php $data = getRows('orders');  $x=1; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"><?php echo $row['order_name']; ?></td>
                    <td class="text-center"><?php echo $row['order_email']; ?></td>
                    <td class="text-center"><?php echo $row['order_mobile']; ?></td>
                    <?php

                        $rowCity = getRow('cities', 'city_id', $row['order_city_id']);
                        $rowService = getRow('services', 'serv_id', $row['order_serv_id']);
                    ?>
                    <td class="text-center"><?php echo  $rowService['serv_name']; ?></td>
                    <td class="text-center"><?php echo $rowCity['city_name']; ?></td>
                    <td class="text-center"><?php echo $row['order_notes']; ?></td>
                    
                    <td class="text-center">
                        <a class="delete" href="#" data-field="order_id" data-id="<?php echo $row['order_id']; ?>"
                       data-table="orders">
                        <i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>

<?php require BLA.'inc/footer.php';  ?>
