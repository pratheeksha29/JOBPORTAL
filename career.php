<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
    .jobposting{
    background-color: #ffffff;
    padding:30px;
    margin:3%;
    margin-left:20px;
    margin-right: 2%;
    box-shadow:10px 10px 8px 10px #888888;
}
.top{
  padding: 20px;
}
        .navbar {
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
  }
 
  body{
    background:url("banner-1.jpg");
    background-size:cover;
  }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Career</title>
</head>
<body>

<div class="bgi">
    <div class="top">
      <h1> JOB Postings</h1>
</div>
<div class="row">
<?php
include "config.php"; 
$sql="SELECT cname,position,Jdesc,CTC,skills from jobs";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0){
 while($rows=$result->fetch_assoc()){
   echo'
   <div class="col-md-4">
     <div class="jobposting">
     <h3 style="text-align:centre;">'.$rows['position'].'</h3>
     <h4 style="text-align:centre;">'.$rows['cname'].'</h4>
     <p style="color:black;text-align:justify;">'.$rows['Jdesc'].'</p>
     <p style="color:black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
     <p style="color:black;"><b>CTC:</b>'.$rows['CTC'].'</p>
     <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
        Apply Now
     </button>
     </div>
 </div>';
 }
}
?>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Jobs</h5>
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
            <input type="text" class="form-control" name="applycname">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualifiaction</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passout</label>
            <input type="text" class="form-control" name="yop">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="apply" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <textarea name=""id=""cols="30"rows="10" class="form-control" name="jdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">skills required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
  </form>
</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootsrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>