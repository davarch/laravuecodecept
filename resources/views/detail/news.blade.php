@extends('layouts.app')
@section('title', $meta_title)
@section('description', $meta_description)
@section('keywords', $meta_keywords)

@section('content')
    <h1>{{ $name }}</h1>

    {{ $content }}
@endsection
