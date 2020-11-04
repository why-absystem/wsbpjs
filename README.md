# WSBPJS

#### Installation :fire:

`composer require absystem/wsbpjs`

#### SETTING CONFIG :globe_with_meridians:
:

```php
 
//vclaim
$config = [
	'cons_id'      => '123456',
	'secret_key'   => '123456',
	'base_url'     => 'https://new-api.bpjs-kesehatan.go.id:8080',
	'service_name' => 'new-vclaim-rest'
];


//aplicaresws
$config = [
	'cons_id'      => '123456',
	'secret_key'   => '123456',
	'base_url'     => 'https://new-api.bpjs-kesehatan.go.id:8080',
	'service_name' => 'aplicaresws/rest'
];


//pcare
$config = [
	'cons_id'      => '123456',
	'secret_key'   => '123456',
	'base_url'     => 'https://dvlp.bpjs-kesehatan.go.id:9081',
	'service_name' => 'pcare-rest-v3.0',
	'pcare_user'   => 'username',
	'pcare_pass'   => 'password',
	'kd_aplikasi'  => '095',
];
```

#### PENGGUNAAN :computer:
```php
require_once __DIR__ . '/vendor/autoload.php';
$referensi = new \ABSystem\Bpjs\VClaim\Referensi($config);
var_dump($referensi->diagnosa('A00'));

```

#### :link:&nbsp;&nbsp;REFERENSI REST :blue_book:
vclaim & aplicaresws = https://dvlp.bpjs-kesehatan.go.id/VClaim-Katalog
<br/>
pcare = https://dvlp.bpjs-kesehatan.go.id:9081/pcare-rest-v3.0/


#### :link:&nbsp;&nbsp;Credit Thanks :thumbsup:

https://github.com/nsulistiyawan/bpjs