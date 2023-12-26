<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/stint/css/form1.css" type="text/css" media="all">
    <title>Halaman User</title>
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

    <h1>Halaman Menampilkan Data User</h1>
    
    

<div class="for1">
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Password</th>
            <th>Email</th>
            <th>Kelola</th>
        </tr>
        <?php foreach($user as $manusia){?>
        <tr>
            <td><?php echo $manusia['id_user'];?></td>
            <td><?php echo $manusia['nama_user'];?></td>
            <td><?php echo $manusia['password'];?></td>
            <td><?php echo $manusia['email'];?></td>
            <td><a href="<?php echo site_url('crud_user/edit/'.$manusia['id_user']);?>">[Edit]</a> 
            <a href="<?php echo site_url('crud_user/hapus/'.$manusia['id_user']);?>">[Hapus]</a></td>
        </tr>
        <?php } ?>
    </table>
</div>
<br><br><br>

<footer></footer>
</body>
</html>