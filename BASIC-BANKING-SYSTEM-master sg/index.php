<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style6.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>STARK BANK</title>
</head>

<body>
    <?php
  include 'navbar.php';
  ?>

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item " data-interval="2500">
      <img class="d-block w-100" src="img/3.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
    <div class="carousel-item active" data-interval="2500">
      <img class="d-block w-100" src="img/2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
    <div class="carousel-item" data-interval="2500">
      <img class="d-block w-100" src="img/1.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
     
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        <br>
        <div class="row activity text-center">

            <div class="col-md act">
                <img src="img/user1.jpg" class="img-fluid">
                <br>
                <br>
                <a href="viewcustomer.php"><button class="button btn-success">Show users</button></a>
            </div>
            <div class="col-md act">
                <img src="img/Capture.jpg" class="img-fluid">
                <br><br><br><br>
                <a href="transfermoney.php"><button class="button btn-success">Do Transaction</button></a>
            </div>
            <div class="col-md act">
                <img src="img/02.png" class="img-fluid">
                <br><br><br>
                <center> <a href="transactionhistory.php"><button class="button btn-success">Transaction History</button></a>
                </center>
            </div>
        </div>
    </div>
    <footer class="text-center mt-5 py-1 bg-warning text-bold">
        <p><b>STARK BANK<br>@Sarvesh Gore<b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>