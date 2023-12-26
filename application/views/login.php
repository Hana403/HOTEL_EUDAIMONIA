<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Times New Roman', Times, serif;
    
}

body {
    display: flex;
 background-image: url("<?php echo base_url('uploads/hotel.jpg'); ?>");
    background-color: aqua;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    backdrop-filter: blur(10px);
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    
}



.container {
    width: 100%;
    display: flex;
    max-width: 850px;
    background: #fff;
    background-image: url("<?php echo base_url('uploads/page-cover.png'); ?>");
    border-radius: 15px;
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.1);
}

.login {
    width: 400px;
}

form {
    width: 250px;
    margin: 40px auto;
   
   
}

h1 {
    margin: 30px;
    text-align: center;
    font-weight: bolder;
    text-transform: uppercase;
}

hr {
    border-top: 2px solid #ffa12c;
}

p {
    text-align: center;
    margin: 10px;
}

.right img {
    width: 450px;
    height: 100%;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
}


input {
    width: 100%;
    margin: 2px;
    border: none;
    outline: none;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid gray;
}

button {
    border: none;
    outline: none;
    padding: 8px;
    width: 252px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: #ffa12c;
}

button:hover {
    background: rgba(214, 86, 64, 1);
}


@media (max-width: 880px) {
    .container {
        width: 100%;
        max-width: 750px;
        margin-left: 20px;
        margin-right: 20px;
        
    }

    form {
        width: 300px;
        margin: 20px auto;
    }

    

    button {
        width: 100%;
    }

    .right img {
        width: 100%;
        height: 100%;
    }
}
</style>
</head>

<body>



    <div class="container">
        <div class="login">
            
                <h1>Login Admin</h1>
      
    <form action="<?php echo site_url('login/aksi_login'); ?> " method="POST">
                <div class="login-page">
            <div class="form">
            
            <input type="text" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">
        
            <button>Login</button>
            </form>
        </div>
        <p><a href=<?php echo site_url('loginuser'); ?>>Login Sebagai Pelanggan ?</a></p>
    </div>
       
            
        </div>
</form>
        <div class="right">
        <img src="<?php echo base_url('uploads/hotel.jpg'); ?>">
            
        </div>
          
    
    </div>
</body>

</html>