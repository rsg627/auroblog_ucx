
@extends('layouts.header')
@section('title')
Edit
@endsection
@section('content')
<div class="container text-left">
    <form action="/admin/{{$post->id }}" method="post">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label >Slug</label>
                    <input type="email" readonly class="form-control"  placeholder="Slug" value="{{$post->slug}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Created</label>
                    <input type="text" class="form-control"  placeholder="Created At" readonly="" value="{{$post->created_at}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" minlength="3" name="title" required=""  placeholder="Title" value="{{$post->title}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Author</label>
                    <input type="text" class="form-control" name="author"  required="" placeholder="Author" value="{{$post->author}}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label >Content</label>
            <textarea class="form-control" name="content" required="" rows="4" >{{$post->content}}</textarea>
        </div>
        <div class="row">
            <div class="col text-center">
                <button  type="submit" class="btn btn-lg  btn-outline-primary">
                    Save
                </button>
            </div></div>
        @if(is_null($post->id))
        @method('post')
        @else
        @method('put')
        @endif
         @csrf
    </form>
</div>
@endsection