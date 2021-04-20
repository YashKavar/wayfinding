<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Profile</title>
</head>
    
    <style>
        .main-form {
    width: 450px;
    margin: auto;
    margin-top: 50px;
    margin-bottom: 50px;
    
    }
    .h1{
        text-align: center;
        margin-top: 30px;
        margin-bottom: 10px;
    }
    </style>
<body>

<?php 
            include "includes/user_header.php";
        ?>

<p class="h1"> Profile </p>
<div class="container-fluid">
  <form action="" class="main-form container">

        <div class="mb-3">
            <label for="formFileMultiple">Multiple files input example</label>
            <input class="form-control" type="file" name="formFileMultiple" id="formFileMultiple" multiple>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" id="firstname" class="form-control">
    
                </div>
            </div>
            <div class="col">
                <div class="form-group mb-3">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="lastname" class="form-control">
                    
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
            <div class="invalid-feedback">Please enter a valid username.</div>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="mobile-number">Mobile Number</label>
            <input type="number" name="mobile-number" id="mobile-number" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email ID</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        

        <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>
        <div class="mb-3">
            <label for="pincode">Pincode</label>
            <input type="number" name="pincode" id="pincode" class="form-control">
        </div>

        <button type="update" class="btn btn-primary">Update</button>
  </form>
</div>

<?php 
            include "includes/user_footer.php";
        ?>

</body>
</html>