@extends ('layouts.app')

@section('title')
Movies
@endsection

@section('content')

     

        <div class="container">
            <div class="row row-cols-3 align-items-center">
            @forelse($movies as $movie)
                <div class="col p-4">
                    <div class="card">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="{{$movie->title}}">
                        <div class="card-body">
                            <h3>{{$movie->title}}</h3>
                            <h4>{{$movie->original_title}} {{$movie->date}}</h4>
                            <span>Lingua: {{$movie->nationality}} Vote: {{$movie->vote}} Date: {{$movie->date}}</span>
                        </div>
                    </div>
                </div>
            @empty
            <h2>nessun film ne database</h2>
            @endforelse
            </div>
        </div>

    

    
@endsection