<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use Illuminate\Http\Request;

class MainAire extends Controller
{
    //
    public function acarre(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $t = $request->input('v');
            $resultat = $this->aire('carré', [$t]);
            $toStore = "L'aire d'un carré de côté $t est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $store = new Historique;
            $t = $request->input('v');
            $resultat = $this->aire('carré', [$t]);
        }
        
        return view('acarre', ['resc' => $resultat, 'tc' => $t]);
    }

    public function arectangle(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->aire('rectangle', [$a, $b]);
            $toStore = "L'aire d'un rectangle de longueur $a et largeur $b est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->aire('rectangle', [$a, $b]);
        }

        return view('arectangle', ['resr' => $resultat, 'ar' => $a, 'br' => $b]);
    }

    public function atriangle(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->aire('triangle', [$a, $b]);
            $toStore = "L'aire d'un triangle d'hauteur $a et base $b est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->aire('triangle', [$a, $b]);
        }

        return view('atriangle', ['rest' => $resultat, 'at' => $a, 'bt' => $b]);
    }

    public function aparallelogramme(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->aire('parrallélogramme', [$a, $b]);
            $toStore = "L'aire d'un parallélogramme d'hauteur $a et base $b est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->aire('parrallélogramme', [$a, $b]);
        }

        return view('aparallelogramme', ['respp' => $resultat, 'app' => $a, 'bpp' => $b]);
    }

    public function atrapeze(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $c = $request->input('c');
            $resultat = $this->aire('trapèze', [$a, $b, $c]);
            $toStore = "L'aire d'un trapèze avec petite base $a et grande base $b et hauteur $c est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $c = $request->input('c');
            $resultat = $this->aire('trapèze', [$a, $b, $c]);
        }

        return view('atrapeze', ['rest' => $resultat, 'at' => $a, 'bt' => $b, 'ct' => $c]);
    }

    public function adisque(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $resultat = $this->aire('disque', [$a]);
            $toStore = "L'aire d'un disque de rayon $a est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $store = new Historique;
            $a = $request->input('a');
            $resultat = $this->aire('disque', [$a]);
        }

        return view('adisque', ['resd' => $resultat, 'ad' => $a]);
    }


    function aire($fig,$dim){
        switch ($fig) {
            case 'carré':
                //côté * côté
                $val = $dim[0] * $dim[0] ;
                break;
            case 'rectangle':
                // longueur * largeur
                $val = $dim[0] * $dim[1] ;
                break;
            case 'triangle':
                //(base * hauteur) / 2
                $val = ($dim[0] * $dim[1] ) / 2 ;
                break;
            case 'parrallélogramme':
                //base * hauteur
                $val = $dim[0] * $dim[1] ;
                break;
            case 'trapèze':
                //((Base + base) * hauteur) / 2
                $val = (($dim[0] +$dim[1]) * $dim[2] )/2;
                break;
            case 'disque':
                // pi * r^2
                $val = 3.14 * pow(($dim[0]),2);
                $val = round($val,2,PHP_ROUND_HALF_UP);
                break;
            default:
               $val = null ;
                break;
        }
        $string = "Aire $fig = $val";
        $resultat = array($val,$string);
        return $resultat[0];
    }
}