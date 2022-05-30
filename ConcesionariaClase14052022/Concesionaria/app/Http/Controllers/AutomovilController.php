<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AutomovilController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = 
        [
            ['nombre' => 'Alfa Romeo Stelvio',
            'anio' => '2022',
            'msrp' => '$84.650',
            'mpg' => '23-29 Hwy',
            'img' => 'https://cars.usnews.com/static/images/Auto/izmo/i159614774/2022_alfa_romeo_stelvio_angularfront.jpg'
        ],
            ['nombre' => 'Audi A4',
            'anio' => '2022',
            'msrp' => '$42.000',
            'mpg' => '31-34 Hwy',
            'img' => 'https://cars.usnews.com/static/images/Auto/izmo/i159614796/2022_audi_a4_sedan_angularfront.jpg'
        ],
            ['nombre' => 'Chevrolet Equinox',
            'anio' => '2022',
            'msrp' => '$32.600',
            'mpg' => '30-31 Hwy',
            'img' => 'https://cars.usnews.com/static/images/Auto/izmo/i159614679/2022_chevrolet_equinox_angularfront.jpg'
        ],
            ['nombre' => 'Genesis G70',
            'anio' => '2022',
            'msrp' => '$54.750',
            'mpg' => '25-31 Hwy',
            'img' => 'https://cars.usnews.com/static/images/Auto/izmo/i159614694/2022_genesis_g70_angularfront.jpg'
        ],
            ['nombre' => 'Hyundai Sonata Hybrid',
            'anio' => '2022',
            'msrp' => '$35.550',
            'mpg' => '51-54 Hwy',
            'img' => 'https://cars.usnews.com/static/images/Auto/izmo/i159614769/2022_hyundai_sonata_hybrid_angularfront.jpg'
        ]
        ];
        $dataRandom = Arr::random($data);
        return view('automovil', compact('dataRandom'));
    }
}
