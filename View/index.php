<!Doctype html>
<html lang="en" prefix="www.ogp.me/ns#">
  <head>
      <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
      <meta http-equiv="content-type" content="text/html;charset=utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
      <meta name="author" content="konrad">
      <title>Fluffy | Home</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="css/default.css" type="text/css">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <meta name="keywords" content="world,facebook,face,faces,compare,hotornot,family,fun">
      <meta name="description" content=":::">
      <meta name="abstract" content="::">
      <meta name="robots" content="noopd,noydir">

      <meta proprety="og:title" content="Fluffy | Home">
      <meta proprety="og:url" content="http://fluffy.com/">
      <meta proprety="og:image" content="og.png">
      <meta proprety="og:description" content="...">

      <!--[if IE]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

     <style type="text/css">
     a{
       color: #fff;
     }
     .init{
       background: url('../images/bg.png') repeat-x;
       padding: 0 0 60px 0;
     }
     .oxp-45{
       margin-top: 17px;
     }
    </style>
  </head>

  <body>
    <div class="container-fluid init">
      <div class="container">
        <header class="row">
          <div class="col-md-12" style="margin-top: 200px">
            <div class="row">
              <div class="col-md-12">
            <h1 class="text-center"><a href="#">Fluffy</a></h1>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 oxp-45">
            <form class="form-horizontal" method="get" action="index.php">
              <div class="form-group">
                    <input type="text" value="<?= $value= ($_GET['search']) ? $_GET['search']:NULL; ?>" class="form-control" name="search" style="border:0 !important;">
                </div>
            </form>
          </div>
          </div>
          </div>




        </header>
      </div>
    </div>
  </body>
</html>
