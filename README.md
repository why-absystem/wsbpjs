# WSBPJS

#### INSTALLATION :fire:

`composer require absystem/wsbpjs`

#### REQUIREMENTS :warning: 

:black_small_square: PHP >=5.6.
<br/>
:black_small_square: <a href="https://getcomposer.org/">Composer</a>.
<br/>
:black_small_square: <a href="https://github.com/guzzle/guzzle">Guzzle v6.x</a> sudah include di package.

#### SETTING CONFIG HEADER REQUEST :globe_with_meridians:

```php
 
//vclaim
$config = [
	'cons_id'      => '',
	'secret_key'   => '',
	'base_url'     => 'https://new-api.bpjs-kesehatan.go.id:8080',
	'service_name' => 'new-vclaim-rest'
];


//aplicaresws
$config = [
	'cons_id'      => '',
	'secret_key'   => '',
	'base_url'     => 'https://new-api.bpjs-kesehatan.go.id:8080',
	'service_name' => 'aplicaresws/rest'
];


//pcare
$config = [
	'cons_id'      => '',
	'secret_key'   => '',
	'base_url'     => 'https://dvlp.bpjs-kesehatan.go.id:9081',
	'service_name' => 'pcare-rest-v3.0',
	'pcare_user'   => '',
	'pcare_pass'   => '',
	'kd_aplikasi'  => ''
];
```

#### CONTOH PENGGUNAAN :computer:
```php
require_once __DIR__ . '/vendor/autoload.php';
$referensi = new \ABSystem\Bpjs\VClaim\Referensi($config);
var_dump($referensi->diagnosa('A00'));

```

#### :link:&nbsp;&nbsp;REFERENSI REST :blue_book:
:white_small_square: vclaim & aplicaresws = https://dvlp.bpjs-kesehatan.go.id/VClaim-Katalog
<br/>
:white_small_square: pcare = https://dvlp.bpjs-kesehatan.go.id:9081/pcare-rest-v3.0/


#### :link:&nbsp;&nbsp;CREDIT THANKS :thumbsup:

https://github.com/nsulistiyawan/bpjs