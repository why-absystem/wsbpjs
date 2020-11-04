<?php
	
	namespace ABSystem\Bpjs\VClaim;
	
	use ABSystem\Bpjs\BpjsService;
	
	class Referensi extends BpjsService {
		
		/**
		 * @param $keyword
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function diagnosa ($keyword) {
			$response = $this->get('referensi/diagnosa/' . $keyword);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $keyword
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function poli ($keyword) {
			$response = $this->get('referensi/poli/' . $keyword);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param null $kd_faskes
		 * @param null $jns_faskes
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function faskes ($kd_faskes = NULL, $jns_faskes = NULL) {
			$response = $this->get('referensi/faskes/' . $kd_faskes . '/' . $jns_faskes);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $jnsPelayanan
		 * @param $tglPelayanan
		 * @param $spesialis
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function dokterDpjp ($jnsPelayanan, $tglPelayanan, $spesialis) {
			$response = $this->get('referensi/dokter/pelayanan/' . $jnsPelayanan . '/tglPelayanan/' . $tglPelayanan . '/Spesialis/' . $spesialis);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function propinsi () {
			$response = $this->get('referensi/propinsi');
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $kdPropinsi
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function kabupaten ($kdPropinsi) {
			$response = $this->get('referensi/kabupaten/propinsi/' . $kdPropinsi);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $kdKabupaten
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function kecamatan ($kdKabupaten) {
			$response = $this->get('referensi/kecamatan/kabupaten/' . $kdKabupaten);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $keyword
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function procedure ($keyword) {
			$response = $this->get('referensi/procedure/' . $keyword);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function kelasRawat () {
			$response = $this->get('referensi/kelasrawat');
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $keyword
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function dokter ($keyword) {
			$response = $this->get('referensi/dokter/' . $keyword);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function spesialistik () {
			$response = $this->get('referensi/spesialistik');
			return json_decode($response, TRUE);
		}
		
		/**
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function ruangrawat () {
			$response = $this->get('referensi/ruangrawat');
			return json_decode($response, TRUE);
		}
		
		/**
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function carakeluar () {
			$response = $this->get('referensi/carakeluar');
			return json_decode($response, TRUE);
		}
		
		/**
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function pascapulang () {
			$response = $this->get('referensi/pascapulang');
			return json_decode($response, TRUE);
		}
		
	}