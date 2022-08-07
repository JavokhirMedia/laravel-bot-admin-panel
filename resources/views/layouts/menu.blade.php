<!-- need to remove -->
<li class="nav-item">
    <a href="{{ url('/dashboard') }}" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>

</li>

<li class="nav-item">
    <a href="{{ route('posts.index') }}" class="nav-link">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>Posts</p>
    </a>

</li>

<li class="nav-item">

    <a href="{{ route('categories.index') }}" class="nav-link ">
        <i class="nav-icon fas fa-swatchbook"></i>
        <p>Categories</p>
    </a>
</li>
