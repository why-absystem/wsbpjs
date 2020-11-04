<?php
	require_once __DIR__ . '/src/BpjsService.php';
	require_once __DIR__ . '/src/VClaim/LembarPengajuanKlaim.php';
	require_once __DIR__ . '/src/VClaim/Monitoring.php';
	require_once __DIR__ . '/src/VClaim/Peserta.php';
	require_once __DIR__ . '/src/VClaim/Referensi.php';
	require_once __DIR__ . '/src/VClaim/Rujukan.php';
	require_once __DIR__ . '/src/VClaim/Sep.php';
	require_once __DIR__ . '/src/Aplicare/KetersediaanKamar.php';
	require_once __DIR__ . '/vendor/autoload.php';
	
	define("URL_BPJS", "https://new-api.bpjs-kesehatan.go.id:8080");
	define("URL_PCARE", str_replace(":8080", "", URL_BPJS));
	define("CONST_ID", "5108");
	define("CONST_ID_TESTER", "30899");
	define("SECRET_KEY", "0kT4307841");
	define("SECRET_KEY_TESTER", "7uM57229F1");
	
	
	define("SESS_ID_RS", "0124R008");
	define("SESS_JENIS_FASKES_RS", "2");
	
	/*PCARE*/
	define("USERNAME_PCARE", "usernamePcare");
	define("PASSWORD_PCARE", "passwordPcare");
	define("KODE_APLIKASI", "095");
	
	
	$config = [
		'cons_id'      => CONST_ID,
		'secret_key'   => SECRET_KEY,
		'base_url'     => URL_BPJS,
		'service_name' => 'new-vclaim-rest'
	];
	
	$config_pcare = [
		'cons_id'      => CONST_ID_TESTER,
		'secret_key'   => SECRET_KEY_TESTER,
		'base_url'     => URL_PCARE,
		'service_name' => 'pcare-rest-v3.0',
		'pcare_user'   => USERNAME_PCARE,
		'pcare_pass'   => PASSWORD_PCARE,
		'kd_aplikasi'  => KODE_APLIKASI
	];
	
	
	$referensi = new Nsulistiyawan\Bpjs\VClaim\Referensi($config_pcare);
	//var_dump($referensi->diagnosa('A00')['response']['diagnosa']);
