<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="REQUEST" action="requestAct.php">
		<a href="http://localhost/praktikum5_web/requestAct.php?nama=Anisa+Rahma+Salsabila+&email=anisarsalsabila%40@gmail.com&btnLogin=Login">
		Link ke Cek </a>
		<table width="400" align="center" cellpadding="2" cellspacing="2"> 
			<tr>
				<td width="130"> Nama </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130"> Email </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>