<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use Illuminate\Http\Request;

class MainDenombrement extends Controller
{
    //
    public function factoriel(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $t = $request->input('element');
            $resultat = $this->factorial($t);
            $toStore = "La factorielle de $t est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else
        {
            $t = $request->input('element');
            $resultat = $this->factorial($t);
        }


        return view('factoriel', ['resfacto' => $resultat, 't' => $t]);
    }

    function factorial($n)
    {
        $res = 1;
        for ($i = 1; $i <= $n; $i++) {
            $res = $res * $i;
        }
        //$res = ($n <= 1) ? 1 : $n * Factorial($n - 1);
        $string = "Factoriel $n = $res";
        $resultat = array($res, $string);
        return $resultat[0]; // retourne le résultat

    }

    public function combinaison(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->combin($a, $b);
            $toStore = "Combinaison de $a dans $b = $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->combin($a, $b);
        }

        return view('combinaison', ['resc' => $resultat, 'an' => $a, 'bn' => $b]);
    }

    public function combin($n, $k)
    {
        $resn = 1;
        $resk = 1;
        $resnk = 1;
        for ($i = 1; $i <= $n; $i++) {
            $resn = $resn * $i;
        }
        for ($i = 1; $i <= $k; $i++) {
            $resk = $resk * $i;
        }
        for ($i = 1; $i <= $n-$k; $i++) {
            $resnk = $resnk * $i;
        }
        if ($n > $k) {
            $res = $resn / ($resk * $resnk);
            $string = "Combinaison $k dans $n = $res";
            $resultat = array($res, $string);
            return $resultat[0]; // retourne le résultat
        } else {
            return "n doit être plus grand que p";
        }
    }

    public function permutation(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->permut($a, $b);
            $toStore = "Permutation de $a dans $b = $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->permut($a, $b);
        }

        return view('permutation', ['resp' => $resultat, 'ap' => $a, 'bp' => $b]);
    }

    function permut($n,$k){
        $resn = 1;
        $resnk = 1;
        for ($i = 1; $i <= $n; $i++) {
            $resn = $resn * $i;
        }
        for ($i = 1; $i <= $n-$k; $i++) {
            $resnk = $resnk * $i;
        }
        $res = $resn/$resnk;
        $string = "Permutation $n = $res";
        $resultat = array($res,$string);
        return $resultat[0]; // retourne le résult²at
    }
}
