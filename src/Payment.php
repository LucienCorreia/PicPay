<?php

namespace PicPay;

/**
 * @author Lucien
 * @link https://github.com/LucienCorreia/PicPay GitHub
 */
class Payment {

    /**
     * @var string Id referencia
     */
    protected $refenreceId;

    /**
     * @var string Url de callback
     */
    protected $callbackUrl;

    /**
     * @var string Url de retorno
     */
    protected $returnUrl;

    /**
     * @var double Valor
     */
    protected $value;

    /**
     * @var string Expiração
     */
    protected $expiresAt;

    /**
     * @var string Comprador
     */
    protected $buyer;

    /**
     * Seta os atributos por um array
     * 
     * @param array $payment
     */
    public function __construct(array $payment = []) {
        foreach(get_object_vars($this) as $k => $v) {
            if(array_key_exists($k, $payment)) {
                $this->$k = $payment[$k];
            }
        }
    }

    /**
     * @param string $refenreceId
     */
    public function setReferenceId(string $refenreceId) {
        $this->referenceId = $refenreceId;
    }

    /**
     * @param string $callbackUrl
     */
    public function setCallbackUrl(string $callbackUrl) {
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @param string $returnUrl
     */
    public function setReturnUrl(string $returnUrl) {
        $this->returnUrl = $returnUrl;
    }

    /**
     * @param double $value
     */
    public function setValue(double $value) {
        $this->value = $value;
    }

    /**
     * @param string $expiresAt
     */
    public function setExpiresAt(string $expiresAt) {
        $this->expiresAt = $expiresAt;
    }

    /**
     * @param Buyer
     */
    public function setBuyer(Buyer $buyer) {
        $this->buyer = $buyer;
    }

    /**
     * @return string
     */
    public function getReferenceId() : string {
        return $this->referenceId;
    }

    /**
     * @return string
     */
    public function getCallbackUrl() : string {
        return $this->callbackUrl;
    }

    /**
     * @return string
     */
    public function getReturnUrl() : string {
        return $this->returnUrl;
    }

    /**
     * @return double
     */
    public function getValue() : double {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getExpiresAt() : string {
        return $this->expiresAt;
    }

    /**
     * @return Buyer
     */
    public function getBuyer() : Buyer {
        return $this->buyer;
    }

    /**
     * Retorna o objeto em array
     * 
     * @return array
     */
    public function toArray() : array {
        return [
            'refenreceId' => $this->refenreceId,
            'callbackUrl' => $this->callbackUrl,
            'returnUrl' => $this->returnUrl,
            'value' => $this->value,
            'expiresAt' => $this->expiresAt,
            'buyer' => $this->buyer->toArray()
        ];
    }
}