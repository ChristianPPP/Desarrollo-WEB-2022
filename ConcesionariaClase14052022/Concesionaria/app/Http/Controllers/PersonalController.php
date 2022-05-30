<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $personal =
        [
            ['programador'=>'Christian Palacios',
            'imagen'=>'https://avatars.githubusercontent.com/u/74626089?v=4',
            'lenguajes'=>['C', 'C++', 'Java', 'Python', 'Javascript', 'PHP'],
            'areas de interes'=>['Deep Learning', 'Redes neuronales', 'Backend', 'Análisis de datos', 'Bases de datos'],
            'bio'=>'Estudiante universitario, apasionado a la programación y a la informática en general.'
        ]
        ];
        return view('personal', compact('personal'));
    }
}
