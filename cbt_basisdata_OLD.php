<?php
	define('DB_HOST','localhost');
	define('DB_USER','GANTI_USER_SQL');
	define('DB_PASS','GANTI_PASS_SQL');
	define('DB_NAME','GANTI_DBASE_SQL');

	$konekci = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	$konekci2 = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>