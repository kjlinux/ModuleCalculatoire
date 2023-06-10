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
            <form method="POST" action="{{ url('/aparallelogramme/calculer') }}">
                @csrf
                @php
                    $a = "Hauteur";
                    $b = "Base";
                    $r = "";
                    if (isset($_POST['r'])){
                        $a = $app;
                        $b = $bpp;
                        $r = $respp;
                    }
                @endphp
                <div class="form-group">
                <label for="exampleInputEmail1">valeur hauteur</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="a" aria-describedby="emailHelp" placeholder="{{$a}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">valeur base</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="b" aria-describedby="emailHelp" placeholder="{{$b}}">
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