<?php

namespace PicPay;

class Buyer {

    private $firstName;
    private $lastName;
    private $document;
    private $email;
    private $phone;

    public function __construct(? array $buyer) {
        $this->firstName = $buyer['firstName'];
        $this->lastName = $buyer['lastName'];
        $this->document = $buyer['document'];
        $this->email = $buyer['email'];
        $this->phone = $buyer['phone'];
    }

    public function setFirstName(string $firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName) {
        $this->lastName = $lastName;
    }

    public function setDocument(string $document) {
        $this->document = $document;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function setPhone(string $phone) {
        $this->phone = $phone;
    }

    public function getFirstName() : string {
        return $this->firstName;
    }

    public function getLastName() : string {
        return $this->lastName;
    }

    public function getDocument() : string {
        return $this->document;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function getPhone() : string {
        return $this->phone;
    }

    public function toArray() : array {
        return [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'document' => $this->document,
            'email' => $this->email,
            'phone' => $this->phone
        ];
    }
}