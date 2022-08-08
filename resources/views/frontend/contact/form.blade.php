<div class="card shadow-sm mb-2">
    <div class="card-body">
        <h1 class="text-center">Contact</h1>
        <hr style="width: 100%; background-color: #FFFFFF">
        <div class="mb-2 pt-1">
            <label for="name" class="form-label">Your name</label>
            <input type="text" class="form-control input" placeholder="Enter your name" name="name"
                   aria-label="Enter your name" aria-describedby="button" value="{{ request()->input('name') }}"
                   required>
            @error('name')
            <div id="nameHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2 pt-1">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control input" placeholder="Enter your email" name="email"
                   aria-label="Enter your email" aria-describedby="button" required>
            @error('email')
            <div id="emailHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2 pt-1">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" id="phone" class="form-control input" placeholder="Enter your phone number" name="phone"
                   aria-label="Enter your phone number" aria-describedby="button" required>
            @error('phone')
            <div id="phoneHelp" class="form-text" style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2 pt-1">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" id="subject" class="form-control input"
                   placeholder="Enter the subject of the application" aria-label="Enter the subject of the application"
                   aria-describedby="button" required>
        </div>
        <div class="mb-2 pt-1">
            <label for="subject" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="3" aria-describedby="contentHelp" name="content"
                      placeholder="Enter text of the application"></textarea>
        </div>
        <br>
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</div>
