@extends('header')
@php
$IMC="";
$Perimetre="";
$Aire="";
$Convertisseur="active";
$Arithmetique="";
$Denombrement="";
$historique="";
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/devise/calculer') }}">
                @csrf
                @php
                    $v = "exemple: 214";
                    $r = "";
                    if (isset($_POST['r'])){
                        $v = $vd;
                        $r = $resd;
                    }
                @endphp
                <div class="form-group">
                <label for="exampleInputEmail1">Valeur</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="v" aria-describedby="emailHelp" placeholder="{{$v}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">devise initiale</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="dep">
                        <option>USD</option>
                        <option>JPY</option>
                        <option>BGN</option>
                        <option>CZK</option>
                        <option>DKK</option>
                        <option>GBP</option>
                        <option>HUF</option>
                        <option>PLN</option>
                        <option>RON</option>
                        <option>SEK</option>
                        <option>CHF</option>
                        <option>ISK</option>
                        <option>NOK</option>
                        <option>TRY</option>
                        <option>AUD</option>
                        <option>CAD</option>
                        <option>BRL</option>
                        <option>CNY</option>
                        <option>HKD</option>
                        <option>EUR</option>
                        <option>ILS</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">devise cible</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="fin">
                        <option>USD</option>
                        <option>JPY</option>
                        <option>BGN</option>
                        <option>CZK</option>
                        <option>DKK</option>
                        <option>GBP</option>
                        <option>HUF</option>
                        <option>PLN</option>
                        <option>RON</option>
                        <option>SEK</option>
                        <option>CHF</option>
                        <option>ISK</option>
                        <option>NOK</option>
                        <option>TRY</option>
                        <option>AUD</option>
                        <option>CAD</option>
                        <option>BRL</option>
                        <option>CNY</option>
                        <option>HKD</option>
                        <option>EUR</option>
                        <option>ILS</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Résultat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="r" placeholder="{{$r}}" readonly>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger">Calculer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection