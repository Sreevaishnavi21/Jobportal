
<?php include 'header.php'?>
<?php include 'config.php';?>


<div class="content">
<p>
 
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  POST JOB
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="Position" class="form-label">Position</label>
    <input type="text" class="form-control" id="Position" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="JobDescription" name="Jdesc">
  </div>
  <div class="mb-3">
    <label for="skillsrequired" class="form-label">Skills Required</label>
    <input type=" text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type=" text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="jobsubmit">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col"> Hiring Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <?php $sql="SELECT `cname` ,`position` ,`CTC` FROM `jobs` ";
    $result=mysqli_query($conn,$sql);
    $i=0;
  if($result->num_rows > 0 ) {

      while($row = $result->fetch_assoc()){
      
        echo"
      <tbody>
        <tr>
          <td>".++$i."</td>
          <td>".$row['cname']."</td>
          <td>".$row['position']."</td>
          <td>".$row['CTC']."</td>
        </tr>";
      }}
    else{
      echo"";
    }?>
    </tbody>
</table>   
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>  
</body>
        
        
</html>
