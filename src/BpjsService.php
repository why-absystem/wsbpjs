<?php
	
	namespace ABSystem\Bpjs;
	
	use GuzzleHttp\Client;
	
	class BpjsService {
		
		/**
		 * Guzzle HTTP Client object
		 * @var \GuzzleHttp\Client
		 */
		private $clients;
		
		/**
		 * Request headers
		 * @var array
		 */
		private $headers;
		
		/**
		 * X-cons-id header value
		 * @var int
		 */
		private $cons_id;
		
		/**
		 * X-Timestamp header value
		 * @var string
		 */
		private $timestamp;
		
		/**
		 * X-Signature header value
		 * @var string
		 */
		private $signature;
		
		/**
		 * @var string
		 */
		private $secret_key;
		
		/**
		 * @var string
		 */
		private $base_url;
		
		/**
		 * @var string
		 */
		private $service_name;
		
		/*X-Authorization*/
		/**
		 * @var string
		 */
		private $authorization;
		
		/**
		 * @var string
		 */
		private $pcare_user;
		
		/**
		 * @var string
		 */
		private $pcare_pass;
		
		/**
		 * @var string
		 */
		private $kd_aplikasi;
		
		
		/**
		 * BpjsService constructor.
		 * @param $configurations
		 */
		public function __construct ($configurations) {
			$this->clients = new Client([
				'verify' => FALSE
			]);
			
			foreach ($configurations as $key => $val) {
				if (property_exists($this, $key)) {
					$this->$key = $val;
				}
			}
			
			$this->setTimestamp()->setSignature()->setAuthorization()->setHeaders();
			
		}
		
		/**
		 * @return $this
		 */
		protected function setHeaders () {
			$this->headers = [
				'X-cons-id'   => $this->cons_id,
				'X-Timestamp' => $this->timestamp,
				'X-Signature' => $this->signature
			];
			
			if ($this->pcare_user && $this->pcare_pass && $this->kd_aplikasi) {
				$this->headers['X-Authorization'] = $this->authorization;
			}
			var_dump($this->headers);
			return $this;
		}
		
		/**
		 * @return $this
		 */
		protected function setTimestamp () {
			date_default_timezone_set('UTC');
			$this->timestamp = strval(time() - strtotime('1970-01-01 00:00:00'));
			return $this;
		}
		
		/**
		 * @return $this
		 */
		protected function setSignature () {
			$data             = $this->cons_id . '&' . $this->timestamp;
			$signature        = hash_hmac('sha256', $data, $this->secret_key, TRUE);
			$encodedSignature = base64_encode($signature);
			$this->signature  = $encodedSignature;
			return $this;
		}
		
		/**
		 * @return $this
		 */
		protected function setAuthorization () {
			$this->authorization = "Basic " . base64_encode($this->pcare_user . ":" . $this->pcare_pass . ":" . $this->kd_aplikasi);
			return $this;
		}
		
		
		/**
		 * @param $feature
		 * @return string
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		protected function get ($feature) {
			$this->headers['Content-Type'] = 'application/json; charset=utf-8';
			try {
				$response = $this->clients->request(
					'GET',
					$this->base_url . '/' . $this->service_name . '/' . $feature,
					[
						'headers' => $this->headers
					]
				)->getBody()->getContents();
			} catch (\Exception $e) {
				$response = $e->getResponse()->getBody();
			}
			return $response;
		}
		
		/**
		 * @param $feature
		 * @param array $data
		 * @param array $headers
		 * @return string
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		protected function post ($feature, $data = [], $headers = []) {
			$this->headers['Content-Type'] = 'application/x-www-form-urlencoded';
			if (!empty($headers)) {
				$this->headers = array_merge($this->headers, $headers);
			}
			try {
				$response = $this->clients->request(
					'POST',
					$this->base_url . '/' . $this->service_name . '/' . $feature,
					[
						'headers' => $this->headers,
						'json'    => $data,
					]
				)->getBody()->getContents();
			} catch (\Exception $e) {
				$response = $e->getResponse()->getBody();
			}
			return $response;
		}
		
		/**
		 * @param $feature
		 * @param array $data
		 * @return string
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		protected function put ($feature, $data = []) {
			$this->headers['Content-Type'] = 'application/x-www-form-urlencoded';
			try {
				$response = $this->clients->request(
					'PUT',
					$this->base_url . '/' . $this->service_name . '/' . $feature,
					[
						'headers' => $this->headers,
						'json'    => $data,
					]
				)->getBody()->getContents();
			} catch (\Exception $e) {
				$response = $e->getResponse()->getBody();
			}
			return $response;
		}
		
		
		/**
		 * @param $feature
		 * @param array $data
		 * @return string
		 * @throws \GuzzleHttp\Exception\GuzzleException
		 */
		protected function delete ($feature, $data = []) {
			$this->headers['Content-Type'] = 'application/x-www-form-urlencoded';
			try {
				$response = $this->clients->request(
					'DELETE',
					$this->base_url . '/' . $this->service_name . '/' . $feature,
					[
						'headers' => $this->headers,
						'json'    => $data,
					]
				)->getBody()->getContents();
			} catch (\Exception $e) {
				$response = $e->getResponse()->getBody();
			}
			return $response;
		}
		
	}
