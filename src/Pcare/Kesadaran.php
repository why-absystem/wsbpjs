<?php
	
	namespace ABSystem\Bpjs\Pcare;
	
	use ABSystem\Bpjs\BpjsService;
	
	class Kesadaran extends BpjsService {
		
		/**
		 * @return mixed
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		public function getKesadaran () {
			$response = $this->get('kesadaran');
			return json_decode($response, TRUE);
		}
	}