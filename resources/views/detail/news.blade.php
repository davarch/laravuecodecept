@extends('layouts.app')
@section('title', $meta_title)
@section('description', $meta_description)
@section('keywords', $meta_keywords)

@section('content')
    <h1>{{ $name }}</h1>

    {{ $content }}

    <hr />

    <div class="col-md-6">
        <router-view name="indexComment" v-bind:id_post="{{ $id_post }}"></router-view>
        <router-view></router-view>
    </div>
@endsection
