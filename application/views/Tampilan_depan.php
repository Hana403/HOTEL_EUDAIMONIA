<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/stint/css/depan.css" type="text/css" media="all">
    <title>Tampilan Depan</title>
</head>
<body>


<div id="navbar1">
    <div class="c">
            <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn"/>
            <label for="modal-btn">Pilih <i class="uil uil-expand-arrows"></i></label> 		
            <div class="modal">		
                <div class="modal-wrap">
                   
                    <p>Apa Yang Akan Anda Lakukan: </p>
                   <div class="text">
                    <button><a href="<?php echo site_url('loginuser');?>">login</a></button>
                    <button><a href="<?php echo base_url(); ?>index.php/loginuser/logout">Logout</a></button><br><br>
                    <button><a href="<?php echo site_url('OrderController');?>">Memesan Kamar</a></button>
                    <button><a href="<?php echo site_url('Order_ruang');?>">Memesan Ruang</a></button>
                   </div>
                </div>			          		
            </div>
        </div>
            <div id="navbar">
        <b>HOTEL EUDAIMONIA</b>
        

          <a href="<?php echo site_url('Tampilan');?>">Start</a>
        
    </div>
</div>

<br>



<div class="slideshow-container">
<?php foreach($promo as $item){ ?>
<div class="mySlides fade">
<img src="<?php echo base_url('uploads/'.$item['gambar_tempat']); ?>">
<div class="text"><button><a href="<?php echo site_url('Tampilan/isi1/'.$item['id_tempat']);?>">KLIK</a></button></div>
</div>
<?php } ?>

</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br><br>






<h3>HOTEL EUDAIMONIA</h3>
<p style="text-align:center;">Memiliki berbagai kamar yang nyaman, menyediakan ruangan untuk kebutuhan anda, <br> dan memiliki promo-promo menarik untuk anda!</p>
<div class="skewed">
    <div class="text1">
        <h1>KAMAR</h1>
        <p>
            kami menawarkan kamar untuk istirahat dan tidur dengan nyaman,
            yaitu kamar Deluxe Room, Premier Room, dan Executive Room
        </p>
        <button><a href="<?php echo site_url('Tampilan/kamar');?>">Read More &rarr;</a></button>
    </div>
    <div class="image">
        <div>
            <img src="<?php echo base_url('image/room.jpg');?>" alt="">
        </div>
    </div>
</div>

<div class="skewed skewed-left">
    <div class="image">
        <div>
            <img src="<?php echo base_url('image/ruang.jpg');?>" alt="">
        </div>
    </div>
    <div class="text1">
        <h1>RUANGAN</h1>
        <p>
            Kami menyiapkan ruangan sesuai dengan kebutuhan anda, yaitu Meeting Room, U-Sharped Room, and 
            Teater
        </p>
        <button><a href="<?php echo site_url('Tampilan/ruang');?>">Read More &rarr;</a></button>
        
    </div>
</div>

<div class="skewed">
    <div class="text1">
        <h1>PROMO</h1>
        <p>
            Kami memberikan berbagai promo menarik untuk anda!
        </p>
        <button><a href="<?php echo site_url('Tampilan/promo');?>">Read More &rarr;</a></button>
    </div>
    <div class="image">
        <div>
            <img src="<?php echo base_url('image/promo.jpg');?>" alt="">
        </div>
    </div>
</div>

<br><br><br>

<footer>

</footer>
</body>
</html>