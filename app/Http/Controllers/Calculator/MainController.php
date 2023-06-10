<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use App\Models\Historique;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }
    
    public function historique(){
        $historiques = auth()->user()->historiques->sortByDesc('created_at');
        //orderBy('created_at', 'desc')->get();
        //$historiques = Historique::orderBy('created_at', 'desc')->get();
        return view('historique', ['historiques' => $historiques]);
    }

    public function imc(){
        return view('imc');
    }

    public function longueur(){
        return view('longueur');
    }

    public function poids(){
        return view('poids');
    }

    public function devise(){
        return view('devise');
    }

    public function temperature(){
        return view('temperature');
    }

    public function pcarre(){
        return view('pcarre');
    }

    public function prectangle(){
        return view('prectangle');
    }

    public function ptriangle(){
        return view('ptriangle');
    }

    public function pparallelogramme(){
        return view('pparallelogramme');
    }

    public function ptrapeze(){
        return view('ptrapeze');
    }

    public function pcercle(){
        return view('pcercle');
    }

    public function acarre(){
        return view('acarre');
    }

    public function arectangle(){
        return view('arectangle');
    }

    public function atriangle(){
        return view('atriangle');
    }

    public function aparallelogramme(){
        return view('aparallelogramme');
    }

    public function atrapeze(){
        return view('atrapeze');
    }

    public function adisque(){
        return view('adisque');
    }

    public function ppcm(){
        return view('ppcm');
    }

    public function pgcd(){
        return view('pgcd');
    }

    public function moyenne(){
        return view('moyenne');
    }

    public function facteurpremier(){
        return view('facteurpremier');
    }

    public function factoriel(){
        return view('factoriel');
    }

    public function combinaison(){
        return view('combinaison');
    }

    public function permutation(){
        return view('permutation');
    }

}
