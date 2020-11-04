<?php
	
	namespace ABSystem\Bpjs\VClaim;
	
	use ABSystem\Bpjs\BpjsService;
	
	class Rujukan extends BpjsService {
		
		/**
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function insertRujukan ($data = []) {
			$response = $this->post('Rujukan/insert', $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function updateRujukan ($data = []) {
			$response = $this->put('Rujukan/update', $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function deleteRujukan ($data = []) {
			$response = $this->delete('Rujukan/delete', $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $searchBy
		 * @param $keyword
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function cariByNoRujukan ($searchBy, $keyword) {
			if ($searchBy == 'RS') {
				$url = 'Rujukan/RS/' . $keyword;
			} else {
				$url = 'Rujukan/' . $keyword;
			}
			$response = $this->get($url);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $searchBy
		 * @param $keyword
		 * @param bool $multi
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function cariByNoKartu ($searchBy, $keyword, $multi = FALSE) {
			$record = $multi ? 'List/' : '';
			if ($searchBy == 'RS') {
				$url = 'Rujukan/RS/Peserta/' . $keyword;
			} else {
				$url = 'Rujukan/' . $record . 'Peserta/' . $keyword;
			}
			$response = $this->get($url);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $searchBy
		 * @param $keyword
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function cariByTglRujukan ($searchBy, $keyword) {
			if ($searchBy == 'RS') {
				$url = 'Rujukan/RS/TglRujukan/' . $keyword;
			} else {
				$url = 'Rujukan/List/Peserta/' . $keyword;
			}
			$response = $this->get($url);
			return json_decode($response, TRUE);
		}
	}