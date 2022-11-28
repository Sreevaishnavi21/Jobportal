<?php include 'config.php';?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content ="width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="style1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <title>Career</title>
        <style>
          body{

          
           overflow-x: hidden;
          }
          
          .header{
            width: 100%;
            height:50vh;
            text-align:center;
            padding:10px;
            background-image:url(images/bgcareer.png);
            background-size:cover;
            background-repeat:no-repeat;
            
            
          }

          .heading{
            font-size:36px;
            font-weight:600;
            text-align:center;
            color:white;
            padding:150px;
            
            
          }
          .para{
         color:white;
        font-size:14px;
        font-weight:300;
        line-height:22px;
        margin:19px;
     
       

          }
          .box{
            background-color:white;
          }
          .jobs{
            width:500px;
            margin:100px auto 5px auto;
            border-style:solid;
            border-width:2px;
            border-color:black;
            box-shadow: 5px 5px 2px gray;


          }
          #container{
            text-align:center;
          }
          

        </style>
      <body>
      <div class="wrapper">
        
<ul class="nav-area">
<li><a href="home.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="career.php">Jobs</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>
    
      <div class="header">
  
  <h1 class ="heading">JOB PORTAL</h1>
    
  </div>


  

<div class="row">
  <?php
  $sql="SELECT cname,position,Jdesc,CTC,skills FROM jobs";
  $result=mysqli_query($conn,$sql);
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
      echo'

      <div class="box">
       <div class="jobs">
       <h3 style="text-align:center;">'.$rows['position'].'</h3>
       <h4 style="text-align:center;">'.$rows['cname'].'</h4>
       <p style="color:black; margin:10px; text-align:justify;"><b>Job Description:</b>'.$rows['Jdesc'].'</p>
       <p style="color:black;margin:10px; "><b>Skills Required:</b>'.$rows['skills'].'</p>
       <p style="color:black; margin:10px;"><b>CTC:</b>'.$rows['CTC'].'</p>
       <div id="container">
       <button style="margin:10px;" class="btn btn-primary" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample" >
        APPLY NOW
  </button>
  </div>
       </div>
    </div>';
    }
  }
  ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Application for Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passout</label>
            <input type="text" class="form-control" name="year">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submission" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
  
  </div>
  <br>
  <div class = "footer">
        <h3>Follow Us</h3>
        <div class = "social-links">
          <a href = "https://www.facebook.com/" class = "fab fa-facebook-f"></a>
          <a href = "https://twitter.com/?lang=en" class = "fab fa-twitter"></a>
          <a href = "https://www.instagram.com/" class = "fab fa-instagram"></a>
          <a href = "https://in.linkedin.com/" class = "fab fa-linkedin"></a>
          <a href = "https://www.youtube.com/" class = "fab fa-youtube"></a>
        </div>
      </div>


        
 </body>
        
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>      

</html>
