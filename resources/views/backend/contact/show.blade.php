@extends('layouts.app')
@section('title', 'View Posts - javokhir-media.uz')
@section('content')
<h2 class="text-center p-3">View</h2>
<div class="row">
    <div class="col-md-6">
        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <td>{{ $post->title }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td><img src="/uploads/{{ $post->photo }}" alt="{{ $post->title }}" class="img-fluid" width="120px" height="80px"></td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ $post->category->name }}</td>
            </tr>
            <tr>
                <th>Created time</th>
                <td>{{ $post->created_at }}</td>
            </tr>
            <tr>
                <th>Short text | Description</th>
                <td>{!! $post->description !!}</td>
            </tr>
            <tr>
                <th>Long text | Content</th>
                <td>{!! $post->content !!}</td>
            </tr>
        </table>
        <form action="{{ route('posts.destroy', ['post'=>$post->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <a href="{{ route('posts.edit', ['post'=>$post->id]) }}" class="btn btn-success">
                Edit
            </a>
            <button type="submit" class="btn btn-danger">
                Delete
            </button>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">
                Back
            </a>
        </form>
    </div>
</div>
@endsection
