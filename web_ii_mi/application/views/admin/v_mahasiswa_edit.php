<div class="col-md-2">
	
</div>
<div class="col-md-8" align="center">
		<div class="card">
			<div class="card-header bg-info" style="background-color: teal"><?php echo $sub_judul; ?></div>
			<div class="card-body">

			<form action="<?php echo site_url('admin/Mahasiswa/proses_edit'); ?>" method="post">
				<div class="form-group">
					<label>NIM</label>
					<input class="form-control" name="nim" value="<?php echo $isi_data->nim; ?>">
				</div>
				
				<div class="form-group">
					<label>Nama Mahasiswa</label>
					<input class="form-control" name="nama_mahasiswa" value="<?php echo $isi_data->nama_mahasiswa; ?>">
					
				</div>
				<div class="form-group">
					<label>Program Studi</label>
					<select class="form-control" name="program_studi">
						<option value="<?php echo $isi_data->program_studi; ?>"><?php echo $isi_data->program_studi;
						 ?></option>
						<option value="D3 MI">D3 MI</option>
						<option value="D3 TI">D3 TI</option>
						<option value="S1 TI">S1 TI</option>
						
					</select> 
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
