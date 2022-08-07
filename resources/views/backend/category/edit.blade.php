@extends('layouts.app')
@section('title', 'Edit Post - javokhir-media.uz')
@section('content')
<form method="post" action="{{ route('categories.update', ['category'=>$category->id]) }}">
    @method('PUT')
    @csrf
    @include('backend.category.form')
    <button class="btn btn-primary" type="submit">Save</button>
    <a href="{{ route('categories.index') }}"><button type="button" class="btn btn-danger">Cansel</button></a>
</form>
@endsection
