<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <html>
 <head>
     <meta charset="UTF-8">
     <title>
         Beranda 
     </title>
 </head>
 <body>
     <h1>Selamat Datang Di UAS PRAKTIKUM WEB.</h1>
     <p>  
     Silakan klik link
     <?php echo anchor('login','Masuk'); ?>
     untuk masuk ke dalam UAS atau
     <?php echo anchor('register','Daftar'); ?>
     untuk mendaftar DULUUUU.
     </p>      
 </body>
 </html>