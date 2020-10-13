
@extends('layouts.header')

@section('content')

<div class="">
    <div class="row">
        @foreach ($posts as $post)
        <div class="card col-md-3 col-xs-12 text-left mt-1 ">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <strong>{{$post->id}}</strong> <span class="text-capitalize">{{$post->title}}</span>
                    </div>
                    <div class="col-md-2">
                        <a href="/post/{{$post->slug}}" class="btn btn-outline-info">Detail</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <small class="text-sm">{{ Str::limit($post->content, 300) }}</small>
                    <footer class="blockquote-footer"><cite title="Source Title">{{$post->created_at}} - {{$post->author}}</cite></footer>

                </blockquote>
            </div>
        </div>
        @endforeach

    </div>
    <div class="row justify-content-md-center mt-2">
        {{$posts->links()}}
    </div>

</div>
@endsection
