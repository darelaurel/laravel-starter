@extends('welcome')

@section('content')
   <div class="mt-2"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/clients">Clients</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$client->id}} </li>
                <li class="breadcrumb-item active" aria-current="page">Editer </li>
            </ol>
        </nav>
    </div>
    <div class="mt-5">
        <form action="/clients/{{$client->id}}" method="post" class="mt-2">
            @method('PATCH')
            @include('includes.form')
            <button type="submit" class="btn btn-primary">Modifier le client</button>
        </form>
    </div>
@endsection


