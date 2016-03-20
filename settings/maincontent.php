<?php 
if ( isset( $_GET['ref'] ) ) {
	$ref = strtolower( $_GET['ref'] );
	if ( $_GET['ref'] == 'Mahasiswa' ) {
		require_once VIEWS . $ref . EXT;
	} elseif ( $_GET['ref'] == 'MahasiswaAdd' ) {
		require_once VIEWS . $ref . EXT;
	} elseif ( $_GET['ref'] == 'Mahasiswae' ) {
		require_once VIEWS . $ref . EXT;
	} elseif ( $_GET['ref'] == 'Mahasiswau' ) {
		require_once VIEWS . 'mahasiswaedit' . EXT;
	} elseif ( $_GET['ref'] == 'Mahasiswad' ) {
		$mdy->delMahasiswa ( $_GET['nim'] );
	}
	else {
		require_once 'contents/error' . EXT;
	}
} else {
	require_once 'contents/default.php';
}