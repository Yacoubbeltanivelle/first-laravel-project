@extends('layouts.app')

@section('title', 'Article ' . $article->title)

@section('content')
<x-article
    :title="$article['title']"
    :description="$article['description']" />
@endsection