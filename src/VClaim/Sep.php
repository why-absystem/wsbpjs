<?php
	
	namespace ABSystem\Bpjs\VClaim;
	
	use ABSystem\Bpjs\BpjsService;
	
	class Sep extends BpjsService {
		
		/**
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function insertSEP ($data = []) {
			$response = $this->post('SEP/1.1/insert', $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function updateSEP ($data = []) {
			$response = $this->put('SEP/1.1/Update', $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function deleteSEP ($data = []) {
			$response = $this->delete('SEP/Delete', $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $keyword
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function cariSEP ($keyword) {
			$response = $this->get('SEP/' . $keyword);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $noKartu
		 * @param $tglPelayanan
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function suplesiJasaRaharja ($noKartu, $tglPelayanan) {
			$response = $this->get('sep/JasaRaharja/Suplesi/' . $noKartu . '/tglPelayanan/' . $tglPelayanan);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function pengajuanPenjaminanSep ($data = []) {
			$response = $this->post('Sep/pengajuanSEP', $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function approvalPenjaminanSep ($data = []) {
			$response = $this->post('Sep/aprovalSEP', $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function updateTglPlg ($data = []) {
			$response = $this->put('Sep/updtglplg', $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $keyword
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function inacbgSEP ($keyword) {
			$response = $this->get('sep/cbg/' . $keyword);
			return json_decode($response, TRUE);
		}
	}