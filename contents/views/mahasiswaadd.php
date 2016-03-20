<h1>Tambah Mahasiswa</h1>
<form class="form-horizontal" method="post" action="<?php echo CONTROLLERS . 'mahasiswa_add' . EXT; ?>">
	<div class="form-group">
		<label class="control-label col-sm-2 text-left" for="nim">NIM</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="nim" name="nim">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama">Nama</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="nama" name="nama">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Gender</label>
		<div class="col-sm-6">
			<div class="radio-inline">
				<label><input type="radio" name="gender" value="Laki - laki" checked>Laki - laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label><input type="radio" name="gender" value="Perempuan">Perempuan</label>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="tgllhr">Tanggal Lahir</label>
		<div class="col-sm-6">
			<input type="date" class="form-control" id="tgllhr" name="tgllhr">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="ipk">IPK</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="ipk" name="ipk">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2"></label>
		<div class="col-sm-3">
			<!--input type="submit" class="form-control btn btn-success" value="Apply"-->
			<button class="form-control btn-success"><i class="fa fa-user-plus"></i>&nbsp;Simpan</button>
		</div>
		<div class="col-sm-3">
			<a class="form-control btn btn-danger" href="#"><i class="fa fa-close"></i>&nbsp;Batal</a>
		</div>
	</div>
</form>