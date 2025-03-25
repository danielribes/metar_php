<?php

namespace dribes\MetarParser\Service;

class MetarFetcher {
    public function fetch($icao) {
        $url = 'https://tgftp.nws.noaa.gov/data/observations/metar/stations/' . strtoupper($icao) . '.TXT';
        $data = @file($url);
        if ($data === false) {
            throw new \Exception("Failed to fetch METAR data for OACI: $icao");
        }
        return $data;
    }
}