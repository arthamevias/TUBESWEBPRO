<!DOCTYPE html>
<html>
 <head>
  <title>Hoka-Hoka Bento</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/regis.css')?>">
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
<!-- ini kode untuk papan Registrasi -->
<div id="garis"></div>
<section id="title-cont" class="ttlhome"> 
    <div class="clearfix rope">
      <div class="rope">
        <img src="<?php echo base_url('assets/img/rope.png')?>"></img>
      </div>
    </div>
    <div class="tentangkami">
        <p class="japan">
            regis<br>
            Registrasi
        </p>
    </div>
</section>

<section id="konten">
  <div class="kotaktengah">
    <div>
    <p class="text">Jadilah Sahabat HokBen dan Dapatkan Penawaran Khusus!</p>
    </div>
    <form accept-charset="utf-8" method="POST" action="<?php echo base_url('index.php/webController/regis_akun_a')?>">
      <div class="kotakform"> <!-- ini tempat untuk form -->
        <div class="bagian kiri">
          <table class="table-regis" width="100%">
            <tbody>
              <tr>
                <td width="30%">Username</td>
                <td width="70%">
                  <input class="kotakinput" type="text" value="" name="username" required="required"></input>
                </td>
              </tr>
              <tr>
                <td width="30%">Kata Sandi</td>
                <td width="70%"><input class="kotakinput" type="password" value="" name="password" required="required"></input></td>
              </tr>
              <tr>
                <td width="30%">Ulangi Kata Sandi</td>
                <td width="70%"><input class="kotakinput" type="password" value="" name="ulang" required="required"></input></td>
              </tr>
              <tr>
                <td width="30%">Nama</td>
                <td width="70%"><input class="kotakinput" type="text" value="" name="nama" required="required"></input></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><input class="kotakinput" type="email" value="" name="email" required="required"></input></td>
              </tr>
              <tr>
                <td>Telepon</td>
                <td><input class="kotakinput" type="tel" value="" name="telepon" required="required"></input></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="bagian kiri">
          <table class="table-regis" width="100%">
            <tbody>
              <tr>
                <td>Kategori Alamat</td>
                <td>
                  <input type="text" class="kotakinput" placeholder="contoh: rumah sendiri" value="" name="kategori" required="required"></input>
                </td>
              </tr>
              <tr>
                <td>Tipe Alamat</td>
                <td>
                  <select name="tipe_alamat" required="required">
                    <option value="Rumah">Rumah</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Kantor">Kantor</option>
                    <option value="Hotel">Hotel</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="30%">Kota</td>
                <td width="70%">
                  <select name="jp_input" class="dropdown">
                    <option value="Bandung">Bandung</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Cilegon">Cilegon</option>
                    <option value="Cirebon">Cirebon</option>
                    <option value="Denpasar">Denpasar</option>
                    <option value="Depok">Depok</option>
                    <option value="Jakarta Barat">Jakarta Barat</option>
                    <option value="Jakarta Pusat">Jakarta Pusat</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Detail Alamat</td>
                <td>
                  <textarea name="address" required="required"></textarea>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <input class="btn" type="submit" name="submit" value="Gabung disini"></input>
    </form>
    <div>
    </div>
  </div>
</section>

<section> <!-- ini footer -->
<footer id="footer" class="clearfix text-center full-grid">
    <div class="bgfooter_l" style="background: url('<?php echo base_url('assets/img/footpat.png')?>') repeat-y scroll left top transparent;"></div>
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