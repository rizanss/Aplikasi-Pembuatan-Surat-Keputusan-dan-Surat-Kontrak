<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index', ['filter' => 'auth']);

// Authentication routes
$routes->get('/login', 'Auth::login');
$routes->post('/auth/attemptLogin', 'Auth::attemptLogin');
$routes->get('/register', 'Auth::register');
$routes->post('/auth/attemptRegister', 'Auth::attemptRegister');
$routes->get('/logout', 'Auth::logout');

// User routes
$routes->get('/dashboard', 'User::dashboard', ['filter' => 'auth']);
$routes->get('/surat-kontrak', 'User::suratKontrak', ['filter' => 'auth']);
$routes->post('/proses-surat-kontrak', 'User::prosesSuratKontrak', ['filter' => 'auth']);
$routes->post('/getPetugas', 'User::getPetugas', ['filter' => 'auth']);
$routes->get('/surat-keputusan', 'User::suratKeputusan', ['filter' => 'auth']);
$routes->post('/proses-surat-keputusan', 'User::prosesSuratKeputusan', ['filter' => 'auth']);
$routes->post('/getPenanggungjawab', 'User::getPenanggungjawab', ['filter' => 'auth']);

// Admin routes
$routes->get('/pegawai-bps', 'Admin::pegawaibps', ['filter' => 'auth']);
$routes->get('/mitra-statistik', 'Admin::mitra', ['filter' => 'auth']);
$routes->get('/penanggungjawab', 'Admin::penanggungjawab', ['filter' => 'auth']);
$routes->get('/riwayat-pengisian', 'Admin::riwayatPengisian', ['filter' => 'auth']);
$routes->post('/pegawai-bps/store', 'Admin::storePegawai', ['filter' => 'auth']);
$routes->post('/pegawai-bps/update/(:num)', 'Admin::updatePegawai/$1', ['filter' => 'auth']);
$routes->post('/pegawai-bps/delete', 'Admin::deletePegawai', ['filter' => 'auth']);
$routes->post('/mitra-statistik/store', 'Admin::storeMitra', ['filter' => 'auth']);
$routes->post('/mitra-statistik/update/(:num)', 'Admin::updateMitra/$1', ['filter' => 'auth']);
$routes->post('/mitra-statistik/delete', 'Admin::deleteMitra', ['filter' => 'auth']);
$routes->post('/penanggungjawab/store', 'Admin::storePenanggungjawab', ['filter' => 'auth']);
$routes->post('/penanggungjawab/update/(:num)', 'Admin::updatePenanggungjawab/$1', ['filter' => 'auth']);
$routes->post('/penanggungjawab/delete', 'Admin::deletePenanggungjawab', ['filter' => 'auth']);

// Role-based routes
$routes->get('/dashboard', 'User::dashboard', ['filter' => 'role:user']);
$routes->get('/surat-kontrak', 'User::suratKontrak', ['filter' => 'role:user']);
$routes->post('/proses-surat-kontrak', 'User::prosesSuratKontrak', ['filter' => 'role:user']);
$routes->post('/getPetugas', 'User::getPetugas', ['filter' => 'role:user']);
$routes->get('/surat-keputusan', 'User::suratKeputusan', ['filter' => 'role:user']);
$routes->post('/proses-surat-keputusan', 'User::prosesSuratKeputusan', ['filter' => 'role:user']);
$routes->post('/getPenanggungjawab', 'User::getPenanggungjawab', ['filter' => 'role:user']);

$routes->get('/pegawai-bps', 'Admin::pegawaibps', ['filter' => 'role:admin']);
$routes->get('/mitra-statistik', 'Admin::mitra', ['filter' => 'role:admin']);
$routes->get('/penanggungjawab', 'Admin::penanggungjawab', ['filter' => 'role:admin']);
$routes->get('/riwayat-pengisian', 'Admin::riwayatPengisian', ['filter' => 'role:admin']);
$routes->get('/pegawaiBps', 'Admin::pegawaiBps', ['filter' => 'role:admin']);
$routes->get('/pegawai-bps', 'Admin::pegawaibps', ['filter' => 'role:admin']);
$routes->post('/pegawai-bps/store', 'Admin::storePegawai', ['filter' => 'role:admin']);
$routes->post('/pegawai-bps/update/(:num)', 'Admin::updatePegawai/$1', ['filter' => 'role:admin']);
$routes->post('/pegawai-bps/delete', 'Admin::deletePegawai', ['filter' => 'role:admin']);
$routes->post('/mitra-statistik/store', 'Admin::storeMitra', ['filter' => 'role:admin']);
$routes->post('/mitra-statistik/update/(:num)', 'Admin::updateMitra/$1', ['filter' => 'role:admin']);
$routes->post('/mitra-statistik/delete', 'Admin::deleteMitra', ['filter' => 'role:admin']);
$routes->post('/penanggungjawab/store', 'Admin::storePenanggungjawab', ['filter' => 'role:admin']);
$routes->post('/penanggungjawab/update/(:num)', 'Admin::updatePenanggungjawab/$1', ['filter' => 'role:admin']);
$routes->post('/penanggungjawab/delete', 'Admin::deletePenanggungjawab', ['filter' => 'role:admin']);


// $routes->get('/dashboard', 'Home::dashboard');
$routes->get('/layout', 'Home::layout');
// $routes->get('/tables', 'Home::tables');
$routes->get('/billing', 'Home::billing');
$routes->get('/virtual', 'Home::virtual');
$routes->get('/rtl', 'Home::rtl');
$routes->get('/profile', 'Home::profile');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');