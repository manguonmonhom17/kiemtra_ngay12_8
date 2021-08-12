<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập</title>
</head>
<body>
<h3>Đăng nhập</h3>
<form action="xulydangnhap.php" method="POST">
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
			<td colspan="2">
				<button type="submit" name="submit">Đăng nhập</button>
				<button type="reset">làm mói</button>
			</td>
		</tr>
	</table>
</form>
</body>
</html>