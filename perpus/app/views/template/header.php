<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "icon" href ="<?=BASEURL;?>/public/img/itats.png">
    <title>Perpustakaan | <?=$data['title']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark text-light bg-primary">
  <div class="container-md">
  <a class="navbar-brand" href="<?=BASEURL;?>">Perpustakaan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=BASEURL?>?transaksi">Transaksi</a>
      </li>
      <!--
      <li class="nav-item">
        <a class="nav-link" href="<?=BASEURL;?>About">About</a>
      </li> -->
    </ul>
  </div>
</div>
</nav>