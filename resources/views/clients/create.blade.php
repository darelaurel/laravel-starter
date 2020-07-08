@extends('welcome')

@section('content')
    
    <form action="/clients" method="post" class="mt-2">
        @include('includes.form')
        <button type="submit" class="btn btn-primary">Ajouter le client</button>
    </form>
@endsection
