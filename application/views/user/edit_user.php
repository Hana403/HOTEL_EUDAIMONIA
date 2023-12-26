<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/stint/css/form1.css" type="text/css" media="all">
    <title>Edit User</title>
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
    <h1>Edit Data User</h1>
    
    
    <form action="<?php echo site_url('crud_user/aksi_edit'); ?>" method="POST">
    <?php foreach ($user as $item){ ?>
    <input type="hidden" name="id_user" value="<?php echo $item->id_user;?>">
    <label>Nama User</label>
    <input type="text" name="namaUser" value="<?php echo $item->nama_user;?>"><br>

    <label>Password</label>
    <input type="text" name="password" value="<?php echo $item->password;?>"><br>

    <label>Email</label>
    <input type="email" name="email" value="<?php echo $item->email;?>"><br>


    <input type="submit" value="Simpan"> <br><br>
    <?php } ?> 
</form>
</div>
<br><br>
<br>
<footer></footer>
</body>
</html>