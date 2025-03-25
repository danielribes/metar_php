<?php

namespace dribes\MetarParser\Service;

use dribes\MetarParser\Model\Metar;

class MetarParser {
    public function parse($icao, $rawmetar) {
        return new Metar($icao, $rawmetar);
    }
}