@extends('welcome')

@section('content')

    @if(!session()->has('message'))
        <form action=" {{route('contact.store')}} " method="post" class="mt-5">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="sr-only" for="inlineFormInput">Votre nom</label>
                    <input type="text" name="nom"  placeholder="Nom" value="{{old('nom')}}"
                    class="form-control mb-2 @error('nom') is-invalid @enderror" id="inlineFormInput">
                    @error('nom')
                    <div class="alert alert-danger"> {{$errors->first('nom')}} </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label class="sr-only" for="inlineFormInput">Votre email</label>
                    <input type="email" name="email" placeholder="Email" value="{{old('email')}}"
                    class="form-control mb-2 @error('email') is-invalid @enderror" id="inlineFormInput">
                    @error('email')
                    <div class="alert alert-danger"> {{$errors->first('email')}} </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Message"  rows="3">
                    {{old('message')}}
                </textarea>
                @error('message')
                    <div class="alert alert-danger mt-4"> {{$errors->first('message')}} </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Contactez-nous</button>
        </form>
        @endif

@endsection
