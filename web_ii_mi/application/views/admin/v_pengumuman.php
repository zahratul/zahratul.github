<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-info" style="background-color: teal"><?php echo $sub_judul; ?></div>
			<div class="card-body">

			<?php 

			if ($this->session->flashdata('info')) {

				echo  "<div class = 'alert alert-primary'>".$this->session->flashdata('info') . "</div>";
			}


			 ?>

			<a href="<?php echo site_url('admin/pengumuman/tambah'); ?>" 
			class="btn btn-primary">Tambah Data</a> <br> <br>

			<?php 
			foreach ($isi_tabel as $value) : 
				
			 ?>

			<div style="border: 1px solid red; padding: 15px; margin-bottom: 10px">


			<div class="row">
				<div class="col-sm-1">
					<img src="<?= base_url('assets/VtrZra2.jpg') ?>" class="img-thumbnail">
					
				</div>
				<div class="col-sm-4">
					Penulis <strong><?= $value->penulis; ?></strong>
					<br>
					29-10-1999
				</div>

				<div class="col-xl-7">
					
					<a href="<?= site_url('admin/pengumuman/hapus/' . $value->id); ?>"
					class = "btn btn-danger btn-sm" onclick = "return confirm('Anda Yakin ?')">Hapus</a>

					<a href="<?= site_url('admin/pengumuman/edit/'. $value->id); ?>"
					class = "btn btn-warning btn-sm">Edit</a>
				</div>



			</div>
			<div class="row">
				<div class="col-sm-12">
				<strong><?= $value->judul; ?></strong>
					<p><?= $value->isi; ?></p>
					
				</div>
				
			</div>

			 </div>
<?php endforeach ?>


		</div>
	</div>