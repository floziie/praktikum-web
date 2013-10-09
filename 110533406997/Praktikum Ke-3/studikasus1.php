<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <title>Pekerjaan</title>
   </head>

   <body>
  <FORM ACTION="studikasus1.php" METHOD="POST" NAME="input">
   <h2>Pilih Film Kartun Favorit Anda :</h2>
   <select name="kartun">
    <option value="Sponge Bob">Sponge Bob</option>
    <option value="Sinchan">Sinchan</option>
    <option value="Conan">Conan</option>
    <option value="Doraemon">Doraemon</option>
    <option value="Dragon Ball">Dragon Ball</option>
    <option value="Naruto">Naruto</option>
   </select> 
   <input type="submit" name="Pilih" value="Pilih"> 
         </form>
		 
		 <?php
		if (isset($_POST['Pilih'])) {
		$film = $_POST['kartun'];
		echo "Pekerjaan Anda adalah : 
		<font color=blue><b>$film</b></font>";
		}
		?>
   </body>
</html>