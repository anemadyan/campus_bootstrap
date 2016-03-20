<?php 
$q = $mdy->viewMahasiswaE( $_GET['nim'] );
$x = $q->fetch_object();
?>
<h1>Edit Mahasiswa</h1>
<form class="form-horizontal" method="post" action="<?php echo CONTROLLERS . 'mahasiswa_edit' . EXT; ?>">
<input type="hidden" name="nimx" value="<?php echo $x->NIM; ?>">
	<div class="form-group">
		<label class="control-label col-sm-2 text-left" for="nim">NIM</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="nim" name="nim" value="<?php echo $x->NIM; ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama">Nama</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $x->Nama; ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Gender</label>
		<div class="col-sm-6">
			<div class="radio-inline">
				<label><input type="radio" name="gender" value="Laki - laki" <?php if ($x->JenisKelamin == 'Laki - laki') { echo 'checked'; } ?>>Laki - laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label><input type="radio" name="gender" value="Perempuan" <?php if ($x->JenisKelamin == 'Perempuan') { echo 'checked'; } ?>>Perempuan</label>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="tgllhr">Tanggal Lahir</label>
		<div class="col-sm-6">
			<input type="date" class="form-control" id="tgllhr" name="tgllhr" value="<?php echo $x->TglLahir; ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="ipk">IPK</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="ipk" name="ipk" value="<?php echo $x->IPK; ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2"></label>
		<div class="col-sm-3">
			<!--input type="submit" class="form-control btn btn-success" value="Apply"-->
			<button class="form-control btn-success"><i class="fa fa-check"></i>&nbsp;Simpan</button>
		</div>
		<div class="col-sm-3">
			<a class="form-control btn btn-danger" href="#"><i class="fa fa-close"></i>&nbsp;Batal</a>
		</div>
	</div>
</form>