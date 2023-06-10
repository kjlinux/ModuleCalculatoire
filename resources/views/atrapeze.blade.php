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
            <form method="POST" action="{{ url('/atrapeze/calculer') }}">
                @csrf
                @php
                    $a = "petite base";
                    $b = "grande base";
                    $c = "hauteur";
                    $r = "";
                    if (isset($_POST['r'])){
                        $a = $at;
                        $b = $bt;
                        $c = $ct;
                        $r = $rest;
                    }
                @endphp
                <div class="form-group">
                <label for="exampleInputEmail1">valeur petite base</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="a" aria-describedby="emailHelp" placeholder="{{$a}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">valeur grande base</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="b" aria-describedby="emailHelp" placeholder="{{$b}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">hauteur</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="c" aria-describedby="emailHelp" placeholder="{{$c}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Résultat</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="r" placeholder="{{$r}}" readonly>
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