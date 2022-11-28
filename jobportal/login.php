<?php include 'config.php';?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content ="width=device-width, intial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Login</title>
        <style>
            body{
                background-image:url("images/bi.jpg");
                background-size:cover;
            }
            form{
                background-color:#fff;
                margin-top:6em;
                margin-left:30em;
                margin-right:10em;
                padding: 40px;
                box-shadow: 10px 10px 8px 10px #888888;
                

            }
            .imgbox{
              text-align:center;
            }
            #btn{
              text-align:center;
            }
           

        </style>
        
</head>
<body>
<div class="container">
<form method="POST">
  <div class="imgbox">
<img class="imglogin" src="images/imglogin.png" alt="" width="102" height="102">
</div>
  <div class="mb-3">
    
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary" id="btn" name="Login">Submit</button>
  <p style="text-align:center;">New User? <br>Create Account <a href="register.php">Sign Up</a></p>
</form>


    
</div>
    
</body>
</html>