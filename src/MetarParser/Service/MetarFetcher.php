<?php

namespace dribes\MetarParser\Service;

class MetarFetcher {
    public function fetch($oaci) {
        $url = 'https://tgftp.nws.noaa.gov/data/observations/metar/stations/' . strtoupper($oaci) . '.TXT';
        $data = @file($url);
        if ($data === false) {
            throw new \Exception("Failed to fetch METAR data for OACI: $oaci");
        }
        return $data;
    }
}