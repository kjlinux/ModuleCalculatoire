@extends('header')
@php
$IMC="";
$Perimetre="";
$Aire="";
$Convertisseur="";
$Arithmetique="";
$Denombrement="active";
$historique="";
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/factoriel/calculer') }}">
                @csrf
                @php
                    $tableau = "Entrer un nombre";
                    $r = "";
                    if (isset($_POST['r'])){
                        $tableau = $t;
                        $r = $resfacto;
                    }
                @endphp
                <div class="form-group">
                <label for="element">valeur nombre</label>
                <input type="number" class="form-control" id="element" name="element" aria-describedby="emailHelp" placeholder="{{$tableau}}">
                </div>
                <div class="form-group">
                    <label for="r">Résultat</label>
                    <input type="number" class="form-control" id="r" name="r" placeholder="{{$r}}" readonly>
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