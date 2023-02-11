<?php
if (isset($_GET['page'])) {

	switch ($_GET['page']) {
		case 'pasien2':
				require_once 'app/pasien2/views/index.php';
				break;
		case 'tambah-pasien2':
				require_once 'app/pasien2/views/create.php';
				break;
		case 'edit-pasien2':
				require_once 'app/pasien2/views/edit.php';
				break;
		case 'hapus-pasien2':
				require_once 'app/pasien2/proses/delete.php';
				break;
		case 'ruang2':
			require_once 'app/ruang2/views/index.php';
			break;
		case 'tambah-ruang2':
			require_once 'app/ruang2/views/create.php';
			break;
		case 'edit-ruang2':
			require_once 'app/ruang2/views/edit.php';
			break;
		case 'hapus-ruang2':
			require_once 'app/ruang2/proses/delete.php';
			break;
		case 'rekam-medis2':
			require_once 'app/rekam-medis2/views/index.php';
			break;
		case 'tambah-rekam-medis2':
			require_once 'app/rekam-medis2/views/create.php';
			break;
		case 'edit-rekam-medis2':
			require_once 'app/rekam-medis2/views/edit.php';
			break;
		case 'hapus-rekam-medis2':
			require_once 'app/rekam-medis2/proses/delete.php';
			break;
		case 'lap-rekam-medis':
			require_once 'app/laporan/views/rekam-medis.php';
			break;
	}
} else {
	require_once 'app/dashboard/views/index2.php';
}
