@extends ('layouts.app')

@section('title')
Movies
@endsection

@section('content')

    @forelse($movies as $movie) 

        <ul>
            <li>
                {{$movie->title}}
            </li>
        </ul>

    @empty

    <h2>nessun film ne database</h2>

    @endforelse

@endsection