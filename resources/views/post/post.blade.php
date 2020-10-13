
@extends('layouts.header')
@section('title')
Auroblog - <strong>{{$post->id}}</strong> {{$post->title_cap}}
@endsection
@section('content')
<div class="card-body">
    <blockquote class="blockquote mb-0">
        <small class="text-sm">{{ $post->content}}</small><br>
        {!! $post->content_md !!}
        <footer class="blockquote-footer"><cite title="Source Title">{{$post->created_at}} - {{$post->author}}</cite></footer>

    </blockquote>
    <a href="{{ url()->previous() }}" class="btn btn-outline-info">Back</a>

</div>
@endsection