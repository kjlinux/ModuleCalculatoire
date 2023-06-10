@extends('header')
@php
$IMC="";
$Perimetre="";
$Aire="";
$Convertisseur="active";
$Arithmetique="";
$Denombrement="";
$historique="";
$historique="";
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/longueur/calculer') }}">
                @csrf
                @php
                    $v = "exemple: 214";
                    $r = "";
                    if (isset($_POST['r'])){
                        $v = $vl;
                        $r = $resl;
                    }
                @endphp
                <div class="form-group">
                <label for="exampleInputEmail1">Valeur</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="v" aria-describedby="emailHelp" placeholder="{{$v}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">unité initiale</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="dep">
                      <option>mm</option>
                      <option>cm</option>
                      <option>m</option>
                      <option>km</option>
                      <option>pouce</option>
                      <option>pied</option>
                      <option>yard</option>
                      <option>mille</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">unité cible</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="fin">
                        <option>mm</option>
                        <option>cm</option>
                        <option>m</option>
                        <option>km</option>
                        <option>pouce</option>
                        <option>pied</option>
                        <option>yard</option>
                        <option>mille</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Résultat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="r" placeholder="{{$r}}" readonly>
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