<div class="container">
	<div class="card">
		<div class="card-header">
			Form Tambah Data Mahasiswa
		</div>
		<div class="card-body">
		<?php if (validation_errors()) :?>
		<div class="alert alert-danger" role="alert">
			<?= validation_errors() ?>
		</div>
		<?php endif ?>
			<form action="" method="POST">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
				<div class="form-group">
					<label for="nim">Nim</label>
					<input type="number" class="form-control" id="nim" name="nim">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="jurusan">Jurusan</label>
					<select class="form-control" name="jurusan" id="jurusan" name="jurusan">
						<?php foreach ($jurusan as $key):?> 
						<option value="<?=$key?>" selected><?=$key?>
						</option>
					<?php endforeach;?>
					</select>
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
			</form>
		</div>
	</div>
</div>