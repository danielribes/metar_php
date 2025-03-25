<?php

namespace dribes\MetarParser\Service;

use dribes\MetarParser\Model\Metar;

class MetarParser {
    public function parse($oaci, $rawmetar) {
        return new Metar($oaci, $rawmetar);
    }
}