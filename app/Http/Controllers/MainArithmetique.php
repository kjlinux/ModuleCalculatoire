<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use Illuminate\Http\Request;

class MainArithmetique extends Controller
{
    //
    public function calculerppcm(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $ppcm = $this->fppcm($a, $b);
            $toStore = "PPCM($a, $b) = $ppcm";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $ppcm = $this->fppcm($a, $b);
        }

        return view('ppcm', ['resultat' => $ppcm, 'az' => $a, 'bz' => $b]);
    }

    function fppcm($a, $b)
    {

        $res = $a * $b;
        while ($a > 1) {
            $r = $a % $b;
            if ($r == 0) {
                $res = $res / $b;
                break;  // sorti quand résultat trouvé
            }
            $a = $b;
            $b = $r;
        }
        $string = "PPCM $a et $b = $res";
        $resultat = array($res, $string);
        return $resultat[0]; // retourne le résultat
    }

    public function calculerpgcd(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $ppcm = $this->pgcd($a, $b);
            $toStore = "PGCD($a, $b) = $ppcm";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $ppcm = $this->pgcd($a, $b);
        }

        return view('pgcd', ['respgcd' => $ppcm, 'aq' => $a, 'bq' => $b]);
    }

    function pgcd($a, $b)
    {
        if ($b == 0) {
            return $a;
        }
        for ($c = $a % $b; $c != 0; $c = $a % $b) :
            $a = $b;
            $b = $c;
        endfor;
        $string = "PGCD $a et $b = $b";
        $resultat = array($b, $string);
        return $resultat[0];
    }

    public function moyenne(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $t = $request->input('element');
            $resultat = $this->fmoyenne($t);
            $toStore = "La moyenne des éléments $t est $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $t = $request->input('element');
            $resultat = $this->fmoyenne($t);
        }

        return view('moyenne', ['res' => $resultat, 't' => $t]);
    }

    function fmoyenne($chaine)
    {
        $tab = explode(",", $chaine);
        $moy = 0;
        $str = "";
        foreach ($tab as $item) {
            $moy += intval($item) / count($tab);
            $str .= "$item ,";
        }

        $string = "Moyenne $str = $moy";
        $resultat = array($moy, $string);
        return $resultat[0]; // retourne le résultat  
    }

    public function facteurpremier(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $t = $request->input('element');
            $resultat = $this->factpre($t);
            $toStore = "Les facteurs premiers de $t sont $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else
        {
            $t = $request->input('element');
            $resultat = $this->factpre($t);
        }

        return view('facteurpremier', ['resfact' => $resultat, 't' => $t]);
    }

    function factpre($num)
    {
        $tab = array(1);
        $str = "1 ";
        $n = 2;
        while ($num > 1) {
            if ($num % $n == 0) {
                while ($num % $n == 0) {
                    array_push($tab, $n);
                    $num = $num / $n;
                    $str .= "* $n";
                }
            }
            $n = $n + 1;
        }
        $string = "Facteur premier $num = $str";
        $resultat = array($tab, $string);
        return implode(',', $resultat[0]); // retourne le résultat
    }

}
