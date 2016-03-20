<?php 
final class NoKidding {
	
	public function __construct ( $a, $b, $c, $d ) {
		$this->db_host = $a; 
		$this->db_usr = $b;
		$this->db_pass = $c;
		$this->db_name = $d;
	} 
	
	# Properties 
	private $db_host; 
	private $db_usr; 
	private $db_pass; 
	private $db_name; 


	
	
	
	
	# Methods 
	protected function database (  ) {
		$db = new mysqli ( $this->db_host, $this->db_usr, $this->db_pass, $this->db_name );
		return $db;
	}
	
	
	# Setters 

	
	
	# Getters 

	
	
	# Getters only 

	private function autoNIM (  ) {
		$s = "SELECT NIM FROM mahasiswa ";
		$q = $this->database()->query( $s );
		$o = $q->fetch_object();
		$n = $o->NIM;
		$nx = substr($n, 0 -3); 
		$nn = $nx++;
		$nj = strlen($nn);

		if ( !$o ) {
			$nim = '001';
		} elseif ($nj == 1) {
			$nim = '00';
		} elseif ($nj == 2) {
			$nim = '0';
		} elseif ($nj == 3) {
			$nim = '';
		}
	}
	
	public function getMenu (  ) {
		$s = "SELECT * FROM menu ORDER BY idMenu ASC";
		$q = $this->database()->query( $s );
		while ( $menu = $q->fetch_object() ) {
			$idMenu = $menu->idMenu;
			$s2 = "SELECT * FROM menusub WHERE idMenu = $idMenu ORDER BY idSub ASC";
			$submenu = $this->database()->query( $s2 );

			if ( $menu->Name == 'Master' ) {
				$class_x = "<i class=\"fa fa-database\">&nbsp;";
				$class_y = "</i>";
			} elseif ( $menu->Name == 'Manage' ) {
				$class_x = "<i class=\"fa fa-edit\">&nbsp;";
				$class_y = "</i>";
			}
			else {
				$class_x = NULL;
				$class_y = NULL;
			}


			if ( $submenu->num_rows == 0 ) {
				printf ( "<li><a href=\"%s\">%s</a></li>\n", $menu->Reference, $menu->Name );
			} else {
				printf ( "<li class=\"dropdown\">\n" );
				printf ( "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">%s%s%s <span class=\"caret\"></span></a>\n", $class_x, $menu->Name, $class_y );
				printf ( "<ul class=\"dropdown-menu\">\n" );
				while ( $menuSub = $submenu->fetch_object() ) {
					printf ( "<li><a href=\"%s\"><i class=\"%s\">&nbsp;%s</i></a></li>\n", $menuSub->Reference, $menuSub->icon, $menuSub->Name );
				}
				printf ( "</ul>\n" );
				printf ( "</li>\n" );
			}
		}
	}

	public function getMenu2 (  ) {
		$s = "SELECT * FROM menu2 ORDER BY idMenu ASC";
		$q = $this->database()->query( $s );
		while ( $menu = $q->fetch_object() ) {
			$idMenu = $menu->idMenu;
			$s2 = "SELECT * FROM menusub2 WHERE idMenu = $idMenu ORDER BY idSub ASC";
			$submenu = $this->database()->query( $s2 );
			if ( $submenu->num_rows == 0 ) {
				printf ( "<li><a href=\"%s\">%s</a></li>\n", $menu->Reference, $menu->Name );
			} else {
				printf ( "<li class=\"dropdown\">\n" );
				printf ( "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">%s <span class=\"caret\"></span></a>\n", $menu->Name );
				printf ( "<ul class=\"dropdown-menu\">\n" );
				while ( $menuSub = $submenu->fetch_object() ) {
					printf ( "<li><a href=\"%s\">%s</a></li>\n", $menuSub->Reference, $menuSub->Name );
				}
				printf ( "</ul>\n" );
				printf ( "</li>\n" );
			}
		}
	}

	public function viewMahasiswa (  ) {
		$s = "SELECT * FROM mahasiswa ORDER BY NIM ASC";
		return $q = $this->database()->query( $s );
	}

	public function viewMahasiswaE ( $nim ) {
		$s = "SELECT * FROM mahasiswa WHERE NIM = '$nim'";
		return $q = $this->database()->query( $s ); 
	}

	public function editMahasiswa ( $nim, $nimn, $nama, $jns, $tgl, $ipk ) {
		$nama = mysql_real_escape_string($nama);
		$s = "UPDATE mahasiswa SET NIM = '$nimn', Nama = '$nama', JenisKelamin = '$jns', TglLahir = '$tgl', IPK = $ipk WHERE NIM = '$nim'";
		$q = $this->database()->query( $s ); 
		if ( $q ) {
			header ( 'location:../../?ref=Mahasiswae' );
		} else {
			echo 'ERROR';
		}
	}

	public function delMahasiswa ( $nim ) {
		$s = "DELETE FROM mahasiswa WHERE NIM = '$nim'";
		$q = $this->database()->query( $s ); 
		if ( $q ) {
			header ( 'location:index?ref=Mahasiswae' );
		} else {
			echo 'ERROR';
		}
	}

	public function addMahasiswa ( $nim, $nama, $jns, $tgl, $ipk ) {
		$nama = mysql_real_escape_string($nama);
		$s = "INSERT into mahasiswa ( NIM, Nama, JenisKelamin, TglLahir, IPK ) VALUES ( '$nim', '$nama', '$jns', '$tgl', $ipk )";
		$q = $this->database()->query( $s );
		if ( $q ) {
			header ( 'location:../../?ref=Mahasiswa' );
		} else {
			echo 'ERROR';
		}
	}

}
