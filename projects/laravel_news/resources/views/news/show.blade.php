@extends('template')

@section('title', 'news_category')

@section('content')

    <h1>{{ $news->title }}</h1>
    <h3>Категория: {{ $category->title }}</h3>
    <p>{{ $news->description }}</p>

@endsection
