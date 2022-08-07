@extends('layouts.app')

@section('title', 'List of categories - javokhir-media.uz')

@section('content')
<h2 class="text-center p-3">Categories</h2>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{ route('categories.create') }}">
        <button class="btn btn-outline-success" type="button">Add Category</button>
    </a>
</div>
<div class="mt-4"></div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>№</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
        <tr>
            <td>{{ (($categories->currentpage()-1) * $categories->perpage() + ($loop->index+1)) }}</td>
            <td><a href="{{ url('/category').'/'.$category->name }}" target="_blank" class="text-decoration-none">{{ $category->name }}</a></td>
            <td>
                <form action="{{ route('categories.destroy', ['category'=>$category->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('categories.show', ['category'=>$category->id]) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('categories.edit', ['category'=>$category->id]) }}" class="btn btn-success btn-sm">
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

{{ $categories->links() }}
@endsection
