<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'login';
$route['404_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;

//HOMEPAGE
$route['homepage'] = 'Homepage';

///////////////////////////////// PRODUK
	//---------------- AKTIF
	$route['produk'] = 'Produk';
	$route['produk/produk-list'] = 'Produk/index';
	$route['produk/tambah-produk'] = 'Produk/tambahProduk';
	$route['produk/ubah-produk/(:any)']= "Produk/ubahProduk/$1";
	//---------------- NON-AKTIF
	$route['produk/tambah-produk-na'] = 'Produk/tambahProdukNa';
	$route['produk/ubah-produk-na/(:any)/(:any)'] = 'Produk/ubahProdukNa/$1/$2';

///////////////////////////////// LAPORAN
	//---------------- AKTIF
	$route['laporan'] = 'Laporan';
	$route['laporan/laporan-list'] = 'Laporan/index';
	$route['laporan/tambah-laporan'] = 'Laporan/tambahLaporan';
	$route['laporan/ubah-laporan/(:any)']= "Laporan/ubahLaporan/$1";
	$route['laporan/detail-laporan/(:any)']= "Laporan/detailLaporan/$1";

	//---------------- NON-AKTIF
	$route['laporan'] = 'Laporan';
	$route['laporan/tambah-laporan-na'] = 'Laporan/tambahLaporanNa';
	$route['laporan/ubah-laporan-na/(:any)']= "Laporan/ubahLaporanNa/$1";
	$route['laporan/detail-laporan-na/(:any)']= "Laporan/detailLaporanNa/$1";


///////////////////////////////// TABEL PELURUHAN
	$route['tabel-peluruhan'] = 'Peluruhan';
	$route['tabel-peluruhan/pilih-data/(:any)']= "Peluruhan/form/$1";
	$route['tabel-peluruhan/detail-peluruhan/(:any)/(:any)/(:any)']= "Peluruhan/detail/$1/$2/$3";

///////////////////////////////// CETAK LAPORAN
	//---------------- AKTIF
	$route['cetak/pilih-cetak/(:any)']= "Cetakpdf/pilih/$1";
	//$route['cetak/cetak-pdf/(:any)/(:any)/(:any)/(:any)']= "Cetakpdf/cetak/$1/$2/$3/$4";

///////////////////////////////// RADPRO
	$route['radpro-calculator'] = 'Radpro';

///////////////////////////////// USER
	// SU
	$route['user/su/tambah-user'] = 'user/suTambahUser';
	$route['user/su/ubah-user/(:any)'] = 'user/suUbahUser/$1';
	$route['user/su/hapus/(:any)'] = 'user/suHapusUser/$1';
	// USER
	$route['user/op/read'] = 'user/opRead';
	$route['user/op/ubah-data/(:any)'] = 'user/opUbahData/$1';


///////////////////////////////// LOG
	$route['log-activity'] = 'Clog';
	$route['log-activity/detail-bahan/(:any)'] = 'Clog/detailLogBahan/$1';
	$route['log-activity/detail-bahan-na/(:any)'] = 'Clog/detailLogBahanNa/$1';
	$route['log-activity/detail-lap/(:any)'] = 'Clog/detailLogLap/$1';
	$route['log-activity/detail-lap-na/(:any)'] = 'Clog/detailLogLapNa/$1';
	$route['log-activity/log-filter'] = 'Clog/logFilter';