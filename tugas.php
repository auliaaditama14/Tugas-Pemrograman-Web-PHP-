<html>
<body>
	<center>
	<font face="rog fonts" size="6" color="white"><br><b>AULIA ADITAMA</b></br></font>
	<font face="rog fonts" size="6" color="white"><b>1800018001</b></font>
	<font face="rog fonts" size="6" color="white"><br><b>PEMROGRAMAN WEB</b></br><br></font>
	<style>
		body{
			background-image: url(ae.jpg);
			background-size: cover;
			background-position: center;
			color: white;
			font-family: cooper black;

		}
</style>
<?php
	$nama = $NIM ="";
	if($_SERVER["REQUEST_METHOD"]== "POST"&& isset($_POST["nama"])&& isset($_POST["NIM"])){
		$nama =$_POST["nama"];
		$NIM  =$_POST["NIM"];
	}
?>
<form method="POST"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<font size="5" color="white"> Nama :<input type="text" name="nama"/><br/></font>
	<font size="5" color="white"> NIM  :<input type="text" name="NIM"/><br/><br/></font>
	<input type="submit"value="Submit" style="height:30px"  >
</form>

<?php
if(empty($nama) && empty($NIM) ){
echo "Nama dan Nim Tidak Boleh Kosong!!";
}
else if (!is_numeric($_POST["NIM"])){
	echo "NIM HARUS ANGKA";
}
else if(strlen($_POST["NIM"])!=10){
	echo "NIM HARUS BERJUMLAH 10 ANGKA";
}
else if(!empty($nama) && !empty($NIM) ){
echo "<h2>Halo Selamat Datang</h2>";
echo $nama . "<br>" . $NIM;
}


?>
</center>

</body> 
</html>
