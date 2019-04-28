<?php
    use GuzzleHttp\Client;
    class Product_model extends CI_Model {
        private $_client;
        public  function __construct(){
            $this->_client = new Client([
                'base_uri' => 'http://localhost/backend/api/',
                'auth' => ['admin', '1234']
            ]);
        }
        public function getProduct(){
            $response = $this->_client->request('GET', 'product', [
                'query' => [
                    'key' => '1234'
                ]
            ]); 
            $result = ($response->getBody()->getContents());
            return $result;
        }
    }
?>