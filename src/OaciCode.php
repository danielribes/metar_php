<?php

// OaciCode

class OaciCode {
    private array $codes;

    public function __construct() {
        $json = file_get_contents(__DIR__ . '/Data/oaci_codes.json');
        $this->codes = json_decode($json, true);
    }


}