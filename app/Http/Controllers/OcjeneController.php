<?php

namespace App\Http\Controllers;

use App\Models\Ocjene;
use Illuminate\Http\Request;

class OcjeneController extends Controller
{
    public function addGrade(Request $request){
        $request->validate([
            'profesor' => 'string|required',
            'predmet' => 'string|required',
            'ocjena' => 'int|required|min:1|max:5'
        ]);

        Ocjene::create([
            'profesor' => $request->get('profesor'),
            'predmet' => $request->get('predmet'),
            'ocjena' => $request->get('ocjena')
        ]);

        return redirect('/');
    }
}
