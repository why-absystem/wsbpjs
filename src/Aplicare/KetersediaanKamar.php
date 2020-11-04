<?php
	
	namespace ABSystem\Bpjs\Pcare;
	
	use ABSystem\Bpjs\BpjsService;
	
	class KetersediaanKamar extends BpjsService {
		
		/**
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function refKelas () {
			$response = $this->get('ref/kelas');
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $kodePpk
		 * @param $start
		 * @param $limit
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function bedGet ($kodePpk, $start, $limit) {
			$response = $this->get('bed/read/' . $kodePpk . '/' . $start . '/' . $limit);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $kodePpk
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function bedCreate ($kodePpk, $data = []) {
			$header   = 'application/json';
			$response = $this->post('bed/create/' . $kodePpk, $data, $header);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $kodePpk
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function bedUpdate ($kodePpk, $data = []) {
			$response = $this->put('bed/update/' . $kodePpk, $data);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $kodePpk
		 * @param array $data
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function bedDelete ($kodePpk, $data = []) {
			$response = $this->delete('bed/delete/' . $kodePpk, $data);
			return json_decode($response, TRUE);
		}
	}