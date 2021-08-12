<?php
include 'config.php';
if(isset($_POST['submit'] ) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != ''){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$repassword = $_POST["repassword"];
	$level = 0;
	if($password != $repassword)
	{
		header("location:dangki.php");
	}
	$sql = "SELECT * from nguoidung where tennguoidung = '$username'"; 
	$old = mysqli_query($conn,$sql);
	$password = md5($password);
	if(mysqli_num_rows($old)>0)
	{
		header("location:dangki.php");
	}
	$sql = "INSERT into nguoidung (tendangnhap, matkhau, level) values ('$username','$password',$level)";
	mysqli_query($conn,$sql);
	echo "đăng kí thánh công!";

}else
{
	header("location:dangki.php");
}

?>