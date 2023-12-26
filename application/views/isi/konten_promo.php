<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/stint/css/form.css" type="text/css" media="all">
    <title>pemilihan promo</title>
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

<div class="container1">

        <h1>Silahkan Pilih:</h1>
        <?php foreach($promo as $item){ ?>
            <div class="card1">
                <a href="<?php echo site_url('Tampilan/isi1/'.$item['id_tempat']);?>">
                <img src="<?php echo base_url('uploads/'.$item['gambar_tempat']); ?>"></a>
            </div>

           <?php } ?>
<br><br>
<br>
<br><br>
</div>




<footer></footer>


        


</body>
</html>