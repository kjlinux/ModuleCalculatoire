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
            <form method="POST" action="{{ url('permutation/calculer') }}">
                @csrf
                @php
                    $r = "";
                    $a = "n";
                    $b = "p";
                    if (isset($_POST['r'])){
                        $r = $resp;
                        $a = $ap;
                        $b = $bp;
                    }
                @endphp
                <div class="form-group">
                <label for="a">valeur de n</label>
                <input type="number" class="form-control" id="a" name="a" aria-describedby="emailHelp" placeholder="{{$a}}">
                </div>
                <div class="form-group">
                    <label for="b">valeur de p</label>
                    <input type="number" class="form-control" id="b" name="b" aria-describedby="emailHelp" placeholder="{{$b}}">
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