
@csrf
<div class="form-row">
    <div class="form-group col-md-6">
        <label class="sr-only" for="inlineFormInput">Votre nom</label>
        <input type="text" name="nom"  placeholder="Nom" value="{{old('nom') ?? $client->nom}}"
        class="form-control mb-2 @error('nom') is-invalid @enderror" id="inlineFormInput">
        @error('nom')
        <div class="alert alert-danger"> {{$errors->first('nom')}} </div>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label class="sr-only" for="inlineFormInput">Votre email</label>
        <input type="email" name="email" placeholder="Email" value="{{old('email') ?? $client->email}}"
        class="form-control mb-2 @error('email') is-invalid @enderror" id="inlineFormInput">
        @error('email')
        <div class="alert alert-danger"> {{$errors->first('email')}} </div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <select class="custom-select" id="inputGroupSelect01" name="status" >
            <option value="0">Choisir</option>
            @foreach($client->getStatusOptions() as $key=>$value)
                <option value="{{$key}}" {{ $client->status==$value ? 'selected':true}}>{{$value}}</option>
            @endforeach 
        </select>
        @error('status')
            <div class="alert alert-danger"> {{$status->first('status')}} </div>
        @enderror
    </div>  
    <div class="form-group col-md-6">
        <select class="custom-select" id="inputGroupSelect01" name="entreprise_id" >
            <option value="0">Choisir</option>
            @foreach($entreprises as $entreprise)
                <option value="{{$entreprise->id}}" {{ $client->entreprise_id==$entreprise->id ?'selected':true }}> {{$entreprise->id}} </option>
            @endforeach 

        </select>
        @error('entreprise_id')
            <div class="alert alert-danger"> {{$status->first('entreprise_id')}} </div>
        @enderror
    </div> 
</div>
