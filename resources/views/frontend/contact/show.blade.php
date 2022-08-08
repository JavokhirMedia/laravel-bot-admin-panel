@extends('layouts.frontend')
@section('title', 'Contact | javokhir-media.uz')
@section('content')
    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('frontend.contact.form')
    </form>
@endsection
