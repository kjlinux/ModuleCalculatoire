@extends('header')
@php
$IMC="";
$Perimetre="active";
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
            <form method="POST" action="{{ url('/ptrapeze/calculer') }}">
                @csrf
                @php
                    $a = "côté 1";
                    $b = "côté 2";
                    $c = "côté 3";
                    $d = "côté 4";
                    $r = "";
                    if (isset($_POST['r'])){
                        $a = $at;
                        $b = $bt;
                        $c = $ct;
                        $d = $dt;
                        $r = $rest;
                    }
                @endphp
                <div class="form-group">
                <label for="exampleInputEmail1">valeur côté 1</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="a" aria-describedby="emailHelp" placeholder="{{$a}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">valeur côté 2</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="b" aria-describedby="emailHelp" placeholder="{{$b}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">valeur côté 3</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="c" aria-describedby="emailHelp" placeholder="{{$c}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">valeur côté 4</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="d" aria-describedby="emailHelp" placeholder="{{$d}}">
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