<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use Illuminate\Http\Request;

class MainPerimetre extends Controller
{
    //
    public function pcarre(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $t = $request->input('v');
            $resultat = $this->peri('carré', [$t]);
            $toStore = "Le périmètre du carré de côté $t est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else
        {
            $t = $request->input('v');
            $resultat = $this->peri('carré', [$t]);
        }

        return view('pcarre', ['resc' => $resultat, 'tc' => $t]);
    }

    public function prectangle(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->peri('rectangle', [$a, $b]);
            $toStore = "Le périmètre du rectangle de longueur $a et largeur $b est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->peri('rectangle', [$a, $b]);
        }

        return view('prectangle', ['resr' => $resultat, 'ar' => $a, 'br' => $b]);
    }

    public function ptriangle(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $c = $request->input('c');
            $resultat = $this->peri('triangle', [$a, $b, $c]);
            $toStore = "Le périmètre du triangle de côtés $a, $b et $c est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $c = $request->input('c');
            $resultat = $this->peri('triangle', [$a, $b, $c]);
        }

        return view('ptriangle', ['rest' => $resultat, 'at' => $a, 'bt' => $b, 'ct' => $c]);
    }

    public function pparallelogramme(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $c = $request->input('c');
            $d = $request->input('d');
            $resultat = $this->peri('parallelogramme', [$a, $b, $c, $d]);
            $toStore = "Le périmètre du parallelogramme de côtés $a, $b, $c et $d est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $c = $request->input('c');
            $d = $request->input('d');
            $resultat = $this->peri('parallelogramme', [$a, $b, $c, $d]);
        }

        return view('pparallelogramme', ['respp' => $resultat, 'app' => $a, 'bpp' => $b, 'cpp' => $c, 'dpp' => $d]);
    }

    public function ptrapeze(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $c = $request->input('c');
            $d = $request->input('d');
            $resultat = $this->peri('trapeze', [$a, $b, $c, $d]);
            $toStore = "Le périmètre du trapèze de côtés $a, $b, $c et $d est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $c = $request->input('c');
            $d = $request->input('d');
            $resultat = $this->peri('trapeze', [$a, $b, $c, $d]);
        }

        return view('ptrapeze', ['rest' => $resultat, 'at' => $a, 'bt' => $b, 'ct' => $c, 'dt' => $d]);
    }

    public function pcercle(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('v');
            $resultat = $this->peri('cercle', [$a]);
            $toStore = "Le périmètre du cercle de rayon $a est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $a = $request->input('v');
            $resultat = $this->peri('cercle', [$a]);     
        }

        return view('pcercle', ['resce' => $resultat, 'ac' => $a]);
    }

    function peri($fig,$dim){
        switch ($fig) {
            case 'carré':
                //4 * côté
                $val = 4 * $dim[0] ;
                break;
            case 'rectangle':
                //2 * (longueur + largeur)
                $val = 2 * ($dim[0] + $dim[1]) ;
                break;
            case 'triangle':
                //côté1 + côté2 + côté3
                $val = $dim[0] +$dim[1] + $dim[2] ;
                break;
            case 'parallelogramme':
                //côté1 + côté2 + côté3 + côté4
                $val = $dim[0] +$dim[1] + $dim[2] + $dim[3];
                break;
            case 'trapeze':
                //côté1 + côté2 + côté3 + côté4
                $val = $dim[0] +$dim[1] + $dim[2] + $dim[3];
                break;
            case 'cercle':
                //2 * pi * rayon
                $val = 2 * $dim[0] *3.14;
                $val = round($val,2,PHP_ROUND_HALF_UP);
                break;
            default:
               $val = null ;
                break;
        }
        $string = "Périmètre du $fig = $val";
        $resultat = array($val,$string);
        return $resultat[0];
    }
    
}