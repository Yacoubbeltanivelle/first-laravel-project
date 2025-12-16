@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
<h2>Article id : {{ $id }}</h2>
@endsection