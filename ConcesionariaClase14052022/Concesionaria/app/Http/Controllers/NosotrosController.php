<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $content = 'Encuéntranos en todo el país, para asesorarte y brindarte un servicio de calidad, como tú te lo mereces. Además contamos con repuestos originales y el mejor servicio posventa.';
        return view('nosotros', compact('content'));
    }
}
