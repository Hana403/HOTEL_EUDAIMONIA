<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/stint/css/form1.css" type="text/css" media="all">
    <title>Edit Kamar</title>
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

    <h1>Edit Data Kamar</h1>

    <?php echo form_open_multipart('Crud_kamar/aksi_update/' . $kamar['id_tempat']); ?>

    <label for="nama_tempat">Nama Tempat</label>
    <input type="text" name="namaTempat" value="<?php echo $kamar['nama_tempat']; ?>" >

    <input type="text" name="tipe" value="<?php echo $kamar['tipe']; ?>"><br><br>

    <label for="tempat_teks"> Isi</label>
    <textarea name="keterangan" value="<?php echo $kamar['tempat_teks']; ?>" cols="30" rows="10"></textarea>
    <br><br>

    <label for="harga"> Harga</label>
    <input type="text" name="harga" value="<?php echo $kamar['harga']; ?>"><br><br>

    <label for="gambar_tempat"> Gambar</label>
    <input type="file" name="gambar_tempat" value="<?php echo $kamar['gambar_tempat']; ?>"><br><br>

    <input type="submit" value="update">
    <?php echo form_close(); ?>

</div>

<br><br><br><br>

<footer></footer>

</body>

</html>