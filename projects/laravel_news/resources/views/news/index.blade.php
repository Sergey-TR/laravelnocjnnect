@extends('template')

@section('title', 'news')

@section('content')
    <h1>All news</h1>
    <ul>
        @foreach($news as $newsItem)
            <li><a href="{{ route('news.show', ['news' => $newsItem]) }}">{{ $newsItem->title }}</a></li>
        @endforeach
    </ul>
@endsection
