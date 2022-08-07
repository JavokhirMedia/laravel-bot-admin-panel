@extends('layouts.app')
@section('title', 'Admin panel - javokhir-media.uz')
@section('content')
<div class="row pt-4">
    <div class="col-md-3">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $postscount }}</h3>

                <p>Posts</p>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <a href="{{ route('posts.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-md-3">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $categoriescount }}</h3>

                <p>Categories</p>
            </div>
            <div class="icon">
                <i class="fas fa-swatchbook"></i>
            </div>
            <a href="{{ route('categories.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-md-3">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $categoriescount }}</h3>

                <p>Bot users</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('categories.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-md-3">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $categoriescount }}</h3>

                <p>Appeals</p>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <a href="{{ route('categories.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
@endsection
