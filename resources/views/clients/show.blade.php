@extends('layouts.master')
@section('title',"detaille : ".$client->id."!!!")
@section('content')
<div class="container p-3 my-4">
    <h1>Info client ...</h1>
    <ul class="list-group">
    <li class="list-group-item">Nom : {{$client->nom}}</li>
    <li class="list-group-item">Ville : {{$client->ville}}</li>
    </ul>
    <h1>Liste de commandes  ...</h1>
    <table class="table table-hover">
    <thead><tr><th>#</th>
    <th>date</th>
    <th>Actions</th></tr></thead>
    <tbody>
      
        @foreach($client->commandes as $cmd):

            <tr>
            <td>{{$cmd->id}}</td>
            <th>{{$cmd->dateCommande}}</th>
            <th>
                <a href="{{route('commandes.show',$cmd->id)}}">Liste Produits</a>
            </th>
            </tr>
         @endforeach

    </tbody>
   </table>


</div>





@endsection