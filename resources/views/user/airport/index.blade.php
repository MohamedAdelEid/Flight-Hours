
    <h1>Airport List</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <ul>
        @foreach($airports as $airport)
            <li>{{ $airport->airport_name }} - <a href="{{ route('airport.edit', $airport) }}">Edit</a> - <a href="{{ route('airport.show', $airport) }}">View</a>
                <form action="{{ route('airport.destroy', $airport) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

