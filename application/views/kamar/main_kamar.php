<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/stint/css/form1.css" type="text/css" media="all">
    <title>Halaman Kamar</title>
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

    <h1>Halaman Menu Kamar</h1>
    <a href="<?php echo site_url('crud_kamar/tambah_kamar');?>">[Tambah Promo]</a>
    
    <div class="for1">
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Tempat</th>
            <th>Tipe</th>
            <th>Gambar</th>
            <th>Keterangan</th>
            <th>harga</th>
            <th>Kelola</th>
        </tr>
        <?php foreach ($kamar as $tempat) { ?>
        <tr>
            <td><?php echo $tempat['id_tempat'];?></td>
            <td><?php echo $tempat['nama_tempat'];?></td>
            <td><?php echo $tempat['tipe'];?></td>
            <td><img src="<?php echo base_url('uploads/'.$tempat['gambar_tempat']); ?>" alt="gambar_kamar" width="200" height="200"></td>
            <td><?php echo $tempat['tempat_teks'];?></td>
            <td><?php echo $tempat['harga'];?></td>
            <td><a href="<?php echo site_url('crud_kamar/edit/'.$tempat['id_tempat']); ?>">[Edit]</a> 
            <a href="<?php echo site_url('crud_kamar/delete/'.$tempat['id_tempat']);?>">[Hapus]</a></td> 
        </tr>
        <?php } ?>
    </table>
    </div>

    <footer></footer>
</body>
</html>