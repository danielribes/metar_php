<?php

namespace dribes\MetarParser\Model;

class Metar {
    private $icao;
    private $rawmetar;
    private $date;
    private $metar;

    public function __construct($icao, $rawmetar) {
        $this->icao = strtoupper($icao);
        $this->rawmetar = $rawmetar;
        $this->date = explode(' ', $this->rawmetar[0]);
        $this->metar = explode(' ', $this->rawmetar[1]);
    }

    public function getMetar() {
        return implode(' ', $this->metar);
    }
}