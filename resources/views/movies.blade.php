@extends ('layouts.app')

@section('title')
Movies
@endsection

@section('content')

     

        <div class="container">
            <div class="row row-cols-4 align-items-center">
            @forelse($movies as $movie)
                <div class="col p-4">
                    <div class="card">
                        <img src="{{asset('/img/' . $movie->id . '.jpeg')}}" class="card-img-top" alt="{{$movie->title}}">
                        <div class="card-body">
                            <h3>{{$movie->title}}</h3>
                            <h4>({{$movie->original_title}})</h4>
                            <p>Lingua: {{$movie->nationality}}</p>
                            <p>Vote: {{$movie->vote}}</p>
                            <p>Date: {{$movie->date}}</p>
                        </div>
                    </div>
                </div>
            @empty
            <h2>nessun film ne database</h2>
            @endforelse
            </div>
        </div>

    

    
@endsection