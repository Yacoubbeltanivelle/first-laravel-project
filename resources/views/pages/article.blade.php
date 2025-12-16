@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
<h1>Article id : {{ $id }}</h1>
@endsection