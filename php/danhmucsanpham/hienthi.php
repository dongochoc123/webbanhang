<?php 
  include "../admin/connect.php";
  $sql = "SELECT * FROM user";
  $query = mysqli_query($conn,$sql);
  $data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Danh mục sản phẩm</title>
</head>
<body>
    <table class="border">
    	<thead>
    		<tr>
    			<th width="50px"  align="center">STT</th>
    			<th width="150px" align="center">Username</th>
    			<th width="150px" align="center">Password</th>
    			<th width="150px" align="center">Status</th>
    			<th></th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php foreach ($query as $key => $value) {
    			
    		 ?>
    		<tr>
    			<td width="50px"  align="center"><?php echo $value['id']; ?></td>
    			<td width="150px" align="center"><?php echo $value['username']; ?></td>
    			<td width="150px" align="center"><?php echo $value['password']; ?></td>
    			<td width="150px" align="center"><?php echo $value['status']; ?></td>
    			<td>
                    <a href="">Sửa ./</a>
                    <a href="">Xoá</a>
    			</td>
    		</tr>
    	<?php } ?>
    	</tbody>
    </table>
    <a href="create.php"><button type="button" class="btn btn-success">create</button></a>
</body>
</html>
<style>
	
	.border  {
		
		border: 1px solid black;
	}
	.border thead {
		border-bottom: 1px solid black
	}
	.border tbody tr td{
		border-top: 1px solid black;
		border-right: 1px solid black;
	}
	.btn-success{
		margin: 20px;
	}
</style>