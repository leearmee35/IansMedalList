<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Weidner\Goutte\GoutteFacade;

use App\Http\Requests;

use App\Table;

class TableController extends Controller
{
    public function index(Request $r){

        $crawler = GoutteFacade::request('GET', 'http://www.bbc.com/sport/olympics/rio-2016/medals/countries');
        $countries = $crawler->filter('.abbr-on');
        $golds = $crawler->filter('.medals-table__total--gold>a');
        $silvers = $crawler->filter('.medals-table__total--silver>a');
        $bronzes = $crawler->filter('.medals-table__total--bronze>a');

        $crawler_roller = GoutteFacade::request('GET', 'http://edition.cnn.com/sport/olympics');
        $rollers = $crawler_roller->filter('.cd__headline-text');
        $rol = array();
        foreach ($rollers as $r){
            array_push($rol,$r->nodeValue);
        }

        $crawler_bf = GoutteFacade::request('GET', 'https://www.buzzfeed.com/olympics');
        $bfs = $crawler_bf->filter('h2');
        $buz = array();

        $ii = 0;
        foreach ($bfs as $bf){

            if($ii>0 && $bf->nodeValue!=""){
                array_push($buz,$bf->nodeValue);
            }
            $ii++;
        }


        $crawler_bf_pic = GoutteFacade::request('GET', 'https://www.buzzfeed.com/olympics');
        $bfs_pics = $crawler_bf_pic->filter('.thumb');
        $pic = array();


        foreach ($bfs_pics as $bf){
            array_push($pic,$bf->getAttribute('rel:bf_image_src'));
        }

        $crawler_link = GoutteFacade::request('GET', 'https://www.buzzfeed.com/olympics');
        $bfl = $crawler_link->filter('.thumb');
        $lin = array();


        foreach ($bfl as $bf){
            array_push($lin,$bf->parentNode->parentNode->getAttribute('href'));
        }


        $cou = array();
        $rank = array();
        $gol = array();
        $sil = array();
        $bro = array();
        $i = 0;

        foreach ($golds as $gold) {
            array_push($gol,$gold->nodeValue);
        }
        foreach ($silvers as $silver) {
            array_push($sil,$silver->nodeValue);
        }
        foreach ($bronzes as $bronze) {
            array_push($bro,$bronze->nodeValue);
        }

        foreach ($countries as $country) {
            $i++;
            array_push($cou,$country->nodeValue);
            array_push($rank, (int)$i);
        }


        return view('portal.index', compact(['cou','rank','gol','sil','bro','rol','buz','pic','lin']));
    }
}
