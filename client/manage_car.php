<?php
    include_once('header.php');
?>
<title>Manage car</title>
<div id="page-wrapper" style="min-height: 703px;">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
                        <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>car id</th>
                        <th>car category</th>
                        <th>client </th>
                        <th>state id</th>
                        <th>city id</th>
                        <th>area id</th>
                        <th>car name</th>
                        <th> car color</th>
                        <th>rc pic</th>
                        <th>car pic </th>
                        <th> rc number</th>
                        <th>car price</th>
                        <th>created dt</th>
                        <th>updated dt</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
               
                   if(!empty($car_arr)){
                       foreach($car_arr as $data){
                        if($_SESSION['cl_id']==$data->cl_id){
                           ?>
                           <tr>
                               <td> <?php echo $data->car_id;?> </td>
                               <td> <?php echo $data->car_cate_id ;?> </td>
                               <td> <?php echo $data->cl_id ;?> </td>
                               <td> <?php echo $data->st_id ;?> </td>
                               <td> <?php echo $data->city_id ;?> </td>
                               <td> <?php echo $data->area_id ;?> </td>
                               <td> <?php echo $data->car_name;?> </td>
                               <td> <?php echo $data->car_number;?> </td>
                               <td><img src="../admin/upload/rc_pic/<?php echo $data->rc_pic;?>" hight="50px" width="50px"></td>
                               <td><img src="../admin/upload/car_pic/<?php echo $data->car_pic;?>" hight="50px" width="50px"></td>
                               <td> <?php echo $data->rc_number;?> </td>
                               <td> <?php echo $data->car_price;?> </td>
                               <td> <?php echo $data->created_dt;?> </td>
                               <td> <?php echo $data->updated_dt;?> </td>
                        
                               <td>  <a href="delete?del_car_id=<?php echo  $data->car_id;?>" class="btn btn-danger">Delete</a></p> </td>
                                
                              
                       </tr>
                       <?php
                        }
                       }
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