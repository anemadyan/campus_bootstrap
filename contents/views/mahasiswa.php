<h1 class="text-center">Master Data Mahasiswa</h1>
<a class="btn btn-success fa fa-user-plus" href="?ref=MahasiswaAdd">&nbsp;&nbsp;Tambah Data</a>
<br><br>
<table class="table table-striped table-bordered table-condensed table-responsive">
	<thead>
		<tr>
			<th class="success">No.</th>
			<th class="success">Nama</th>
			<th class="success">NIM</th>
			<th class="success">Jenis Kelamin</th>
			<th class="success">Tanggal Lahir</th>
			<th class="success">IPK</th>
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
			printf ( "</tr>\n" );
		}
		?>
		<!-- END -->
	</tbody>
</table>