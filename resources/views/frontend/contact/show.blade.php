@extends('layouts.frontend')
@section('title', 'Contact | javokhir-media.uz')
@section('content')
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        @include('frontend.contact.form')
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
