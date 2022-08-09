<div class="mb-3 pt-4">
    <label for="first-name" class="form-label">First Name</label>
    <input type="text" class="form-control" id="first-name" aria-describedby="titleHelp" name="title" value="{{ old('first_name') ?? $id->first_name }}">
    @error('title')
    <div id="firstNameHelp" class="form-text">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3 pt-4">
    <label for="last-name" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="last-name" aria-describedby="titleHelp" name="title" value="{{ old('last_name') ?? $id->last_name }}">
    @error('last_name')
    <div id="lastNameHelp" class="form-text">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3 pt-4">
    <label for="region" class="form-label">Region</label>
    <input type="text" class="form-control" id="region" aria-describedby="titleHelp" name="title" value="{{ old('region') ?? $id->region }}">
    @error('region')
    <div id="regionHelp" class="form-text">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3 pt-4">
    <label for="district" class="form-label">District</label>
    <input type="text" class="form-control" id="district" aria-describedby="titleHelp" name="title" value="{{ old('district') ?? $id->district }}">
    @error('district')
    <div id="districtHelp" class="form-text">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3 pt-4">
    <label for="phone-number" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="phone-number" aria-describedby="titleHelp" name="title" value="{{ old('phone_number') ?? $id->phone_number }}">
    @error('district')
    <div id="phoneNumberHelp" class="form-text">{{ $message }}</div>
    @enderror
</div>
