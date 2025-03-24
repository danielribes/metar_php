<?php


namespace dribes\Metar;
class Metar {
    private $oaci;
    private $urlmetar;
    private $rawmetar;
    private $date;
    private $metar;

    public function __construct($oaci) {
        $this->oaci = strtoupper($oaci);
        $this->urlmetar = 'https://tgftp.nws.noaa.gov/data/observations/metar/stations/'.$this->oaci.'.TXT';
        $this->rawmetar = file($this->urlmetar);
        $this->date = explode(' ', $this->rawmetar[0]);
        $this->metar = explode(' ', $this->rawmetar[1]);
    }

    public function getMetar() {
        return implode(' ', $this->metar);
    }
}