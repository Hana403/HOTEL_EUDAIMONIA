<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/stint/css/form1.css" type="text/css" media="all">
    <title>Tambah </title>
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
    <h1>Tambah </h1>
        <form action="<?php echo site_url('crud_kamar/aksi_simpan'); ?>" method="POST" enctype="multipart/form-data">

        <label for="nama"> Nama </label>
        <input type="text" name="namaTempat">
        <label >Tipe</label>
        <input type="text" name="tipe" value="promo">

        <label for="gambar"> Gambar </label>
        <input type="file" name="gambar_tempat">

        <label for="isi">Isi</label>
        <textarea name="keterangan" cols="30" rows="10"></textarea>

        <label for="harga">Harga  </label>
        <input type="text" name="harga">

        <input type="submit" value="Simpan">
    </form>
    </div>

    <br><br><br>


    <footer></footer>

</body>
</html>