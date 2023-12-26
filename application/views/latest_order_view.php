<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/stint/css/form1.css" type="text/css" media="all">
    <title>Nota</title>
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
    <h1>Detail Nota
    </h1>
    <?php if(isset($latest_order)): ?>
        <p>ID Nota: <?php echo $latest_order->id_nota; ?></p>
        <p>Nama Pelanggan: <?php echo $latest_order->nama_user; ?></p>
        <p>Tanggal: <?php echo $latest_order->tanggal; ?></p>
        <p>Jumlah: <?php echo $latest_order->jumlah; ?></p>
        <p>Nama Kamar: <?php echo $latest_order->nama_kamar; ?></p>
        <p>Pembayaran: <?php echo $latest_order->pembayaran; ?></p>
        <p>Total: <?php echo $latest_order->total; ?></p>
        <!-- Tambahkan data lainnya sesuai kebutuhan -->
    <?php else: ?>
        <p>Belum ada data nota.</p>
    <?php endif; ?>

</div>

<footer>

</footer>

</body>
</html>
