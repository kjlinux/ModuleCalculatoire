@extends('header')
@php
$IMC="active";
$Perimetre="";
$Aire="";
$Convertisseur="";
$Arithmetique="";
$Denombrement="";
$historique="";
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/calculer') }}">
                @csrf
                @php
                    $a = "entrer poids";
                    $b = "taille";
                    $r = "";
                    if (isset($_POST['r'])){
                        $a = $ar;
                        $b = $br;
                        $r = $resr;
                    }
                @endphp
                <div class="form-group">
                <label for="a">Poids en kgs</label>
                <input type="number" class="form-control" id="a" name="a"  aria-describedby="emailHelp" placeholder="{{$a}}">
                </div>
                <div class="form-group">
                    <label for="b">Taille en cm</label>
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