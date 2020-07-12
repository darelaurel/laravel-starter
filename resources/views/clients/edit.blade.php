@extends('welcome')

@section('content')
   <div class="mt-2"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/clients">Clients</a></li>
                <li class="breadcrumb-item"><a href="/clients/{{$client->id}}">{{$client->id}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editer </li>
            </ol>
        </nav>
    </div>
    <div class="mt-5">
        <form action="{{route('clients.update',['client' =>$client->id])}}" enctype="multipart/form-data" method="post" class="mt-2">
            @method('PATCH')
            @include('includes.form')
            <div class="fileUpload blue-btn btn width100">
                <span> {{ 'Uploader une photo de profil' ?? $client->image}}</span>
                <input type="file" class="uploadlogo @error('image') is-invalid @enderror" name="image"/>
                </div>
            </div>
            @error('image')
                <div class="alert alert-danger"> {{$errors->first('image')}} </div>
            @enderror
            <button type="submit" class="btn btn-primary">Modifier le client</button>
        </form>
    </div>
@endsection


