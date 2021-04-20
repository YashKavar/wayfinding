<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/cart.css">
    <title>Cart</title>
</head>
<body>

<?php 
            include "includes/user_header.php";
        ?>

<div class="container my-4">
<div class="card">
  <h2 class="card-header">My Cart</h2>
  <div class="card-body">
  <div class="row g-0">
    <div class="col-md-4 mb-3">
      <img src="image/logo1.png" class="img-thumbnail" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-success">Location</a>
        <a href="#" class="btn btn-success">Remove</a>

      </div>
    </div>
  </div>
<hr>
  <div class="row g-0">
    <div class="col-md-4">
      <img src="image/logo1.png" class="img-thumbnail" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-success">Location</a>
        <a href="#" class="btn btn-success">Remove</a>

      </div>
    </div>
  </div>

  </div>
</div>
</div>

    <?php 
            include "includes/user_footer.php";
        ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>




</body>
</html>