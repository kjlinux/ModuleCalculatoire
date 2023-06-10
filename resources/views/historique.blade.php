@extends('header')
@php
$IMC="";
$Perimetre="";
$Aire="";
$Convertisseur="";
$Arithmetique="";
$Denombrement="";
@endphp
@section('content')
<div class="container">
  <table class="table">
    <tbody>
      @forelse ($historiques as $historique)
        <tr>
          <td> {{$historique->contenu}} </td>
          <td class="text-right"> {{$historique->created_at->diffForHumans()}} </td>
        </tr>
      @empty
        <tr>
          <td>Vous n'avez aucun historique, veuillez effectuer un calcul !</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection