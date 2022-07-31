<?php
    include_once('header.php');
?>
<title>Manage Customer</title>
    <div id="page-wrapper" style="min-height: 703px;">
            <div class="main-page">
                <div class="tables">
                    <h2 class="title1">Tables</h2>
                    <div class="panel-body widget-shadow">
                        <h4>Basic Table:</h4>
                        <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>booking id</th>
                        <th>car id</th>
                        <th>cus id</th>
                        <th>cus name</th>
                        <th>cus mail</th>
                        <th>booking date</th>
                        <th>Created dt</th>
                        <th>Updated dt</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                   if(!empty($bc_arr)){
                    foreach($bc_arr as $data){
                        ?>
                        <tr>
                            <td> <?php echo $data->bc_id ;?> </td>
                            <td> <?php echo $data->car_id ;?> </td>
                            <td> <?php echo $data->cus_id ;?> </td>
                            <td> <?php echo $data->cus_name ;?> </td>
                            <td> <?php echo $data->cus_mail ;?> </td>
                            <td> <?php echo $data->bc_date ;?> </td>
                            <td> <?php echo $data->created_dt;?> </td>
                            <td> <?php echo $data->updated_dt;?> </td>
                            


                    </tr>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                                <tr>
                                    <td colspan="8" align="center">data not found</td>
                                </tr>
                            <?php
                        }
                        ?>
                </tbody>
            </table>
                    </div>
                </div>      
            </div>
</div>

<?php
    include_once('footer.php');
?>