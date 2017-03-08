<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tyacon 2017 -- Home</title>
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto" rel="stylesheet">
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyles.css" rel="stylesheet">
  </head>
  <body id="home">

    <section class="container">
      <div class="content row">
      <?php include "_/components/php/header.php"; ?>
      <?php include "_/components/php/snippet-carousel.php"; ?>
        <section class="main col col-md-8">
          <?php include "_/components/php/article-intro.php"; ?>
          <?php include "_/components/php/article-faculty.php"; ?>
          <?php include "_/components/php/article-aboutthevenue.php"; ?>
          <?php include "_/components/php/article-partners.php"; ?>
        </section><!-- main -->

        <section class="sidebar col col-md-4">
          <?php include "_/components/php/aside-dates.php"; ?>
          <?php include "_/components/php/aside-register.php"; ?>
          <?php include "_/components/php/aside-program.php"; ?>
          <?php include "_/components/php/aside-lastyear.php"; ?>
        </section><!-- sidebar -->

      </div><!-- content -->

    <?php // include "_/components/php/article-socials.php"; ?>
    <?php include "_/components/php/footer.php"; ?>

    </section><!-- container -->

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>