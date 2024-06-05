@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@else
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif
    <h1>Create Airport</h1>
    <form action="{{ route('airport.store') }}" method="POST">
        @csrf
        <label for="airport_name">Name:</label>
        <input type="text" id="airport_name" name="airport_name">
        @error('airport_name')
        <div>{{ $message }}</div>
        @enderror
        <label for="airport_code">Code:</label>
        <input type="text" id="airport_code" name="airport_code">
        @error('airport_code')
        <div>{{ $message }}</div>
        @enderror
        <button type="submit">Create</button>
    </form>

