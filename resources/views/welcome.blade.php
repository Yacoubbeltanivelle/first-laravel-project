@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
<h2>Bienvenue sur la page d’accueil</h2>
<div>
    @foreach($articles as $article)
    <a href="{{ route('article.details', $article->id) }}">
        <x-article
            :title="$article['title']"
            :description="$article['description']" />
    </a>
    @endforeach

</div>
@endsection
