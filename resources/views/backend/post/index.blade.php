@extends('layouts.app')

@section('title', 'List of posts - javokhir-media.uz')

@section('content')
<h2 class="text-center p-3">Posts</h2>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{ route('posts.create') }}">
        <button class="btn btn-outline-success" type="button">Add post</button>
    </a>
</div>
<div class="mt-4"></div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>№</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)
        <tr>
            <td>{{ (($posts->currentpage()-1) * $posts->perpage() + ($loop->index+1)) }}</td>
            <td><a href="{{ url('/').'/'.$post->url }}" target="_blank" class="text-decoration-none">{{ $post->title }}</a></td>
            <td>
                <form action="{{ route('posts.destroy', ['post'=>$post->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('posts.show', ['post'=>$post->id]) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('posts.edit', ['post'=>$post->id]) }}" class="btn btn-success btn-sm">
                        <i class="far fa-edit"></i>
                    </a>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td></td>
            <td>Hech narsa topilmadi</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{ $posts->links() }}
@endsection
