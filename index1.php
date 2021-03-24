<?php 
	include "lat_OOPclass.php";
	if (isset($_POST['hitungBtn'])) {
		$lingkaran = new lingkaran($_POST['r']);
			}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    	body{
    		margin: 100px 600px;

    	}
    </style>
  </head>
  <body>
    <h3 align="center">Menghitung Luas dan Keliling</h3>

					<form align="center" action="" method="POST">
				
					  <div class="form-group">
					    <label for="jari">Nilai r</label>
					    <input type="number" name="r" class="form-control" id="" aria-describedby="emailHelp">
					    
					  </div>
					 
					  <button type="submit" name="hitungBtn" class="btn btn-primary">Hitung</button><br><br>

					  <?php if (isset($_POST['hitungBtn'])){ ?>
					  	<div class="alert alert-success" role="alert">
					    <div>Jari Jari Lingkaran = <?=$_POST['r']?></div>
					    <div>Luas Lingkaran adalah = <?=$lingkaran->getLuas(); ?></div>
					    <div>Keliling Lingkaran adalah = <?=$lingkaran->getkelLing(); ?></div><?php  } ?>
					</div>    

					  

					</form><br><br>


  





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




  <?php 
  //pembuatan objek
  		$pesawatA = new pesawatTerbang('abu-abu');
  		echo "	warna pesawat pertama adalah ". $pesawatA->getWarna();
  		echo "	<br>";
  //pembuatan nilai
  		$pesawatA->setWarna('merah');
  	//mendapatkan nilai
  		echo "warna pesawat A adalah ". $pesawatA->getWarna();


  		echo "	<br><hr><br>";


  		$MobilA = new Mobil('merah');
  		echo "	warna mobil A adalah ".$MobilA->getWarna();
  		echo "	<br>";

  		echo "	kecepatan mobil A adalah ".$MobilA->getKecepatan();
  		$MobilA->tambahKecepatan(20);
  		echo "	<br>";
  		echo "	kecepatan mobil A adalah ".$MobilA->getkecepatan();
  		echo "	<br><br><hr>";

  		$MobilB = new MobilBalap("biru");
  		echo "	warna mobil B  adalah ".$MobilB->getWarna();
  		echo "	<br>";
  		echo "	keceptan mobil B adalah ".$MobilB->getKecepatan();
  		$MobilB->tambahKecepatan(10);
  		echo "	<br>";
  		echo "	kecepatan Mobil B adalah ".$MobilB->getKecepatan();
  		$MobilB->tambahKecepatan(10);
  		echo "	<br>";
  		echo "	kecepatan Mobil B adalah ".$MobilB->getKecepatan();
  		echo "	<hr>";

  		$lingkaran = new lingkaran(5);
  		echo "  luas lingkaran adalah ". $lingkaran->getkelLing();
  		echo "	<br>";
  		echo "	keliling dari lingkaran tersebut adalah ". $lingkaran->getLuas();
  		echo "	<br>";            

   ?>


 </body>
 </html>