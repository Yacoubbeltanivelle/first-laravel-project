@extends('layouts.app')
@section('title', 'Page non trouvée')
@section('content')
<h2 style="color: red;">Oups ! Page non trouvée.</h2>
<p>Désolé, la page que vous cherchez n'existe pas.</p>
<a href="{{ route('home') }}">Retour à l'accueil</a>
@endsection