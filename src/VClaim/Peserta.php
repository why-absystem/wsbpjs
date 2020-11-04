<?php
	
	namespace ABSystem\Bpjs\VClaim;
	
	use ABSystem\Bpjs\BpjsService;
	
	class Peserta extends BpjsService {
		
		/**
		 * @param $noKartu
		 * @param $tglPelayananSEP
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function getByNoKartu ($noKartu, $tglPelayananSEP) {
			$response = $this->get('Peserta/nokartu/' . $noKartu . '/tglSEP/' . $tglPelayananSEP);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $nik
		 * @param $tglPelayananSEP
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function getByNIK ($nik, $tglPelayananSEP) {
			$response = $this->get('Peserta/nik/' . $nik . '/tglSEP/' . $tglPelayananSEP);
			return json_decode($response, TRUE);
		}
		
	}