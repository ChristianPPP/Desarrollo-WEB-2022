<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function dataContact(Request $request)
    {

        (!request()->name) ? $name='invitado': $name = request()->name;
        $content = 'DIRECCIÓN
        Ladrón de Guevara E11·253 
        [PO·Box 17-01-2759]
        Quito · Ecuador

        TELÉFONO
        (+593) 2 2976 300

        CORREO ELECTRÓNICO
        info@epn.edu.ec';
        return view('contactos',compact('name', 'content'));
    }
}

