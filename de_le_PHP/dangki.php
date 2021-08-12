<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng kí</title>
</head>
<body>
<h3>Đăng kí</h3>
<form action="xulydangki.php" method="POST">
	<table>
		<tr>
			<td>Tên đăng nhập:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Mật khẩu:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Nhập lại mật khẩu:</td>
			<td><input type="password" name="repassword"></td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit" name="submit">Đăng kí</button>
				<button type="reset">làm mói</button>
			</td>
		</tr>
	</table>
</form>
</body>
</html>