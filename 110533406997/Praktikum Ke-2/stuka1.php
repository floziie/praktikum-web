<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Demo Waktu</title>
</head>
<body>

<?php
date_default_timezone_set('Asia/Jakarta');
function greeting ()
{
$date = date('d-m-Y H:i:s');
if ($date >= 0 and $date < 10) {
	echo "Selamat Pagi";
} else if ($date >= 10 and $date < 15) {
	echo "Selamat Siang";
} else if ($date >= 15 and $date < 19) {
	echo "Selamat Sore";
} else if ($date >= 19 and $date < 00) {
	echo "Selamat Malam";
} else echo "Waktu Salah";
}

?>
<?php greeting(); ?>
<br>
<?php
//penulisan waktu
$date = date('H:i:s');
echo "Sekarang pukul $date WIB";
?>

</body>
</html>