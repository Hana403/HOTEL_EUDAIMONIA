<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/stint/css/form1.css" type="text/css" media="all">
    <title>Pesan Kamar</title>
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

<div class="for1">

    <h1>Order Kamar</h1>
<form action="<?php echo site_url('OrderController/process_order'); ?>" method="post">

    <label>Nama Pelanggan</label>
     <input type="text" name="nama_user"><br>
    <label>Tanggal</label>  
    <input type="date" name="tanggal"><br>
    <label> Jumlah</label>
    <input type="number" name="jumlah"><br>
    <label>Nama Kamar</label>
    <select name="nama_kamar">
        <option value="Deluxe Room">Deluxe Room</option>
        <option value="Premier Room">Premier Room</option>
        <option value="Executive Room">Executive Room</option>
    </select><br>
    <label>Pembayaran</label>
    <select name="pembayaran">
        <option value="Paypal">Paypal</option>
        <option value="Credit card">Credit card</option>
        <option value="Cash">Cash</option>
    </select><br>
    <input type="submit" value="Submit">
</form>
</div>

<br><br><br>

<footer>

</footer>
</body>
</html>
