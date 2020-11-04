# WSBPJS

#### Installation :fire:

`composer require absystem/wsbpjs`

#### Contoh

```php
/** SETTING CONFIG */
 
 
//vclaim
$config = [
    'cons_id' => '123456',
    'secret_key' => '123456',
    'base_url' => 'https://new-api.bpjs-kesehatan.go.id:8080',
    'service_name' => 'vclaim-rest'
];


//aplicaresws
$config = [
    'cons_id' => '123456',
    'secret_key' => '123456',
    'base_url' => 'https://new-api.bpjs-kesehatan.go.id:8080',
    'service_name' => 'aplicaresws/rest'
];


//pcare
$config = [
    'cons_id' => '123456',
    'secret_key' => '123456',
    'base_url' => 'https://new-api.bpjs-kesehatan.go.id',
    'service_name' => 'pcare-rest-v3.0',
    'pcare_user' => 'username',
    'pcare_pass' => 'password',
    'kd_aplikasi' => '095',
];


require_once __DIR__ . '/vendor/autoload.php';
$referensi = new ABSystem\Bpjs\VClaim\Referensi($vclaim_conf);
var_dump($referensi->diagnosa('A00'));

```


#### Credit thanks:

<a href="https://github.com/nsulistiyawan/bpjs" target="_blank">https://github.com/nsulistiyawan/bpjs</a>