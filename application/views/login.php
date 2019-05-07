<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/style/login.css')?>">
</head>
<?php 
        if ($this->session->flashdata('regis_alert')=='registrasi_berhasil'){
            echo "<script>alert('Registrasi Succes');</script>";
        }
    ?>
<body>
	
<div id="background" style="background: url('<?php echo base_url('assets/img/bg.png') ?>') repeat scroll left top #FDFDFD;">
<div class="container">
	<div class="row">
		<div class="mbamba">
			<img src="<?php echo base_url('assets/img/login.png') ?>">
		</div>
		<div class="kotakbesar">
			<div>
				<a class="close" href="#" style="background: url('<?php echo base_url('assets/img/close.png') ?>') no-repeat scroll center top transparent;"></a>
			</div>
			<p class="text">Silakan Masukkan Data Diri Anda</p>
			<form method="POST" action="<?php echo base_url('index.php/webController/halaman_login')?>">
				<input id="uname" type="text" placeholder="Username" name="username" required="required" style="background: url('<?php echo base_url('assets/img/user.png') ?>') no-repeat scroll 10px center #FFF;"></input>
				<input id="pw" type="password" placeholder="Password" name="password" required="required" style="background: url('<?php echo base_url('assets/img/password.png') ?>') no-repeat scroll 10px center #FFF;"></input>
				<input class="sub" type="submit" name="submit" value="LOGIN"></input>
			</form>
			<form method="POST" action="linkhome">
				<input class="sub" type="submit" value="PESAN SEBAGAI TAMU"></input>
			</form>
		</div>
		<div id="register">
			<p class="text">Jadilah Sahabat HokBen dan Dapatkan Penawaran Khusus</p>
			<form method="POST"action="<?php echo base_url('index.php/webController/registrasi')?>">
			<input class="sub" type="submit" on.click="parent.location = '<?php echo base_url('index.php/webController/registrasi')?>'" value="Gabung disini"></input>
			</form>
		</div>
	</form>
	</div>
</div>
</div>
</body>
</html>