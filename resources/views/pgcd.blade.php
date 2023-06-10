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
            <form method="POST" action="{{ url('/pgcd/calculer') }}">
                @csrf
                @php
                    $r = "";
                    $a = "nombre 1";
                    $b = "nombre 2";
                    if (isset($_POST['r'])){
                        $r = $respgcd;
                        $a = $aq;
                        $b = $bq;
                    }
                @endphp
                <div class="form-group">
                <label for="exampleInputEmail1">valeur nombre 1</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="a" aria-describedby="emailHelp" placeholder="{{$a}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">valeur nombre 2</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="b" aria-describedby="emailHelp" placeholder="{{$b}}">
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