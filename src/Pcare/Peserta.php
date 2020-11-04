<?php
	
	namespace ABSystem\Bpjs\Pcare;
	
	use ABSystem\Bpjs\BpjsService;
	
	class Peserta extends BpjsService {
		
		/**
		 * @param $keyword
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function getPeserta ($keyword) {
			$response = $this->get('peserta/' . $keyword);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param array $jnsKartu
		 * @param $keyword
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function getPesertaJenisKartu ($jnsKartu = ['nik', 'noka'], $keyword) {
			$response = $this->get('peserta/' . $jnsKartu . '/' . $keyword);
			return json_decode($response, TRUE);
		}
		
		
	}