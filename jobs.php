
<?php include 'config.php' ?>
<nav class="navbar navbar-expand-lg bg-light" style="position: fixed;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Candidates </a>
    
  </div>
</nav>
<?php include 'header.php' ?>
<div class="content">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Year Passout</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select name , applycname , yop from candidates";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo'
    <tr>
      <th scope="row">'.++$i.'</th>
      <td>'.$rows['name'].'</td>
      <td>'.$rows['applycname'].'</td>
      <td>'.$rows['yop'].'</td>
    </tr>';}}
    else{
      echo"";
    }
    ?>
  </tbody>
</table>
</div>
