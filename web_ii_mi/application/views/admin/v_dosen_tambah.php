<div class="col-md-2">
	
</div>
<div class="col-md-8" align="center">
		<div class="card">
			<div class="card-header bg-info" style="background-color: teal"><?php echo $sub_judul; ?></div>
			<div class="card-body">

			<form action="<?php echo site_url('admin/Dosen/proses_tambah'); ?>" method="post">
				<div class="form-group">
					<label>NIK</label>
					<input class="form-control" name="nik">
				</div>
				
				<div class="form-group">
					<label>Nama Dosen</label>
					<input class="form-control" name="nama_dosen">
					
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input class="form-control" name="alamat">
					 
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Simpan</button>
					
				</div>
				</form>
				</div>
				</div>
	<div class="col-md-2">
	
</div>
</div>
