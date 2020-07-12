@component('mail::message')
# Salut

Ceci est un message de {{$datas['nom']}} ({{$datas['email']}})

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
