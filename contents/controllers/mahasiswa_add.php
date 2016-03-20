<?php 
require_once '../../settings/configuration.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tgllhr = $_POST['tgllhr'];
$ipk = $_POST['ipk'];

$mdy -> addMahasiswa ( $nim, $nama, $gender, $tgllhr, $ipk );
