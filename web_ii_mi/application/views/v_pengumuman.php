<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Pengumuman</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
</head>
<body>
<div class="container">
<h1>Pengumuman wisuda</h1>
<h2 class="alert alert-primary">Nama : <?php echo $nama; ?></h2>
<h2>Prodi : <?php echo $prodi; ?></h2>

<a href="<?php echo site_url('pengumuman/detail')?>" 
class="btn btn-outline-success">Detail</a>



</div>

</body>
</html>





