<?php
//cetak
//variabel user
$judul="Zakiyyah's Blog";
$subj="everything to know about me";

$nama="Zakiyyah Nurfida";
$alamat=" Jl. Raya Candali, Kecamatan Kemang, Kabupaten Bogor";
$umur = 21;
$ttl = "Bogor, 8 Februari 2003";
$pendidikan = "S1 Sistem Informasi, STT Terpadu Nurul Fikri";
$hobi = "Membaca Novel";

$ig="@zakiyyahnrfi";
$wa="+6282136678904";
$tele="@znnrfiyya";
$linkedin="@zznhdasjdd";
$fb="@zakiyyahnurfida";
$pin="@zzxyffnda";
$twt="@burryzzisha";

$hard_skills="Digital Marketing, Product Management, UI/UX, Enterprise Resource Planning, Microsoft Office, Content Writer, Foto dan Video Editing (canva, capcut), Perencanaan Sumberdaya Organisasi.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Zakiyyah</title>

    <meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="LayoutIt!">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>
<body>


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ul class="nav" style="background-color:azure;">
					<li class="nav-item">
						<a class="nav-link active" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="profile.html">Profile</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1><?php echo $judul?><small><?php echo $subj?></small></h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<div class="carousel slide" id="carousel-573373">
							<ol class="carousel-indicators">
								<li data-slide-to="0" data-target="#carousel-573373" class="active">
								</li>
								<li data-slide-to="1" data-target="#carousel-573373">
								</li>
								<li data-slide-to="2" data-target="#carousel-573373">
								</li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" alt="Carousel Bootstrap First"
										src="https://images.wallpaperscraft.com/image/single/forest_trees_fog_156243_2560x1440.jpg">
									<div class="carousel-caption">
										<h4>
											MBTI
										</h4>
										<p>
											infj </p>
									</div>
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" alt="Carousel Bootstrap Second"
										src="https://png.pngtree.com/thumb_back/fh260/background/20201101/pngtree-plexus-blue-wallpaper-background-image_450894.jpg">
									<div class="carousel-caption">
										<h4>
											Major
										</h4>
										<p>
											Information System </p>
									</div>
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" alt="Cat Lovers"
										src="https://w0.peakpx.com/wallpaper/119/821/HD-wallpaper-cat-hideout-cat-animals.jpg">
									<div class="carousel-caption">
										<h4>
											Cat Lovers
										</h4>
										<p>
											Syallo, Mio, Cio, Abuy </p>
									</div>
								</div>
							</div> <a class="carousel-control-prev" href="#carousel-573373" data-slide="prev"><span
									class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a>
							<a class="carousel-control-next" href="#carousel-573373" data-slide="next"><span
									class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="jumbotron">
					<h2>
						Biografi Singkat </h2>
    <!-- cetak di dalam html -->
    <p>Nama Lengkap: <?php echo $nama?></p>
    <p>Tempat, Tanggal Lahir: <?= $ttl?></p>
    <p>Umur: <?php echo $umur?></p>
    <p>Alamat Tinggal: <?php echo $alamat?></p>
    <p>Pendidikan <?php echo $pendidikan?></p>
    <p>Hobi <?php echo $hobi?></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="jumbotron">
					<h2>
						You can find me..
					</h2>
					<p>
                    <p>Instagram: <?php echo $ig?></p>
                    <p>WhatsApp: <?php echo $wa?></p>
                    <p>Telegram: <?php echo $tele?></p>
                    <p>LinkedIn: <?php echo $linkedin?></p>
                    <p>Facebook: <?php echo $fb?></p>
                    <p>Pinterest: <?php echo $pin?></p>
                    <p>Twitter: <?php echo $twt?></p>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="jumbotron">
					<h2>
						Hard Skills						
					</h2>
                    <p><?php echo $hard_skills?></p>

					<!-- <p>
						Digital Marketing, Product Management, UI/UX, Enterprise Resource Planning, Microsoft Office, Content Writer, Foto dan Video Editing (canva, capcut), Perencanaan Sumberdaya Organisasi.
					</p> -->
					<p>
						<a class="btn btn-primary btn-large" href="profile.html">Profile</a>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>
					 <small>Template from LayoutIt Bootstrap</small>
					</h1>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>


</html>
