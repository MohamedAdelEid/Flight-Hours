@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@else
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif

<h1>Create Aircraft</h1>
    <form action="{{ route('aircraft.store') }}" method="POST">
        @csrf
        <label for="aircraft_name">Name:</label>
        <input type="text" id="aircraft_name" name="aircraft_name">
        @error('aircraft_name')
        <div>{{ $message }}</div>
        @enderror
        <label for="aircraft_code">Code:</label>
        <input type="text" id="aircraft_code" name="aircraft_code">
        @error('aircraft_code')
        <div>{{ $message }}</div>
        @enderror
        <button type="submit">Create</button>
    </form>
