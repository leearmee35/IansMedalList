<?php

namespace App;


class Table
{
    /* Member variables */
    var $rank;
    var $country;
    var $gold;
    var $silver;
    var $bronze;
    var $total;

    function __construct($r, $c, $g, $s, $b,$t) {
        $this->rank = $r;
        $this->country = $c;
        $this->gold = $g;
        $this->silver = $s;
        $this->bronze = $b;
        $this->total = $t;
    }

    function getGold(){
        return $this->gold;
    }

    function getSilver(){
        return $this->silver;
    }

    function getBronze(){
        return $this->bronze;
    }

    function getSum(){
        return $this->total;
    }


}
