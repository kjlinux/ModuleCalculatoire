@extends('header')
@php
$IMC="";
$Perimetre="";
$Aire="";
$Convertisseur="active";
$Arithmetique="";
$Denombrement="";
$historique="";
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/temperature/calculer') }}">
                @csrf
                @php
                    $v = "exemple: 21";
                    $r = "";
                    if (isset($_POST['r'])){
                        $v = $vt;
                        $r = $rest;
                    }
                @endphp
                <div class="form-group">
                <label for="exampleInputEmail1">Valeur</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="v" aria-describedby="emailHelp" placeholder="{{$v}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">température initiale</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="dep">
                        <option>C</option>
                        <option>F</option>
                        <option>K</option>
                        <option>Re</option>
                        <option>Ra</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">température cible</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="fin">
                        <option>C</option>
                        <option>F</option>
                        <option>K</option>
                        <option>Re</option>
                        <option>Ra</option>
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