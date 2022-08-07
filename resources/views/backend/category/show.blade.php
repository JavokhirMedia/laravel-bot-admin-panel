@extends('layouts.app')
@section('title', 'View Posts - javokhir-media.uz')
@section('content')
<h2 class="text-center p-3">View</h2>
<div class="row">
    <div class="col-md-6">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td>{{ $category->name }}</td>
            </tr>
        </table>
        <form action="{{ route('categories.destroy', ['category'=>$category->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <a href="{{ route('categories.edit', ['category'=>$category->id]) }}" class="btn btn-success">
                Edit
            </a>
            <button type="submit" class="btn btn-danger">
                Delete
            </button>
            <a href="{{ route('categories.index') }}" class="btn btn-primary">
                Back
            </a>
        </form>
    </div>
</div>
@endsection
