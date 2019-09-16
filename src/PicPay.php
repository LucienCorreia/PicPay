<?php

use GuzzleHttp\Client;

namespace PicPay;

/**
 * @author Lucien
 * @link https://github.com/LucienCorreia/PicPay GitHub
 */
class PicPay {

    /**
     * @var string Base URI
     */
    protected static $baseUri = 'https://appws.picpay.com/ecommerce/public';

    /**
     * @var string PicPay Token
     */
    protected static $picpayToken;

    /**
     * @var string Seller Token
     */
    protected static $sellerToken;

    /**
     * Seta os tokens
     */
    public function __constrct() {
        self::$picpayToken = config('picpay.picpay_token');
        self::$sellerToken = config('picpay.seller_token');
    }

    /**
	 * Seta o picpay token
	 * 
	 * @param string $key
	 */
	public function setPicpayToken(string $picpayToken) {
		self::$picpayToken = $picpayToken;
    }

	/**
	 * Seta o seller token
	 * 
	 * @param string $token
	 */
	public function setSellerToken(String $sellerToken) {
		self::$sellerToken = $sellerToken;
    }
    
    /**
     * Novo pagamento
     * 
     * @param Payment $payment
     */
    public function payment(Payment $payment) {

        $client = new Client;

        try {

            $response = $client->post(self::$baseUri . '/payments', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'x-picpay-token' => self::$picpayToken
                ],
                'json' => $payment->toArray
            ]);

            return $response->getBody()->getContents();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}