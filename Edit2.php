<?php
$conn = mysqli_connect("localhost", "root", "", "test");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>
</head>
<body>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage Users</h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New Product</span></a>
						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons"></i> <span>Delete</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						
						<th>Number</th>
                        <th>Product</th>
                        <th>Brand</th>
						<th>Size</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM khohang");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row['id']; ?>">
			
					
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><?php echo $row[6]; ?></td>



					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row['id']; ?>"
							data-product="<?php echo $row[1]; ?>"
							data-email="<?php echo $row[2]; ?>"
							data-phone="<?php echo $row[3]; ?>"
							data-city="<?php echo $row[4]; ?>"
							title="Edit"></i>
						</a>


						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row['id']; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete"></i></a>
                    </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Add New Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">		

                        <div class="form-group">
							<label>Product's Number</label>
							<input type="number" id="number" name="number" class="form-control" required>
                        </div>

						<div class="form-group">
							<label>Product</label>
							<input type="text" id="Product" name="Product" class="form-control" required>
                        </div>
                        
						<div class="form-group">
							<label>Brand</label>
							<input type="text" id="Brand" name="Brand" class="form-control" required>
                        </div>
                        
						<div class="form-group">
							<label>Size</label>
							<input type="text" id="Size" name="Size" class="form-control" required>
                        </div>
                        
						<div class="form-group">
							<label>Color</label>
							<input type="text" id="Color" name="Color" class="form-control" required>
                        </div>	
                        
                        <div class="form-group">
							<label>Price</label>
							<input type="text" id="Price" name="Price" class="form-control" required>
                        </div>	
                        
                        <div class="form-group">
							<label>Quantity</label>
							<input type="number" id="Quantity" name="Quantity" class="form-control" required>
                        </div>	

                    </div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
    </div>
    
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>					
						<div class="form-group">
							<label>Number</label>
							<input type="number" id="name_u" name="number" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Product</label>
							<input type="text" id="Product" name="Product" class="form-control" value="<?php echo $row[1]; ?> " required>
						</div>

						<div class="form-group">
							<label>Brand</label>
							<input type="text" id="phone_u" name="Brand" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Size</label>
							<input type="text" id="city_u" name="Size" class="form-control" required>
						</div>	

						<div class="form-group">
							<label>Color</label>
							<input type="text" id="city_u" name="Color" class="form-control" required>
						</div>	

						<div class="form-group">
							<label>Price</label>
							<input type="text" id="city_u" name="Price" class="form-control" required>
						</div>	

						<div class="form-group">
							<label>Quantity</label>
							<input type="text" id="city_u" name="Quantity" class="form-control" required>
						</div>	

					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Delete User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html> 