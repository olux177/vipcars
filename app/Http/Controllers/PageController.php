<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $d = config('data');

        $data = $d;
        $data['car_logos'] = $d['components']['car_logos'];
        $data['about'] = $d['components']['about']['section1']['list'];
        $data['carsslider'] = $d['components']['fleets']['list'];
        // $data['carsslider'] = [
        //     $d['components']['fleets']['list'][15],
        //     $d['components']['fleets']['list'][11],
        //     $d['components']['fleets']['list'][19],
        //     $d['components']['fleets']['list'][20],
        //     $d['components']['fleets']['list'][21],
        //     $d['components']['fleets']['list'][22],
        //     $d['components']['fleets']['list'][23],
        //     $d['components']['fleets']['list'][24],
        //     $d['components']['fleets']['list'][25],
        //     $d['components']['fleets']['list'][26],
        //     $d['components']['fleets']['list'][27],
        //     $d['components']['fleets']['list'][28],
        //     $d['components']['fleets']['list'][29],
        //     $d['components']['fleets']['list'][30],
        //     $d['components']['fleets']['list'][31],
        //     $d['components']['fleets']['list'][16],
        //     $d['components']['fleets']['list'][14],
        //     $d['components']['fleets']['list'][18],
        //     $d['components']['fleets']['list'][12],
        //     $d['components']['fleets']['list'][7],
        //     $d['components']['fleets']['list'][8],
        //     $d['components']['fleets']['list'][2],
        //     $d['components']['fleets']['list'][1],
        //     $d['components']['fleets']['list'][0],
        //     $d['components']['fleets']['list'][3],
        //     $d['components']['fleets']['list'][4],
        //     $d['components']['fleets']['list'][5],
        //     $d['components']['fleets']['list'][6],
        // ];
        return view("pages.home")->with("data",$data);
    }
}
