@extends('header')
@php
$IMC="";
$Perimetre="";
$Aire="active";
$Convertisseur="";
$Arithmetique="";
$Denombrement="";
$historique="";
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/arectangle/calculer') }}">
                @csrf
                @php
                    $a = "Longueur";
                    $b = "Largeur";
                    $r = "";
                    if (isset($_POST['r'])){
                        $a = $ar;
                        $b = $br;
                        $r = $resr;
                    }
                @endphp
                <div class="form-group">
                <label for="a">valeur longueur</label>
                <input type="number" class="form-control" id="a" name="a"  aria-describedby="emailHelp" placeholder="{{$a}}">
                </div>
                <div class="form-group">
                    <label for="b">valeur largeur</label>
                    <input type="number" class="form-control" id="b"  name="b" aria-describedby="emailHelp" placeholder="{{$b}}">
                    </div>
                <div class="form-group">
                    <label for="r">Résultat</label>
                    <input type="number" class="form-control" id="r" name="r"  placeholder="{{$r}}" readonly>
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