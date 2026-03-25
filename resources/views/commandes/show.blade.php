@extends('layouts.master')
@section('title','Liste de  produits: '.$commande->id)
@section('content')
  
<div class="container my-3 p-3">
    <h2>Liste de produits</h2>
   <table class="table table-hover">
    <thead><tr>
    <th>nom</th>
    <th>unité</th>
    <th>prix</th>
    <th>Actions</th></tr></thead>
    <tbody>
      
        @foreach($commande->produits as $prod):

            <tr>
            <th>{{$prod->nom}}</th>
            <th>{{$prod->unité}}</th>
            <th>{{$prod->prix}}</th>
            <th>
                <a href="{{route('commandes.detach',[$commande->id,$prod->id])}}">Detach</a>
            </th>
            </tr>
         @endforeach

    </tbody>
        </table>






</div>



@endsection
