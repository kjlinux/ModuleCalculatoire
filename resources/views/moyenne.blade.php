@extends('header')
@php
$IMC="";
$Perimetre="";
$Aire="";
$Convertisseur="";
$Arithmetique="active";
$Denombrement="";
$historique="";
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/moyenne/calculer') }}">
                @csrf
                @php
                    $tableau = "1, 3, 7, 12";
                    $r = "";
                    if (isset($_POST['r'])){
                        $tableau = $t;
                        $r = $res;
                    }
                @endphp
                <div class="form-group">
                    <label for="element">liste des nombres</label>
                    <input type="text" class="form-control" id="element" name="element" aria-describedby="emailHelp" placeholder="{{$tableau}}">
                </div>
                <small id="emailHelp" class="form-text text-muted">Veuillez séparer chaque prochain nombre par une virgule</small>
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