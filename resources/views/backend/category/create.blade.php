@extends('layouts.app')
@section('title', 'Create Post - javokhir-media.uz')
@section('content')
<form action="{{ route('categories.store') }}" method="post">
    @csrf
    @include('backend.category.form')
    <button class="btn btn-primary" type="submit">Save</button>
    <a href="{{ route('categories.index') }}"><button type="button" class="btn btn-danger">Bekor qilish</button></a>
</form>
@endsection
