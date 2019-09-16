<?php

namespace PicPay;

class Payment {

    protected $refenreceId;
    protected $callbackUrl;
    protected $returnUrl;
    protected $value;
    protected $expiresAt;
    protected $buyer;

    public function setReferenceId(string $refenreceId) {
        $this->referenceId = $refenreceId;
    }

    public function setCallbackUrl(string $callbackUrl) {
        $this->callbackUrl = $callbackUrl;
    }

    public function setReturnUrl(string $returnUrl) {
        $this->returnUrl = $returnUrl;
    }

    public function setValue(double $value) {
        $this->value = $value;
    }

    public function setExpiresAt(string $expiresAt) {
        $this->expiresAt = $expiresAt;
    }

    public function setBuyer(Buyer $buyer) {
        $this->buyer = $buyer;
    }

    public function getReferenceId() : string {
        return $this->referenceId;
    }

    public function getCallbackUrl() : string {
        return $this->callbackUrl;
    }

    public function getReturnUrl() : string {
        return $this->returnUrl;
    }

    public function getValue() : double {
        return $this->value;
    }

    public function getExpiresAt() : string {
        return $this->expiresAt;
    }

    public function getBuyer() : Buyer {
        return $this->buyer;
    }

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