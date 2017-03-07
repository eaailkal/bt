<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tyacon 2017 -- Venue</title>
		<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyles.css" rel="stylesheet">
  </head>
  <body id="venue">

    <section class="container">
      <div class="content row">
      <?php include "_/components/php/header.php"; ?>
        <section class="main col col-lg-8">
          <?php include "_/components/php/article-venues.php"; ?>
        </section><!-- main -->

        <section class="sidebar col col-lg-4">
          <?php include "_/components/php/aside-register.php"; ?>
          <?php include "_/components/php/aside-lastyear.php"; ?>
          <?php include "_/components/php/aside-faculty.php"; ?>
          <?php include "_/components/php/aside-program.php"; ?>
        </section><!-- sidebar -->

      </div><!-- content -->

    <?php include "_/components/php/footer.php"; ?>

    </section><!-- container -->

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>