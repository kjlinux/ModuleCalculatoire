<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use Illuminate\Http\Request;

class MainConvertisseur extends Controller
{
    //
    public function imc(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->indice($b, $a);
            $toStore = "Pour un poids de $a kgs et une taille de $b cm, $resultat";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $resultat = $this->indice($b, $a);
        }

        return view('imc', ['resr' => $resultat, 'ar' => $a, 'br' => $b]);
    }

    function indice($taille,$poids){
        $taille= $taille*0.01;
        $imc=$poids/($taille*$taille);
        
                if ($imc<16.5){
                    $verdict='vous êtes en dénutrition.';
                }
                elseif ($imc<18.5){
                    $verdict='vous êtes maigre.';
                }
                elseif ($imc<25){
                    $verdict='vous avez une corpulence normale.';
                }
                elseif ($imc<30){
                    $verdict='vous êtes en surpoids.';
                }
                elseif ($imc<35){
                    $verdict='vous êtes en état d\'obésité modérée.';
                }
                elseif ($imc<40){
                    $verdict='vous êtes en état d\'obésité sévère.';
                }
                else{
                    $verdict='vous êtes en état d\'obésité massive.';
                }
                $string = "IMC($poids,$taille):$verdict";
                $resultat = array($verdict,$string);
                return $resultat[0];
    }

    public function longueur(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;

            $v = $request->input('v');
            $dep = $request->input('dep');
            $fin = $request->input('fin');
            $resultat = $this->convlong($v, $dep, $fin);
    
            $toStore = "$v $dep = $resultat $fin";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $v = $request->input('v');
            $dep = $request->input('dep');
            $fin = $request->input('fin');
            $resultat = $this->convlong($v, $dep, $fin);
        }


        return view('longueur', ['resl' => $resultat, 'vl' => $v]);
    }

    function convlong($valeur,$formUnit,$toUnit){
        $unites = array(
            'mm' => 0.001,
            'cm' => 0.01,
            'm' => 1,
            'km' => 1000,
            'pouce' => 0.0254,
            'pied'=> 0.3048,
            'yard' => 0.9144,
            'mille' => 1609.344
        );
        $valbase = $valeur*$unites[$formUnit];
        $result = $valbase / $unites[$toUnit];
    
        $string = "$valeur $formUnit = $result $toUnit";
        $resultat = array($result,$string);
        return $resultat[0];
    }

    public function poids(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;

            $v = $request->input('v');
            $dep = $request->input('dep');
            $fin = $request->input('fin');
            $resultat = $this->convert_weight($v, $dep, $fin);
            $toStore = "$v $dep = $resultat $fin";

            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $v = $request->input('v');
            $dep = $request->input('dep');
            $fin = $request->input('fin');
            $resultat = $this->convert_weight($v, $dep, $fin);
        }

        return view('poids', ['resp' => $resultat, 'vp' => $v]);
    }

    function convert_weight($val , $type_val , $type_wanted){

        $tab = array(
          "da"  => 1.67 * pow(10, -24), // dalton 
          "mug"  => 1/1000000, // microgramme 
          "mg"  => 1/1000, 
          "cg"  => 1/100, 
          "gr"  => 0.06479, // grain 
          "dg"  => 1/10, 
          "carat metrique"  => 0.2, 
          "g"  => 1, 
          "scruple"  => 1.296, 
          "dr"  => 1.7718, // dram 
          "drachm"  => 3.887, 
          "dag"  => 10, 
          "oz"  => 28.3495, // once 
          "hg"  => 100, 
          "livre (uk)"  => 453.592, // livre (uk) 
          "livre"  => 500, 
          "kg"  => 1000, 
          "st"  => 6350.3, // stone 
          "quartaut"  => 12700.6, // quartaut 
          "slug"  => 14593, 
          "quintal court"  => 45359, // quintal court (cental) 
          "quintal long"  => 50802.3, // quintal long 
          "q"  => 100000, // quintal 
          "tonne courte"  => 907184.7, // tonne courte 
          "t"  => 1000000, // tonne 
          "tonne longue"  => 1016046.9);  // tonne longue 
          $res = $val * $tab[$type_val] / $tab[$type_wanted];
    
          $string = "$val $type_val = $res $type_wanted";
          $resultat = array($res,$string);
          return $resultat[0];
    }


    public function devise(Request $request){

        if(auth()->check())
        {
            $store = new Historique;

            $v = $request->input('v');
            $dep = $request->input('dep');
            $fin = $request->input('fin');
            $resultat = $this->convdev($v, $dep, $fin);
            $toStore = "$v $dep = $resultat $fin";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        }
        else 
        {
            $v = $request->input('v');
            $dep = $request->input('dep');
            $fin = $request->input('fin');
            $resultat = $this->convdev($v, $dep, $fin);
        }

        return view('devise', ['resd' => $resultat, 'vd' => $v]);
    }

       function convdev($nbr, $Unit, $toUnit) {
        // // URL de l'API de fixer.io
        // $apiUrl = "https://api.fixer.io/latest?base=" . $Unit . "&symbols=" . $toUnit."?apikey=6fX7wTKm7NRB7IBL9273n86I0FN3Tj9r";
    
        // // Effectuer une requête HTTP pour obtenir les taux de change
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.apilayer.com/fixer/latest?symbols=$toUnit&base=$Unit",
        CURLOPT_HTTPHEADER => array(
                "Content-Type: text/plain",
                "apikey: 6fX7wTKm7NRB7IBL9273n86I0FN3Tj9r"
            ),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ));
    
        $response = curl_exec($curl);
    
        curl_close($curl);
    
        // Vérifier si la requête a réussi
        if (!$response) {
            return "Erreur: Impossible d'obtenir les taux de change. Vous n'êtes pas connecté à internet !!";
        }
    
        // Décoder la réponse JSON
        $exchangeRates = json_decode($response, true);
    
        // Calculer le montant converti
        $convertednbr = $nbr * $exchangeRates["rates"][$toUnit];
        $convertednbr = round($convertednbr,2,PHP_ROUND_HALF_UP);
    
        // Retourner le montant converti avec le symbole de la devise cible
        $string = "$nbr $Unit = $convertednbr $toUnit";
        $resultat = array($convertednbr,$string);
        return $resultat[0];
    }
    
    public function temperature(Request $request)
    {
        if(auth()->check())
        {
            $store = new Historique;

            $v = $request->input('v');
            $dep = $request->input('dep');
            $fin = $request->input('fin');
            $resultat = $this->conv_temp($v, $dep, $fin);
            $toStore = "$v $dep = $resultat $fin";
            $store->contenu = $toStore;
            $store->user_id = auth()->user()->id;
            $store->save();
        } else 
        {
            $v = $request->input('v');
            $dep = $request->input('dep');
            $fin = $request->input('fin');
            $resultat = $this->conv_temp($v, $dep, $fin);
        }

        return view('temperature', ['rest' => $resultat, 'vt' => $v]);
    }

    function conv_temp($val , $type_val , $type_wanted){
        $tab_val = array("C", "F", "K", "Re", "Ra"); 
         if (!(in_array($type_val, $tab_val) && in_array($type_wanted, $tab_val))){
            return null;
         } 
         switch ($type_val) { 
            case "C" : // degrés Celsius 
                switch ($type_wanted) { 
                    case "C" : 
                        $res = $val; 
                        break;
                    case "F" : 
                        $res = ($val * 9 / 5 + 32); 
                        break;
                    case "K" : 
                        $res = ($val + 273.16); 
                        break;
                    case "Re" : 
                        $res = ($val * 4 / 5); 
                        break;
                    case "Ra" : 
                        $res = (($val + 273.16) * 1.8); 
                        break;
                } 
                break;
            case "F" : // degrés Fahrenheit 
                switch ($type_wanted) { 
                    case "C" : 
                        $res = (($val - 32) * 5 / 9); 
                        break;
                    case "F" : 
                        $res = $val; 
                        break;
                    case "K" : 
                        $res = ((($val - 32) * 5 / 9) + 273.16); 
                        break;
                    case "Re" : 
                        $res = (($val - 32) * 4 / 9); 
                        break;
                    case "Ra" : 
                        $res = ($val - 32 + 273.16 * 9 / 5);
                        break;
                } 
                break;
            case "K" : // degrés Kelvin 
                switch ($type_wanted) { 
                    case "C" : 
                        $res = ($val - 273.16); 
                        break;
                    case "F" : 
                        $res = (($val - 273.16) * 9 / 5 + 32); 
                        break;
                    case "K" : 
                        $res = $val; 
                        break;
                    case "Re" : 
                        $res = (($val - 273.16) * 4 / 5);
                        break; 
                    case "Ra" : 
                        $res = ($val * 1.8);
                        break;
                } 
                break;
            case "Re" : // degrés Reaumur 
                switch ($type_wanted) { 
                    case "C" : 
                        $res = ($val * 5 / 4); 
                        break;
                    case "F" : 
                        $res = ($val * 9 / 4 + 32); 
                        break;
                    case "K" : 
                        $res = ($val * 5 / 4 + 273.16); 
                        break;
                    case "Re" : 
                        $res = $val; 
                        break;
                    case "Ra" : 
                        $res = (($val * 5 / 4 + 273.16) * 1.8); 
                        break;
            
                } 
                break;
            case "Ra" : // degrés Rankine 
                switch ($type_wanted) { 
                    case "C" : 
                        $res = ($val / 1.8 - 273.16); 
                        break;
                    case "F" : 
                        $res = ($val - 273.16 * 9 / 5 + 32); 
                        break;
                    case "K" : 
                        $res = ($val / 1.8); 
                        break;
                    case "Re" : 
                        $res = (($val / 1.8 - 273.16) * 4 / 5); 
                        break;
                    case "Ra" : 
                        $res = $val; 
                        break;
                }
                break;
        }
        $string = "$val $type_val = $res $type_wanted";
        $resultat = array($res,$string);
        return $resultat[0];
    }

}
