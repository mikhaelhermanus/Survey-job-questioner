<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SURPEY.com - Recommendation For Your Job</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/kesimpulan1.css" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="defaultNavbar2">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">
            <h4><b>Home</b></h4>
            <span class="sr-only">(current)</span></a></li>
          <li><a href="joblist.php">
            <h4><b>JobList</b></h4>
          </a></li>
          <li><a href="about.php">
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
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title"><b>Kesimpulan dari pilihan anda adalah :  </b></h2>
      <br> <div> </div>
</div>
<?php
$host = "localhost";
$user = "root";
$pswd = "";
//if(isset($_POST ['submit']))
//{

$satu = $_POST['satu'];
$nama = $_POST['nama'];
$dua = $_POST['dua'];
$tiga = $_POST['tiga'];
$empat = $_POST['empat'];
$lima = $_POST['lima'];
$enam = $_POST['Enam'];
$tujuh = $_POST['tujuh'];
$delapan = $_POST['delapan'];
$sembilan = $_POST['sembilan'];

$conn=@mysqli_connect($host,$user,$pswd)or die("Koneksi gagal: " . mysql_error());
mysqli_select_db($conn,"suvey");

if(!$satu||!$dua||!$tiga)
{
echo "<h1><center>Data Masih Ada yang Kosong</center></h1>";
}
else
{
	echo"";
}
//}
?>
    <div class="panel-group" id="accordion1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">Kepribadian Anda</a></h4>
        </div>
        <div id="collapseOne1" class="panel-collapse collapse in">
          <div class="panel-body"> <? echo"$satu"?></div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">Minat Anda</a></h4>
        </div>
        <div id="collapseTwo1" class="panel-collapse collapse in">
          <div class="panel-body"><?echo"$dua"?></div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">Hobi Anda</a></h4>
        </div>
        <div id="collapseThree1" class="panel-collapse collapse in">
          <div class="panel-body"><?echo"$empat"?></div>
        </div>
      </div>
    </div>
    <div class="panel-group" id="accordion2">
<div class="panel panel-default">
  <div id="collapseTwo2" class="panel-collapse collapse in">
        <div class="panel-body"></div>
      </div>
    </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">Kesimpulan Akhir</a></h4>
        </div>	
        <div id="collapseThree2" class="panel-collapse collapse in">
          <div class="panel-body"><? 
									if ($satu=='Komputer'&&$enam=='Masa Bodoh') 
									{
										$simpul='Programer';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									if ($satu=='Biologi'&&$enam=='Menyelesaikan masalah') 
									{
										$simpul='Dokter';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									if ($satu=='Kimia'&&$enam=='Meminta bantuan teman') 
									{
										$simpul='Arsitek';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else if($dua=='Menciptakan'&&$tujuh=='Membaca Jurnal')
									{
										$simpul='Kimiawan';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else if($dua=='Mengamati'&&$tujuh=='Membaca Buku')
									{
										$simpul='Arsitek';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else if($dua=='Mengubah'&&$tujuh=='Menjelajahi internet')
									{
										$simpul='Programer';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else if($tiga=='Pemalu'&&$delapan=='Pegunungan')
									{
										$simpul='Arsitek';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else if($tiga=='Pemberani'&&$delapan=='Pedesaan')
									{
										$simpul='Perawat';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else if($tiga=='Pemberontak'&&$delapan=='Pantai')
									{
										$simpul='Kimiawan';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else if($empat=='Membaca'&&$sembilan=='Melakukan riset')
									{
										$simpul='Perawat';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else if($empat=='Menulis'&&$sembilan=='Melakukan observasi')
									{
										$simpul='Analis';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else if($empat=='Travelling'&&$sembilan=='Melakukan penelitian')
									{
										$simpul='Arsitek';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else if($lima=='Pemikir'&&$satu=='Komputer')
									{
										$simpul='Analis';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else if($lima=='Orator'&&$satu=='Biologi')
									{
										$simpul='Dokter';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else if($lima=='Creator'&&$satu=='Kimia')
									{
										$simpul='Perawat';
										echo "Minat Saudara $nama adalah <b>$simpul</b>";
									}
									else
									{
										$simpul ='Ada yang tidak lengkap';
										echo "$simpul";
									}
									$strSQL1 = "insert into survey1 set Nama='$nama',Isi1='$satu', Isi2='$dua', Isi3='$tiga',Isi4='$empat',Isi5='$lima',
									Isi6='$enam',Isi7='$tujuh',Isi8='$delapan',Isi9='$sembilan', Kesimpulan='$simpul'";
									$upd = @mysqli_query($conn,$strSQL1) or die("Query salah: " . mysqli_error());
									?></div>
        </div>
      </div>
    </div>
  </div>
	<script src="js/bootstrap.js"></script>
  </body>
</html>