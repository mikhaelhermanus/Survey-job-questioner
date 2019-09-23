<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SURPEY.com - Recommendation For Your Job</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/kuesioner.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	body {
	background-color: #9BB9FF;
}
    </style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../Unnamed Site 2/js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../Unnamed Site 2/js/bootstrap.js"></script>
<div class="collapse navbar-collapse" id="defaultNavbar2">
  <ul class="nav navbar-nav">
      <li class="active"><a href="#">
        <h4><b>Home</b></h4>
        <span class="sr-only">(current)</span></a></li>
      <li><a href="#">
        <h4><b>JobList</b></h4>
      </a></li>
      <li><a href="#">
        <h4><b>About</b></h4>
      </a></li>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
        <li class="divider"></li>
        <li><a href="#">One more separated link</a></li>
      </ul>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group"> <img src="LOGO SURPEY.COM 2 - Copy.png" width="150" height="50" alt=""/>
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li></li>
      <li class="dropdown">
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="panel-heading">
  <?php
$host = "localhost";
$user = "root";
$pswd = "";
$conn = mysqli_connect($host,$user,$pswd)or die("Koneksi gagal: " . mysql_error());
mysqli_select_db($conn,"suvey");
?>
 <form name="poll" method="POST" action="kesimpulan.php">
  <label for="textarea"><h4><b>Masukkan Nama Anda:</b></h4></label>
  <br> <div> </div>
  <textarea name="nama" id="textarea"></textarea>
<h3 class="panel-title"><b>Silahkan Anda isi sesuai dengan minat anda !</b></h3>

<div class="panel-body">
  <h4> 1. Hal apa yang anda sukai? </h4>
</div>
<p>
  <label>
    <input type="radio" name="satu" value="Komputer" id="satu_1">
    Komputer</label>
  <br>
  <label>
    <input type="radio" name="satu" value="Biologi" id="satu_2">
    Biologi</label>
  <br>
  <label>
    <input type="radio" name="satu" value="Kimia" id="satu_3">
    Kimia</label>
  <br>
</p>
<div class="panel-body">
  <h4> 2. Di manakah minat Anda ? </h4>
</div>
<p>
  <label>
    <input type="radio" name="dua" value="Menciptakan" id="dua_1">
    Menciptakan</label>
  <br>
  <label>
    <input type="radio" name="dua" value="Mengamati" id="dua_2">
    Mengamati</label>
  <br>
  <label>
    <input type="radio" name="dua" value="Mengubah" id="dua_3">
    Mengubah</label>
  <br>
</p>
<div class="panel-body">
  <h4> 3. Seperti apakah kepribadian Anda ? </h4>
</div>
<p>
  <label>
    <input type="radio" name="tiga" value="Pemalu" id="tiga_1">
    Pemalu</label>
  <br>
  <label>
    <input type="radio" name="tiga" value="Pemberani" id="tiga_2">
    Pemberani</label>
  <br>
  <label>
    <input type="radio" name="tiga" value="Pemberontak" id="tiga_3">
    Pemberontak</label>
  <br>
</p>
<div class="panel-body"><h4> 4. Apakah hobi Anda ? </h4></div>
  <p>
    <label>
      <input type="radio" name="empat" value="Membaca" id="empat_1">
      Membaca</label>
    <br>
    <label>
      <input type="radio" name="empat" value="Menulis" id="empat_2">
      Menulis</label>
    <br>
    <label>
      <input type="radio" name="empat" value="Travelling" id="empat_3">
      Travelling</label>
    <br>
  </p>
  <div class="panel-body"> <h4>5. Seperti apakah Anda ? </h4></div>
  <p>
    <label>
      <input type="radio" name="lima" value="Pemikir" id="lima_1">
      Pemikir</label>
    <br>
    <label>
      <input type="radio" name="lima" value="Orator" id="lima_2">
      Orator</label>
    <br>
    <label>
      <input type="radio" name="lima" value="Creator" id="lima_3">
      Creator</label>
    <br>
  </p>
  <div class="panel-body"> <h4>6. Bagaimana sikap anda terhadap suatu masalah ? </h4></div>
  <p>
    <label>
      <input type="radio" name="Enam" value="Menyelesaikan masalah" id="enam_1">
      Menyelesaikan masalah</label>
    <br>
    <label>
      <input type="radio" name="Enam" value="Meminta bantuan teman" id="enam_2">
      Meminta bantuan teman</label>
    <br>
    <label>
      <input type="radio" name="Enam" value="Masa Bodoh" id="enam_3">
      Masa Bodoh</label>
    <br>
  </p>
  <div class="panel-body"> <h4>7. Hal apa yang anda lakukan untuk mencari Informasi ? </h4></div>
  <p>
    <label>
      <input type="radio" name="tujuh" value="Membaca Buku" id="tujuh_1">
      Membaca Buku</label>
    <br>
    <label>
      <input type="radio" name="tujuh" value="Membaca Jurnal" id="tujuh_2">
      Membaca Jurnal</label>
    <br>
    <label>
      <input type="radio" name="tujuh" value="Menjelajahi internet" id="tujuh_3">
      Menjelajahi internet</label>
    <br>
  </p>
  <div class="panel-body"><h4> 8. Kemanakah tempat yang ingin anda jelajahi ? </h4></div>
  <p>
    <label>
      <input type="radio" name="delapan" value="Pegunungan" id="RadioGroup8_1">
    Pegunungan</label>
    <br>
    <label>
      <input type="radio" name="delapan" value="Pantai" id="RadioGroup8_2">
    Pantai</label>
    <br>
    <label>
      <input type="radio" name="delapan" value="Pedesaan" id="RadioGroup8_3">
    Pedesaan</label>
    <br>
  </p>
  <div class="panel-body"><h4> 9. Apa hal baru yang ingin anda coba  ?</h4> </div>
  <p>
    <label>
      <input type="radio" name="sembilan" value="Melakukan penelitian" id="RadioGroup9_1">
    Melakukan penelitian</label>
    <br>
    <label>
      <input type="radio" name="sembilan" value="Melakukan observasi" id="RadioGroup9_2">
      Melakukan observasi</label>
    <br>
    <label>
      <input type="radio" name="sembilan" value="Melakukan riset" id="RadioGroup9_3">
    Melakukan riset</label>
    <br>
  </p>
 
<button type="submit" class="btn btn-success" name="submit" id="submit" value="Submit"><b><h4>Submit</h4></b></button>
  <footer><h4>&copy; 2017 SURPEY.COM</h4></footer>
 </div>	  </body>
</html>