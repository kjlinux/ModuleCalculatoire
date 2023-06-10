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
            <form method="POST" action="{{ url('/poids/calculer') }}">
                @csrf
                @php
                    $v = "exemple: 214";
                    $r = "";
                    if (isset($_POST['r'])){
                        $v = $vp;
                        $r = $resp;
                    }
                @endphp
                <div class="form-group">
                <label for="exampleInputEmail1">Valeur</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="v" aria-describedby="emailHelp" placeholder="{{$v}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">poids initiale</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="dep">
                      <option>da</option>
                      <option>mug</option>
                      <option>mg</option>
                      <option>cg</option>
                      <option>gr</option>
                      <option>dg</option>
                      <option>carat metrique</option>
                      <option>g</option>
                      <option>scruple</option>
                      <option>dr</option>
                      <option>drachm</option>
                      <option>dag</option>
                      <option>oz</option>
                      <option>hg</option>
                      <option>livre (uk)</option>
                      <option>livre</option>
                      <option>kg</option>
                      <option>st</option>
                      <option>quartaut</option>
                      <option>slug</option>
                      <option>quintal court</option>
                      <option>quintal long</option>
                      <option>q</option>
                      <option>tonne courte</option>
                      <option>t</option>
                      <option>tonne longue</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">poids cible</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="fin">
                        <option>da</option>
                        <option>mug</option>
                        <option>mg</option>
                        <option>cg</option>
                        <option>gr</option>
                        <option>dg</option>
                        <option>carat metrique</option>
                        <option>g</option>
                        <option>scruple</option>
                        <option>dr</option>
                        <option>drachm</option>
                        <option>dag</option>
                        <option>oz</option>
                        <option>hg</option>
                        <option>livre (uk)</option>
                        <option>livre</option>
                        <option>kg</option>
                        <option>st</option>
                        <option>quartaut</option>
                        <option>slug</option>
                        <option>quintal court</option>
                        <option>quintal long</option>
                        <option>q</option>
                        <option>tonne courte</option>
                        <option>t</option>
                        <option>tonne longue</option>
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