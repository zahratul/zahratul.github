<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-info" style="background-color: teal"><?php echo $sub_judul; ?></div>
			<div class="card-body">

			<form action="<?php echo site_url('admin/pengumuman/proses_tambah'); ?>" method="post">
				
				<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control" name="judul">
					
				</div>

				<div class="form-group">
				<label>Isi</label>
				<textarea name="isi" cols="30" rows="5" class="form-control"></textarea>
					
				</div>

				<div class="form-group">
				<label>Penulis</label>
				<input type="text" class="form-control" name="penulis">
					
				</div>
				<input type="submit" name="submit" value="Simpan" class="btn btn-succes">
				<a href="<?php echo site_url('admin/pengumuman'); ?>">Batal</a>



			</form>



			 </div>
		</div>
	</div>