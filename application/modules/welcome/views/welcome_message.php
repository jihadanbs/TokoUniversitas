<!DOCTYPE html>
<html lang="en">

<head>
	<title>Univ Market</title>
	<link rel="shorcut icon" href="<?php echo base_url().'assets/img/icon-toko.png'?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- Brand -->
		<a class="navbar-brand" href="<?= base_url('') ?>">Beranda</a>

		<!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('welcome/order_list') ?>">Order List</a>
			</li>
		</ul>
	</nav>

	<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'assets/img/1.png'?>" alt="First slide" style="width:100%">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Welcome To TokoSekolah</h1>
                            <h4>Selamat Berbelanja Secukupnya Ya</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'assets/img/2.png'?>" alt="Second slide" style="width:100%">
                    <div class="carousel-caption d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'assets/img/3.png'?>" alt="Third slide" style="width:100%">
                    <div class="carousel-caption d-md-block">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<img class="card-img-top" src="<?= base_url('assets/img/baju.png') ?>" alt="Card image" style="width:100%">
					<div class="card-body">
						<form action="<?= base_url() ?>welcome/details_package" method="get">
							<input type="hidden" value="001" name="package_id">
							<input type="hidden" value="100000" name="package_price">
							<input type="hidden" value="Baju Keren" name="package_name">
							<input type="hidden" value="baju" name="icon">
							<h4 class="card-title">Baju Keren</h4>
							<p class="card-text">Bajunya Para Juara</p>
							<p class="card-text">Yakali Ga Beli?!</p>
							<button type="submit" class="btn btn-block btn-primary stretched-link">Rp 100.000</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<img class="card-img-top" src="<?= base_url('assets/img/buku.png') ?>" alt="Card image" style="width:100%">
					<div class="card-body">
						<form action="<?= base_url() ?>welcome/details_package" method="get">
							<input type="hidden" value="002" name="package_id">
							<input type="hidden" value="70000" name="package_price">
							<input type="hidden" value="Buku Coding" name="package_name">
							<input type="hidden" value="buku" name="icon">
							<h4 class="card-title">Buku Coding</h4>
							<p class="card-text">Buku Coding HTML & CSS</p>
							<p class="card-text">Albert Einstein Pernah Pake Ini</p>
							<button type="submit" class="btn btn-block btn-primary stretched-link">Rp 70.000</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<img class="card-img-top" src="<?= base_url('assets/img/peralatan.png') ?>" alt="Card image" style="width:100%">
					<div class="card-body">
						<form action="<?= base_url() ?>welcome/details_package" method="get">
							<input type="hidden" value="003" name="package_id">
							<input type="hidden" value="10000" name="package_price">
							<input type="hidden" value="Peralatan Sekolah" name="package_name">
							<input type="hidden" value="peralatan" name="icon">
							<h4 class="card-title">Peralatan Sekolah</h4>
							<p class="card-text">Paket Lengkap</p>
							<p class="card-text">Awet Sampe Tua</p>
							<button type="submit" class="btn btn-block btn-primary stretched-link">Rp 10.000</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<br>
<hr>
<footer class="text-muted">
	<div class="container">
		<p class="float-right">
			<a href="#">Back to top</a>
		</p>
		<p><?php echo date('Y');?> © copyright by <a href="http://universitasharapan.com" target="_blank">Universitas Harapan</a>.  <br>All rights reserved.</p>
	</div>
</footer>

</html>