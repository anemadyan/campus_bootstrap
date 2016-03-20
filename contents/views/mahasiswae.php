<h1 class="text-center">Manage Data Mahasiswa</h1>
<br>
<table class="table table-striped table-bordered table-condensed table-responsive">
	<thead>
		<tr>
			<th class="success">No.</th>
			<th class="success">Nama</th>
			<th class="success">NIM</th>
			<th class="success">Jenis Kelamin</th>
			<th class="success">Tanggal Lahir</th>
			<th class="success">IPK</th>
			<th class="success">Opsi</th>
		</tr>
	</thead>
	<tbody>
		<!-- START -->
		<?php
		$q = $mdy -> viewMahasiswa();
		$n = 0;
		while ( $x = $q -> fetch_object() ) {
			printf ( "<tr>\n" );
			printf ( "<td>%d</td>\n", ++$n);
			printf ( "<td>%s</td>\n", $x -> Nama );
			printf ( "<td>%s</td>\n", $x -> NIM );
			printf ( "<td>%s</td>\n", $x -> JenisKelamin );
			printf ( "<td>%s</td>\n", $x -> TglLahir );
			printf ( "<td>%s</td>\n", $x -> IPK );
			printf ( "<td><a class=\"col-sm-6 btn btn-warning fa fa-pencil-square-o\" href=\"?ref=Mahasiswau&amp;nim=%s\"></a><a class=\"col-sm-6 btn btn-danger fa fa-user-times\" href=\"?ref=Mahasiswad&amp;nim=%s\"></a></td>\n", $x->NIM, $x->NIM );
			printf ( "</tr>\n" );
		}
		?>
		<!-- END -->
	</tbody>
</table>