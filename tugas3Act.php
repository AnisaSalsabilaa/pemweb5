<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
	if (empty($_POST['namalengkap'])) { // Melakukan seleksi looping
		header("Location: tugas3kosong.php"); // Jika nama lengkap tidak diisi, maka akan menuju form tugas3kosong.php
	} else if (empty($_POST['namapanggilan'])) { // Melakukan seleksi looping
		header("Location: tugas3kosong.php"); //Jika nama panggilan tidak diisi, maka akan menuju form tugas3kosong.php
	} else if (empty($_POST['npm'])) { // Melakukan seleksi looping 
		header("Location: tugas3kosong.php"); // Jika NPM tidak diisi, maka akan menuju form tugas3kosong.php
	} else if (empty($_POST['ttl'])) { // Melakukan seleksi looping
		header("Location: tugas3kosong.php"); // Jika tempat, tanggal lahir tidak diisi, maka akan menuju form tugas3kosong.php
	} else if (empty($_POST['jeniskelamin'])) { // Melakukan seleksi looping
		header("Location: tugas3kosong.php"); // Jika jenis kelamin tidak diisi, maka akan menuju form tugas3kosong.php
	} else if (empty($_POST['alamat'])) { // Melakukan seleksi looping
		header("Location: tugas3kosong.php"); // Jika alamat tidak diisi, maka akan menuju form tugas3kosong.php
	} else if (empty($_POST['telepon'])) { // Melakukan seleksi looping
		header("Location: tugas3kosong.php"); // Jika nomor telepon tidak diisi, maka akan menuju form tugas3kosong.php
	} else if (empty($_POST['email'])) { // Melakukan seleksi looping 
		header("Location: tugas3kosong.php"); // Jika email tidak diisi, maka akan menuju form tugas3kosong.php
	} else { // Melakukan seleksi looping
		echo "<center> Nama Lengkap: ".$_POST['namalengkap']."</center><br>"; // Menampilkan teks nama lengkap di tengah halaman
		echo "<center> Nama Panggilan: ".$_POST['namapanggilan']."</center><br>"; // Menampilkan teks nama panggilan di tengah halaman
		echo "<center> NPM: ".$_POST['npm']."</center><br>"; // Menampilkan teks NPM di tengah halaman
		echo "<center> Tempat, tanggal lahir: ".$_POST['ttl']."</center><br>"; // Menampilkan teks tempat, tanggal lahir di tengah halaman
		echo "<center> Jenis Kelamin: ".$_POST['jeniskelamin']."</center><br>"; // Menampilkan teks jenis kelamin di tengah halaman
		echo "<center> Alamat: ".$_POST['alamat']."</center><br>"; // Menampilkan teks alamat di tengah halaman
		echo "<center> Nomor Telepon: ".$_POST['telepon']."</center><br>"; // Menampilkan teks nomor telepon di tengah halaman
		echo "<center> Email: ".$_POST['email']."</center><br>"; // Menampilkan teks email di tengah halaman
		date_default_timezone_set("Asia/Jakarta"); // Setting zona waktu Asia/Jakarta
		echo "<center> Login pada ".date("D, d F Y G:i:s"."</center"); // Menampilkan teks Login pada wakti saat melakukan login
	}
	?>
</body>
</html>