<?php
include_once('header.php');
?>
<title> Manage area </title>
<div id="page-wrapper" style="min-height: 703px;">
 <div class="main-page">
    <div class="tables">
       <h2 class="title1">Tables</h2>
       <div class="panel-body widget-shadow">
          <h4>Area Table:</h4>
          <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th> area id </th>
                    <th> state id </th>
                    <th> city id </th>
                    <th> area name </th>
                    <th> created dt </th>
                    <th> updated dt</th>
                    <th> Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(!empty($area_arr)){
                    foreach($area_arr as $data){
                        ?>
                        <tr>
                            <td> <?php echo $data->area_id ;?> </td>
                            <td> <?php echo $data->st_name ;?> </td>
                            <td> <?php echo $data->city_name ;?> </td>
                            <td> <?php echo $data->area_name ;?> </td>
                            <td> <?php echo $data->created_dt;?> </td>
                            <td> <?php echo $data->updated_dt;?> </td>
                            <td><a href="delete?del_area_id=<?php echo $data->area_id ;?>" class="btn btn-danger"> <i class="fa fa-trash-o">  Delete</i> </a></td>

                        </tr>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <tr>
                        <td colspan="6" align="center">data not found</td>
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