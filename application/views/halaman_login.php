<!DOCTYPE html>
<html>
 <head>
  <title>Hoka-Hoka Bento</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/hal_login.css') ?>">
</head>

<body>

<div style="background: url('<?php echo base_url('assets/img/headpat.png')?>') repeat-x scroll center top #F00; height: 40px; width: 100%;">
  <a style="float: right;color: white; margin-right: 100px;">Hi, <?php echo $nama_user;?> </a>
</div>
<br>

<section class="ininavbar"><!-- ini adalah codes untuk navbar -->
<div class="container">
  <div class="row">
    <img src="<?php echo base_url('assets/img/logo.png')?>" class="logo">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo base_url('index.php/webController/index')?>">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo base_url('index.php/webController/allmenu')?>">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lokasi<br>Outlet</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/webController/ttgkami')?>">Tentang<br>Kami</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/webController/promo')?>">Promo<br>Saat Ini</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/webController/party')?>">Hoka<br>Party</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/webController/kontakkami')?>">Kontak<br>Kami</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/webController/karir')?>">Karir</a>
      </li>
      <li>
        <a id="kotak-kuning" href="<?php echo base_url('index.php/webController/logout')?>">LOGOUT</a>
        <span id="kotak-merah" href="#" style="background: url('<?php echo base_url('assets/img/newbag.png')?>') no-repeat scroll 21px 11px #D42227;"></span>
      </li>
    </ul>
  </div>
</div>
</section>

<section> <!-- ini codes untuk image carousel -->
<img src="<?php echo base_url('assets/img/bground.jpg')?>" class="gambarbelakang">
<br>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/carousel1.jpg')?>" class="gambar" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/carousel2.jpg')?>" class="gambar" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/carousel3.jpg')?>" class="gambar" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<section id="title-cont" class="ttlhome"> 
    <div class="clearfix rope">
      <div class="rope">
        <img src="<?php echo base_url('assets/img/rope.png')?>"></img>
      </div>
    </div>
    <div class="rekomendasi">
        <p class="japan">
            勧告 <br>
            Rekomendasi
        </p>
    </div>
</section>

<section> <!-- ini untuk menu yang di bawah -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <img src="<?php echo base_url('assets/img/homenu1.jpg')?>" class="card-img-top" alt="...">
        <h5 class="card-title">Tokyo Salad Bowl</h5>
        <a href="#" class="btn">Pesan</a>
    </div>
    <div class="col-sm-4">
      <img src="<?php echo base_url('assets/img/homenu2.jpg')?>" class="card-img-top" alt="...">
        <h5 class="card-title">Omiyage ber4</h5>
        <a href="#" class="btn">Pesan</a>
    </div>
    <div class="col-sm-4">
      <img src="<?php echo base_url('assets/img/homenu3.jpg')?>" class="card-img-top" alt="...">
        <h5 class="card-title">Bento Special 4</h5>
        <a href="#" class="btn">Pesan</a>
    </div>
  </div>
</div>
</section>
<br>
<section>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <img src="<?php echo base_url('assets/img/homenu1.jpg')?>" class="card-img-top" alt="...">
        <h5 class="card-title">Tokyo Salad Bowl</h5>
        <a href="#" class="btn">Pesan</a>
    </div>
    <div class="col-sm-4">
      <img src="<?php echo base_url('assets/img/homenu2.jpg')?>" class="card-img-top" alt="...">
        <h5 class="card-title">Omiyage ber4</h5>
        <a href="#" class="btn">Pesan</a>
    </div>
  </div>
</div>
</section>

<br><br>
<section>
<footer id="footer" class="clearfix text-center full-grid">
    <div class="bgfooter_l" style="background: url('<?php echo base_url('assets/img/footpat.png')?>') repeat-y scroll right top transparent;"></div>
    <div class="bgfooter_r" style="background: url('<?php echo base_url('assets/img/footpatr.png')?>') repeat-y scroll right top transparent;"></div>
    <div class="fluidhead clearfix">
        <div class="left grid-3-foot">
            <div class="clearfix">
                <img class="halal left" src="<?php echo base_url('assets/img/halal.png')?>"></img>
                <div class="bottom-menu"></div>
            </div>
        </div>
        <div class="left grid-3-foot text-center">
          <p class="red">
            <a href="tel:(021)500505">
              <img src="<?php echo base_url('assets/img/hokben505.png')?>"></img>
            </a>
          </p>
          <p class="tulisan_footer">
            All images and materials are copyright protected and are the property of Hoka Hoka Bento Group. Unauthorized use and/or duplication of these images and materials without written permission is against the law.
          </p>
        </div>
        <div class="left grid-3-foot text-right">
          <p>
            <span>
              FIND MORE FUN HERE
            </span>
            <a class="social fb" title="Facebook" target="_blank" href="https://www.facebook.com/pages/Hoka-Hoka-bento/22801653893" style="background: url('<?php echo base_url('assets/img/fb.png')?>') no-repeat scroll center top transparent;"></a>
            <a class="social twitter" title="Twitter" target="_blank" href="https://twitter.com/HokBen" style="background: url('<?php echo base_url('assets/img/tw.png')?>') no-repeat scroll center top transparent;"></a>
            <a class="social youtube" title="Youtube" target="_blank" href="https://www.youtube.com/hokbenable" style="background: url('<?php echo base_url('assets/img/yt.png')?>') no-repeat scroll center top transparent;"></a>
          </p>
        </div>
    </div>
</footer>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
 </html>