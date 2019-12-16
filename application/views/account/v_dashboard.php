<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Dashboard 
   </title>
   <style type="text/css">
   body{
	background: #eee;
	color: #333;
	font-family: sans-serif;
	font-size:15px;
 
}
 
#wrapper{
	background: #fff;
	width: 1100px;
	margin: 20px auto;
}
 
#wrapper header{
	background: #232323;
	padding: 20px;	
}
 
#wrapper header hgroup{
	float: left;	
	color: #fff;
}
#wrapper header nav{	
	float: right;
	margin-top: 50px;		
}
 
#wrapper header nav ul{
	padding: 0;
	margin: 0;
}
 
#wrapper header nav ul li{
	float: left;
	list-style: none;	
}
 
#wrapper header nav ul li a{
	padding: 15px;	
	color: #fff;
	text-decoration: none;
}
.clear{
	clear: both;
}
 
footer{
	background: #232323;
	padding: 20px;
}
 
footer a{
	color: #fff;
	text-decoration: none;
}
 
section{
	padding: 20px;
}
   </style>
   
 </head>
 <body>
      <!-- <h3>Dashboard</h3>
      <p>
           Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('username')); ?>!
           Untuk logout dari UAS, silakan klik <?php echo anchor('login/logout','di sini...'); ?>
      </p> -->
      <div id="wrapper">
		<header>
			<hgroup>
				<h1>FORUM TERBUKA</h1>
				<h3>Ini Projek Untuk Uas Praktikum Web</h3>
			</hgroup>
			<nav>
				<ul>
					<li><a href="<?php echo base_url().'index.php/Dashboard' ?>">Home</a></li>
					<li><a href="<?php echo base_url().'index.php/Dashboard/about' ?>">Forum</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>
		<section>
    <p>Selamat datang di halaman utama kelompok 1, <?php echo ucfirst($this->session->userdata('username')); ?>!</p>
		<h1>kelompok 1</h1>
    <p>1. GIDEON</p>
    <p>2. MARWOD</p>
    <p>3. RAHMA</p>
    <p>4. FAJRIYAN</p>
    <p>5. DAVID</p>
		<p>
    Untuk logout dari UAS, silakan klik <?php echo anchor('login/logout','di sini...'); ?>
		</p>
		</section>
		<footer>						
			<a>Kelompok 1</a>		
		</footer>
	</div>
 </body>
 </html>



	
	