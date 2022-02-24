@extends('layouts.app')
@section('content')

     <h1>Page principale</h1>
     <button><a href="/create">Ajouter un membre</a></button>
    @include('partials.tabMembers')
@endsection