<?php
   $err = [];
  include "../admin/connect.php";
  if (isset($_POST['addnew'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];

    if(empty($username && $password)){
      echo "Vui lòng nhập đầy đủ thông tin";
    }
    if ($password != $rpassword) {
      echo "Mật khẩu nhập lại không đúng";
    }

    $sql =  " SELECT * FROM user WHERE username = '$username ' ";
    $query = mysqli_query($conn,$sql);
    
     if (mysqli_num_rows($query)>0) {
       echo "tài khoản đã tồn tại";
     }else{
      $sql = " INSERT INTO user(username,password) VALUES ('$username','$password') ";
      $query = mysqli_query($sql,$conn);

     }


}
   
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm</title>
</head>
<body>
 <form method="post" action="" class="create">
 	<h1>Thêm</h1>
    <br>
    <label>Username</label><br>
    <div class="err">
       <span><?php echo (isset($err['username']))? $err['username']:''  ; ?></span>
    </div>
    <input type="text" name="username" placeholder="Nhập tài khoản"><br>
    <label>Password</label><br>
     <div class="err">
       <span><?php echo (isset($err['password']))? $err['password']:''  ; ?></span>
    </div>    
    <input type="password" name="password" placeholder="Nhập mật khẩu"><br>
    <label>Nhập lại mật khẩu</label><br>
    <div class="err">
       <span><?php echo (isset($err['rpassword']))? $err['rpassword']:''  ; ?></span>
    </div>
    <input type="password" name="rpassword" placeholder="Nhập lại mật khẩu"><br>
    <label>Ngày sinh</label><br>
    
    <input type="date" name="ngaysinh" placeholder="Nhập lại mật khẩu"><br>
    <input type="submit" name="addnew" value="Thêm">
 </form>
</body>
</html>
<style>
	*{
		margin: 0;
		padding: 0;
	}
    .err span{
    	color: red;
    	
    	font-weight: 100px;
    	font-family: sans-serif;
    }
</style>