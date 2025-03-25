<?php

namespace dribes\MetarParser\Model;

class Metar {
    private $oaci;
    private $rawmetar;
    private $date;
    private $metar;

    public function __construct($oaci, $rawmetar) {
        $this->oaci = strtoupper($oaci);
        $this->rawmetar = $rawmetar;
        $this->date = explode(' ', $this->rawmetar[0]);
        $this->metar = explode(' ', $this->rawmetar[1]);
    }

    public function getMetar() {
        return implode(' ', $this->metar);
    }
}