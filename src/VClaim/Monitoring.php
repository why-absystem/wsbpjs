<?php
	
	namespace ABSystem\Bpjs\VClaim;
	
	use ABSystem\Bpjs\BpjsService;
	
	class Monitoring extends BpjsService {
		
		/**
		 * @param $tglSep
		 * @param $jnsPelayanan
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function dataKunjungan ($tglSep, $jnsPelayanan) {
			$response = $this->get('Monitoring/Kunjungan/Tanggal/' . $tglSep . '/JnsPelayanan/' . $jnsPelayanan);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $tglPulang
		 * @param $jnsPelayanan
		 * @param $statusKlaim
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function dataKlaim ($tglPulang, $jnsPelayanan, $statusKlaim) {
			$response = $this->get('Monitoring/Klaim/Tanggal/' . $tglPulang . '/JnsPelayanan/' . $jnsPelayanan . '/Status/' . $statusKlaim);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $noKartu
		 * @param $tglAwal
		 * @param $tglAkhir
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function historyPelayanan ($noKartu, $tglAwal, $tglAkhir) {
			$response = $this->get('monitoring/HistoriPelayanan/NoKartu/' . $noKartu . '/tglAwal/' . $tglAwal . '/tglAkhir/' . $tglAkhir);
			return json_decode($response, TRUE);
		}
		
		/**
		 * @param $tglMulai
		 * @param $tglAkhir
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function dataKlaimJasaRaharja ($tglMulai, $tglAkhir) {
			$response = $this->get('monitoring/JasaRaharja/tglMulai/' . $tglMulai . '/tglAkhir/' . $tglAkhir);
			return json_decode($response, TRUE);
		}
	}