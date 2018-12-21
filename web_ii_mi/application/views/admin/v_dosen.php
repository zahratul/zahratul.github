<div class="col-md-12">
		<div class="card">
			<div class="card-header"><?php echo $sub_judul; ?></div>
			<div class="card-body">
				<a  class="btn btn-primary btn-sm" href="<?php echo site_url('admin/Dosen/tambah');?>">Tambah Data</a>
				<hr>
				<table class="table table-border">
					<tr>
						<th>NIK</th>
						<th>Nama Dosen</th>
						<th>Alamat</th>
						<th>Tanggal Dibuat</th>
						<th>Aksi</th>
					</tr>
					<?php foreach ($isi_table as $key) { ?>
						
					<tr>
						<td><?php echo $key->nik; ?></td>
						<td><?php echo $key->nama_dosen; ?></td>
						<td><?php echo $key->alamat; ?></td>
						<td><?php echo date('d M Y', strtotime($key->created_at) ); ?></td>
						<td>
						<a href="<?php echo site_url('admin/Dosen/edit/'.$key->nik); ?>" class="btn btn-primary btn-sm">Edit</a> 
						<a href="<?php echo site_url('admin/Dosen/hapus/'.$key->nik); ?>" class="btn btn-danger btn-sm" 
						onclick="return confirm('Hapus Data?');">Hapus</a> 

						</td>
						
					</tr>
					<?php } ?>

				</table>
			</div>
		</div>
	</div>