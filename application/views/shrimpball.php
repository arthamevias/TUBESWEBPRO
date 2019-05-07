<!DOCTYPE html>
<html>
 <head>
  <title>Hoka-Hoka Bento</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/allstyle.css')?>">
</head>

<body>
<!-- ini kode untuk garis merah diatas -->
<div style="background: url('<?php echo base_url('assets/img/headpat.png')?>') repeat-x scroll center top #F00; height: 40px; width: 100%;"></div>
<br>
<!-- ini adalah codes untuk navbar -->
<section class="ininavbar">
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
        <a id="kotak-kuning" href="<?php echo base_url('index.php/webController/login')?>">MASUK</a>
        <span id="kotak-merah" href="#" style="background: url('<?php echo base_url('assets/img/newbag.png')?>') no-repeat scroll 21px 11px #D42227;"></span>
      </li>
    </ul>
  </div>
</div>
</section>

<br>
<!-- ini kode untuk papan Tentang Kami -->
<div id="garis"></div>
<section id="title-cont" class="ttlhome"> 
    <div class="clearfix rope">
      <div class="rope">
        <img src="<?php echo base_url('assets/img/rope.png')?>"></img>
      </div>
    </div>
    <div class="tentangkami">
        <p class="japan">
            メニュー <br>
            Menu
        </p>
    </div>
</section>
<br><br>
<div class="container">
  <div class="back">
    <a href="<?php echo base_url('index.php/webController/allmenu')?>" > << Kembali ke Menu </a>
  </div>
  <div class="row">
    <div class="col-sm-4" style="margin-left: 50px">
      <img src="<?php echo base_url('assets/img/soup/shrimpball.jpg')?>" class="card-img-top" alt="...">
      <h5 class="card-title" style="color:#D42227">Shrimp Ball</h5>
    </div>
    <table class="table table-sm" style="width: 60%; margin-left: 10px">
      <tbody>
        <tr>
          <td width="30%" class="teks">Kandungan</td>
          <td width="70%" class="tekss">
            <img src="<?php echo base_url('assets/img/udang.png')?>">
          </td><br>
        </tr>
        <tr>
          <td width="30%" class="teks">Komposisi</td>
          <td width="70%" class="tekss">Bakso yang dibuat dari olahan udang dan disajikan menggunakan daun bawang serta kuah kaldu ayam khas HokBen.</td>
        </tr>
        <tr>
          <td width="30%" class="teks">Harga</td>
          <td width="70%" class="tekss">
            <div>
              <a>Rp 23,000</a>
              <a href="#" class="message">Pesan</a>
            </div>
          </td>
        </tr>
        <tr>
          <td width="30%" class="teks">Informasi Nilai Gizi</td>
          <td width="70%" class="tekss">
            <div class="row">
              <div>
                <p style="text-align: center;"><img src="<?php echo base_url('assets/img/calories.png')?>"></p>
                <p style="margin-top: -10px; font-size: 12px; text-align: center">Kalori</p>
                <p class="mass">60 kkal</p>
              </div>
              <div style="margin-left: 30px">
                <p style="text-align: center;"><img src="<?php echo base_url('assets/img/protein.png')?>"></p>
                <p style="margin-top: -10px; font-size: 12px; text-align: center">Protein</p>
                <p class="mass">3 g</p>
              </div>
              <div style="margin-left: 40px">
                <p style="text-align: center;"><img src="<?php echo base_url('assets/img/lemak.png')?>"></p>
                <p style="margin-top: -10px; font-size: 12px; text-align: center">Lemak</p>
                <p class="mass">3 g</p>
              </div>
              <div style="margin-left: 30px">
                <p style="text-align: center;"><img src="<?php echo base_url('assets/img/karbohidrat.png')?>"></p>
                <p style="margin-top: -10px; font-size: 12px; text-align: center">Karbohidrat</p>
                <p class="mass">4 g</p>
              </div>
              <div style="margin-left: 20px">
                <p style="text-align: center;"><img src="<?php echo base_url('assets/img/natrium.png')?>"></p>
                <p style="margin-top: -10px; font-size: 12px; text-align: center">Natrium</p>
                <p class="mass">370 mg</p>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<br><br><br><br><br><br><br><br>
<section> <!-- ini footer -->
<footer id="footer" class="clearfix text-center full-grid">
    <div class="bgfooter_l" style="background: url('<?php echo base_url('assets/img/footpat.png')?>') repeat-y scroll left top transparent;"></div>
    <div class="bgfooter_r" style="background: url('<?php echo base_url('assets/img/footpatr.png')?>') repeat-y scroll left top transparent;"></div>
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