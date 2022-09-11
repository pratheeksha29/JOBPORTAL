<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    body{
    background-image:url('background.jpg');
    background-size:cover;
    }
    form{
         background-color: #ffffff;
         padding:30px;
         margin:20px;
         margin-left:10px;
         margin-right: 50%;
         box-shadow:10px 10px 8px 10px #888888;
    }
</style>
    <title>Register</title>
</head>
<body>
<div class="container">
<form method="POST" action="config.php">
<div class="mb-3">
<label for="exampleInputName"class="form-label">Full Name</label>
<input type="text"class="form-control"id="exampleInputName" name="name">
</div>
<div class="mb-3">
<label for="exampleInputEmail1"class="form-label">Email address</label>
<input type="email"class="form-control"id="exampleInputEmail1"aria-describedby="emailHelp" name="email">
<div id="emailHelp"class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
<label for="exampleInputNumber"class="form-label">Phone Number</label>
<input type="number" class="form-control"id="exampleInputNumber" name="phone_number">
</div>
<div class="mb-3">
<label for="exampleInput Password1"class="form-label">Password</label>
<input type="password"class="form-control"id="exampleInput Password1" name="password">
</div>
<div class="mb-3">
<label for="exampleInput Password2"class="form-label">Confirm Password</label>
<input type="password"class="form-control"id="exampleInput Password2">
</div>
<button type="submit"class="btn btn-primary" name="submit">Submit</button>
<br>

Already Registered? <a href="login.php">Log in</a>
</form>
</div>
</body>
</html>