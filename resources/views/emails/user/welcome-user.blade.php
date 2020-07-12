@component('mail::message')
# Bienvenue {{ $user->name}}
Merci de vous être enregistré avec {{$user->email}}
{{ config('app.name') }}
@endcomponent
