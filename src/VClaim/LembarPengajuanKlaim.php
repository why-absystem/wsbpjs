<?php
	
	namespace ABSystem\Bpjs\VClaim;
	
	use ABSystem\Bpjs\BpjsService;
	
	class LembarPengajuanKlaim extends BpjsService {
		
		/**
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function insertLPK ($data = []) {
			$response = $this->post('LPK/insert', $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function updateLPK ($data = []) {
			$response = $this->put('LPK/update', $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function deleteLPK ($data = []) {
			$response = $this->delete('LPK/delete', $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $tglMasuk
		 * @param $jnsPelayanan
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function cariLPK ($tglMasuk, $jnsPelayanan) {
			$response = $this->get('LPK/TglMasuk/' . $tglMasuk . '/JnsPelayanan/' . $jnsPelayanan);
			return json_decode($response, TRUE);
		}
	}