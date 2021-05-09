@extends('template')

@section('title', 'CategoriesNews')

@section('content')
    <h1>Категории новостей</h1>
    <ul>
        @foreach($categories as $category)
            <li><a href="{{ route('category.show', compact('category')) }}">{{ $category->title }}</a></li>
        @endforeach
    </ul>
@endsection
