<!DOCTYPE html>
<html>
<head>
    <title>My Portofolio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/kube.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/custom.min.css" />
    <link rel="shortcut icon" href="assets/img/favicon.png" />
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<style>
		.intro h1:before {
			/* Edit this with your name or anything else */
			content: 'HELLO';
		}
	</style>
</head>
<body>
	<!-- Navigation -->
	<div class="main-nav">
		<div class="container">
			<header class="group top-nav">
				<div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
				    <span class="logo">DIFA</span>
				</div>
			    <nav id="navbar-1" class="navbar item-nav">
				    <ul>
				        <li class="active"><a href="#tentang">About Me</a></li>
				        <li><a href="#pendidikan">Education</a></li>
				        <li><a href="#pengalaman">Experiences</a></li>
				        <li><a href="#skills">Skills</a></li>
				    </ul>
				</nav>
			</header>
		</div>
	</div>

	<!-- Introduction -->
	<div class="intro section" id="tentang">
		<div class="container">
			<p>Hi, My name is Difa Rofi Alqudsi</p>
			<div class="units-row units-split wrap">
				<div class="unit-20">
					<img src="assets/img/avatar.jpg" alt="Avatar">
				</div>
				<div class="unit-80">
					<h1	style="font-size: 25px">I am a <br> <span style="font-size: 40px" id="typed"></span></h1>
				</div>
				<p>
					Saya adalah mahasiswa Teknik Informatika tingkat tiga di Univesitas Muhammadiyah Sukabumi. Saya memiliki ketertarikan di dunia teknologi dan finansial terutama cryptocurrency yang dimana menggabungkan kedua hal tersebut.
					Selain itu saya juga tertarik pada bidang Data Mining karena memiliki prospek yang sejalan dengan hal yang saya minati.</p>
			</div>
		</div>
	</div>

	<!-- Work Experience -->
	<div class="work section second" id="pendidikan">
		<div class="container">
			<h1>Education</h1>
			<?php foreach($data1 as $education) {?>
			<ul class="work-list">
				<li><?php echo $education['tahun_masuk'];?> - <?php echo $education['tahun_keluar'];?></li>
				<li><?php echo $education['nama_institusi'];?></li>
				<li><?php echo $education['nama_jurusan'];?></li>
			</ul>
			<?php }?>
		</div>
	</div>
	<!-- Experiences -->
	<div class="award section second" id="pengalaman">
		<div class="container">
			<h1>Experiences</h1>
			<?php foreach($data2 as $experiences) {?>
			<ul class="work-list">
				<li><?php echo $experiences['tahun'];?></li>
				<p><?php echo $experiences['nama_kegiatan'];?></p>
			</ul>
			<?php }?>
			</ul>
		</div>
	</div>

	<!--Skills -->
	<div class="skills section second" id="skills">
		<div class="container">
			<h1>Skills</h1>
			<?php foreach($data3 as $skills) {?>
			<ul class="work-list">
				<li><?php echo $skills['nama_skill'];?></li>
			</ul>
			<?php }?>
		</div>
	</div>

	<!-- Quote -->
	<div class="quote">
		<div class="container text-centered">
			<h1>If You don't have a good shot today, don't worry. There are other ways to be useful.</h1>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="units-row">
			    <div class="unit-50">
			    	<p> </p>
			    </div>
			    <div class="unit-50">
					<ul class="social list-flat right">
						<li><a href="https://x.com/difap_"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.linkedin.com/in/difa-rofi-alqudsi-790608210/"><i class="fa fa-linkedin"></i></a></li>
					</ul>
			    </div>
			</div>
		</div>
	</footer>

	<!-- Javascript -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/typed.min.js"></script>
    <script src="assets/js/kube.min.js"></script>
    <script src="assets/js/site.js"></script>
    <script>
		function newTyped(){}$(function(){$("#typed").typed({
		// Change to edit type effect
		strings: ["Student", "Gamer", "Crypto Enthusiast"],

		typeSpeed:90,backDelay:700,contentType:"html",loop:!0,resetCallback:function(){newTyped()}}),$(".reset").click(function(){$("#typed").typed("reset")})});
    </script>
</body>
</html>
