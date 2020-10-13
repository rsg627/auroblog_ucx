
@extends('layouts.header')
@section('title')
Admin
@endsection
@section('content')
<div class="d-flex justify-content-lg-end m-3">
 <a href="/admin/create" class="btn btn-outline-success">Add Post</a>
<a href="{{ url()->previous() }}" class="btn btn-outline-info">Back</a>
</div>
<table class="table table-hover table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Date</th>
            <th scope="col">Slug</th>
            <th scope="col">Content</th>
            <th scope="col">Options</th>
        </tr>
    </thead>
    <tbody class="text-left">
        @foreach ($posts as $post)
        <tr>
            <th scope="row"><small>{{$post->id}}</small></th>
            <td><small>{{$post->title_cap}}</small></td>
            <td><small>{{$post->author}}</small></td>
            <td><small>{{$post->created_at}}</small></td>
            <td><small>{{$post->slug}}</small> </td>
            <td><small><a href="/admin/{{$post->slug}}">{{$post->content}}</a></small></td>
            <td>
                <div class="row">
                <a href="/admin/{{$post->id}}/edit" type="button" class="btn btn-outline-success">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </a>
                <form action="/admin/{{$post->id }}" method="post">
                    <button type="submit" class="btn btn-outline-danger">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </button>
                    @method('delete')
                    @csrf
                </form>
</div>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>
<div class="row justify-content-md-center mt-2">
{{$posts->links()}}
</div>
@endsection
