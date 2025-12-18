@extends('layouts.app')

@section('title', 'Article ' . $article->title)

@section('content')
<h2>Article: {{ $article->title }}</h2>
<p> {{ $article->description }} </p>
@endsection
