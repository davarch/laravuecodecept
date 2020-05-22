@extends('layouts.app')
@section('title', $meta_title)
@section('description', $meta_description)
@section('keywords', $meta_keywords)

@section('content')
    <h1>{{ $name }}</h1>

    <p>Список новостей:</p>
    <ul>
        @foreach ($posts as $post)
            @if($post->url != '/')
                <li>
                    <a href="/news/{{ $post->url }}">{{ $post->name }}</a>
                </li>
            @endif
        @endforeach
    </ul>
@endsection
