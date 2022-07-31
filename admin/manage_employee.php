<?php
    include_once('header.php');
?>
<title> manage employee </title>
<div id="page-wrapper" style="min-height: 703px;">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="panel-body widget-shadow">
						<h4>Employee Table</h4>
                        <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>emp id</th>
                        <th>emp name</th>
                        <th>emp user</th>
                        <th>emp mobile</th>
                        <th>emp mail</th>
                        <th>Created dt</th>
                        <th>Updated dt</th>
                        <th>Status</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(!empty($emp_arr)){
                            foreach($emp_arr as $data){
                    ?>
                    <tr>
                        <td><?php echo $data->emp_id;?></td>
                        <td><?php echo $data->emp_name;?></td>
                        <td><?php echo $data->emp_user;?></td>
                       
                        <td><?php echo $data->emp_mobile;?></td>
                        <td><?php echo $data->emp_mail;?></td>
                        <td><?php echo $data->created_dt;?></td>
                        <td><?php echo $data->updated_dt;?></td>
                        <td><a href="status?status_emp_id=<?php echo $data->emp_id;?>"class="btn btn-primary">
                            <?php echo  $data->emp_status;?></a></td>
                        <td><a href="delete?del_emp_id=<?php echo $data->emp_id;?>" class="btn btn-danger"> <i class="fa fa-trash-o">  Delete</i> </a></td>
                    </tr>
                   <?php
                            }
                        }
                    else{
                        ?>
                        <tr>
                        <td> data not found </td>
                        <tr>
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