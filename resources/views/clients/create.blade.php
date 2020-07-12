@extends('welcome')

@section('content')
    
    <form action="/clients" method="post" class="mt-2" enctype="multipart/form-data">
        @include('includes.form')
        <div>
        <div class="fileUpload blue-btn btn width100">
            <span>Uploader une photo de profil</span>
            <input type="file" class="uploadlogo @error('image') is-invalid @enderror" name="image"/>
            </div>
        </div>
        @error('image')
        <div class="alert alert-danger"> {{$errors->first('image')}} </div>
        @enderror
        <button type="submit" class="btn btn-primary">Ajouter le client</button>
    </form>
@endsection
