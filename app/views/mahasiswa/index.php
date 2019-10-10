<div class="container mt-5">
	
	<!-- flass message -->
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>
	<!-- end notification -->

	<div class="row mb-3">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
  				Tambah Data
			</button>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<form action="<?php echo BASEURL; ?>/mahasiswa/cari" method="POST">
				
				<div class="input-group ">
					  <input type="text" class="form-control" placeholder="Cari Mahasiswa.." name="keyword" id="keyword" autocomplete="off">
					  <div class="input-group-append">
					    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
					  </div>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<!-- modalbox boostrap  -->
			 <h3 class="mt-4">Daftar Mahasiswa</h3>
				<ul class="list-group mt-4">
				<?php foreach ($data['mhs'] as $mhs) :?>
 				 <li class="list-group-item ">
 				 	<?php echo $mhs['nama']; ?>
 				 		<a href="<?php echo BASEURL; ?>/mahasiswa/hapus/<?php echo $mhs['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm
 				 		('are you sure ?');">Delete</a>
 				 		<a href="<?php echo BASEURL; ?>/mahasiswa/ubah/<?php echo $mhs['id']; ?>" class="badge badge-warning float-right ml-2 tampilModalUbah"data-toggle="modal" data-target="#formModal" data-id="<?php echo $mhs['id']; ?>">Edit</a>
 				 		<a href="<?php echo BASEURL; ?>/mahasiswa/detail/<?php echo $mhs['id']; ?>" class="badge badge-info float-right ml-2">Detail</a>
 				 	</li>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo BASEURL; ?>/mahasiswa/tambah" method="post">
        	<input type="hidden" name="id" id="id"> 
			<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" name="nama" ">
			</div>
			
			<div class="form-group">
			    <label for="nrp">NRP</label>
			    <input type="number" class="form-control" id="nrp" name="nrp" ">
			</div>

			<div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email" name="email" ">
			</div>

			<div class="form-group">
			    <label for="jurusan">Jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			      <option value="Teknik Informatika">Teknik Informatika</option>
				  <option value="Teknik Mesin">Teknik Mesin</option>
				  <option value="Teknik Industri">Teknik Industri</option>
				  <option value="Teknik Elektro">Teknik Elektro</option>
				  <option value="Teknik Perkapalan">Teknik Perkapalan</option>
				  <option value="Teknik Planologi">Teknik Planologi</option>
			    </select>
  			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>


