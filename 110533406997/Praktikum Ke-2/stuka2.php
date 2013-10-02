<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Generate Table</title>
</head>
<body>
<?php
function Buat_tabel ($baris, $kolom)
{
	echo ("<table border=\"1\">\n");

	for ($b=0; $b < $baris; $b++){
		echo("<tr height=\"40px\">\n");

		for ($k=0; $k < $kolom; $k++){
			echo("<td width=\"80px\"></td>\n");
		}
		echo("</tr>\n");
	}
	echo("</table>\n");
	echo("<h3>Tabel : $baris Baris dan $kolom Kolom </h3>");
}
Buat_tabel (3,4)
?>
</body>
</html>