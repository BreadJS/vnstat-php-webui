<?php
$dir = "/var/www/html";
$interface = "eth0";
$rateunit = "0";

exec('vnstati -s -ru '.$rateunit.' -i '.$interface.' -o '.$dir.'/img/vnstat-s.png');
exec('vnstati -hg -ru '.$rateunit.' -i '.$interface.' -o '.$dir.'/img/vnstat-hg.png');
exec('vnstati -5 -ru '.$rateunit.' -i '.$interface.' -o '.$dir.'/img/vnstat-5.png');

exec('vnstati -h -ru '.$rateunit.' -i '.$interface.' -o '.$dir.'/img/vnstat-hourly.png');
exec('vnstati -d -ru '.$rateunit.' -i '.$interface.' -o '.$dir.'/img/vnstat-daily.png');
exec('vnstati -m -ru '.$rateunit.' -i '.$interface.' -o '.$dir.'/img/vnstat-monthly.png');
exec('vnstati -y -ru '.$rateunit.' -i '.$interface.' -o '.$dir.'/img/vnstat-yearly.png');
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title>vnStat</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
    main {
      margin-top:60px;
    }

    .mb-10px {
      margin-bottom:10px;
    }

    @media (max-width: 992px) {
      img {
        width:100%;
      }
    }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">vnStati</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="row">
      <div class="col-12 col-lg-6 text-center text-lg-end">

        <img class="mb-10px" src="img/vnstat-s.png"><br>
        <img class="mb-10px" src="img/vnstat-hg.png"><br>
        <img class="mb-10px" src="img/vnstat-5.png"><br>

      </div>
      <div class="col-12 col-lg-6 text-center text-lg-start">
        
        <img class="mb-10px" src="img/vnstat-hourly.png"><br>
        <img class="mb-10px" src="img/vnstat-daily.png"><br>
        <img class="mb-10px" src="img/vnstat-monthly.png"><br>
        <img class="mb-10px" src="img/vnstat-yearly.png"><br>

      </div>
    </div>
  </main>


  <script src="js/bootstrap.min.js"></script>
</body>

</html>
