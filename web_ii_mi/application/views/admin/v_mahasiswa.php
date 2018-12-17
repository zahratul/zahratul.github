<div class="col-md-12">
		<div class="card">
			<div class="card-header"><?php echo $sub_judul; ?></div>
			<div class="card-body">
				<a  class="btn btn-primary btn-sm" href="<?php echo site_url('admin/Mahasiswa/tambah');?>">Tambah Data</a>
				<hr>
				<table class="table table-border">
					<tr>
						<th>NIM</th>
						<th>Nama Mahasiswa</th>
						<th>Program Studi</th>
						<th>Tanggal Dibuat</th>
						<th>Aksi</th>
					</tr>
					<?php foreach ($isi_table as $key) { ?>
						
					<tr>
						<td><?php echo $key->nim; ?></td>
						<td><?php echo $key->nama_mahasiswa; ?></td>
						<td><?php echo $key->program_studi; ?></td>
						<td><?php echo date('d M Y', strtotime($key->created_at) ); ?></td>
						<td>
						<a href="" class="btn btn-primary btn-sm">Edit</a> 
						<a href="" class="btn btn-danger btn-sm">Hapus</a> 

						</td>
						
					</tr>
					<?php } ?>

				</table>
			</div>
		</div>
	</div>