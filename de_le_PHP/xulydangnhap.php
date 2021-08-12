<?php
include 'config.php';
if(isset($_POST['submit'] ) && $_POST["username"] != '' && $_POST["password"] != '' ){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password = md5($password);
	$sql = "SELECT * from nguoidung where tendangnhap = '$username' and matkhau = '$password'";
	$user = mysqli_query($conn,$sql);
	if(mysqli_num_rows($user)>0)
	{
		echo "đang nhập thanh công!";
	}
	else
	{
		echo "tên tài khoản hoặc mật khẩu không đung!";
	}
}
else
{
	header("location:dangnhap.php");
}
?>