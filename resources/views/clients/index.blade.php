@extends('layouts.master')
@section('title','Liste des clients...!')
@section('content')
<div class="container p-3">
    <h2>Liste des clients</h2>

   <table class="table table-hover">
    <thead><tr><th>#</th>
    <th>nom</th>
    <th>Ville</th>
    <th>Pays</th>
    <th>Actions</th></tr></thead>
    <tbody>
      
        @foreach($clients as $clt):

            <tr>
            <td>{{$clt->id}}</td>
            <th>{{$clt->nom}}</th>
            <th>{{$clt->ville}}</th>
            <th>{{$clt->pays}}</th>
            <th>
                <a href="{{route('clients.show',$clt->id)}}">Details</a>
            </th>
            </tr>
         @endforeach

        




    

    </tbody>
   </table>
   {{$clients->links()}}


</div>




@endsection
