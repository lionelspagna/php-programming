<?php
class Customer {
    public array $customers = [];

    public function __construct(array $customers) {
        $this->customers = $customers;
    }
}