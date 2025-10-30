<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Thank You </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include('./includes/css.php'); ?>
  <style>
    @media (max-width:992px) {
      .set-this {
        object-fit: contain;
        width: 100%;
        margin-top: -71px;
        width: 100%;
      }
    }

    @media (min-width:768px) {
      .set-this {
        object-fit: contain;
        width: 100%;
        /* margin-top: 86px; */
        margin-top: -77px;
      }
    }
  </style>
</head>

<body>
  <?php include("includes/header.php"); ?>


  <!-- main-area -->
  <main>
    <section style="background:linear-gradient(to left,#0F3C5C,#00142E) ; padding: 120px 10px 0px 10px;">
      <div class="container py-2 ">
        <div class="row">

          <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="container" style="color:white">
              <?php
              echo $_SESSION['response'];
              ?>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex  justify-content-center ">
            <div class="thimg">
              <img src="./assets/images/Contact/thanku-p.png" class="w-thanks-img" alt="">
            </div>
          </div>
        </div>
      </div>

    </section>

  </main>
  <!-- main-area-end -->

  <?php include('./includes/footer.php'); ?>

  <?php include('./includes/script.php'); ?>
</body>

</html>