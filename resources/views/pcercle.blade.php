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
            <form method="POST" action="{{ url('/pcercle/calculer') }}">
                @csrf
                @php
                    $c = "rayon";
                    $r = "";
                    if (isset($_POST['r'])){
                        $c = $ac;
                        $r = $resce;
                    }
                @endphp
                <div class="form-group">
                <label for="v">valeur du rayon</label>
                <input type="number" class="form-control" id="v" name="v" aria-describedby="emailHelp" placeholder="{{$c}}">
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