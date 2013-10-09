<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Hobi Favorit ~ Inputan Checkbox</title>
</head>

 <body>
  <FORM ACTION="studikasus2.php" METHOD="POST" NAME="input">
   <h2>Pilih Hobi Favorit Anda :</h2>
   <input type="checkbox" name="hobi01" value="Membaca" > Membaca<br>
   <input type="checkbox" name="hobi02" value="Berenang" checked> Berenang<br>
   <input type="checkbox" name="hobi03" value="Memancing"> Memancing<br>
   <input type="checkbox" name="hobi04" value="Belanja" checked> Belanja<br>
   <input type="submit" name="Pilih" value="Pilih"> 
  </FORM>

  <?php
if (isset($_POST['Pilih'])) {
 echo "Hobi Favorit Anda adalah :<br>";
 if (isset($_POST['hobi01'])) {
  echo "+ " . $_POST['hobi01'] . "<br>"; 
 }
 if (isset($_POST['hobi02'])) {
  echo "+ " . $_POST['hobi02'] . "<br>"; 
 }
 if (isset($_POST['hobi03'])) {
  echo "+ " . $_POST['hobi03'] . "<br>"; 
 }
 if (isset($_POST['hobi04'])) {
  echo "+ " . $_POST['hobi04'] . "<br>"; 
   }
}
?> 
 </body>
</html> 