{{--<h5 class="m-2 pb-2 text-align: center">Your name</h5>--}}
{{--<h5 class="m-2 pb-2" style="text-align: center">Contact</h5>--}}
<div class="card shadow-sm mb-2">
    <div class="card-body">
        <h1 class="text-center">Contact</h1>
        <hr style="width: 100%; background-color: #FFFFFF">
        <div class="mb-2 pt-1">
            <label for="name" class="form-label">Your name</label>
            <input type="text" class="form-control search-input" placeholder="Enter your name" name="name" aria-label="Enter your name" aria-describedby="button" value="{{ request()->input('name') }}" required>
            @error('name')
            <div id="nameHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2 pt-1">
            <label for="name" class="form-label">Email</label>
            <input type="email" class="form-control search-input" placeholder="Enter your email" name="email" aria-label="Enter your email" aria-describedby="button" value="{{ request()->input('email') }}" required>
            @error('name')
            <div id="nameHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
