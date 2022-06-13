@extends ('layouts.app')

@section('title')
Movies
@endsection

@section('content')

     

        <div class="container">
            <div class="row py-5 row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 align-items-center">
            @forelse($movies as $movie)
                <div class="col py-4">
                    <div class="card shadow">
                        <div class="div img_card">
                        <img class="img-fluid rounded-top" src="{{asset('/img/' . $movie->id . '.jpeg')}}" class="card-img-top" alt="{{$movie->title}}">
                        </div>
                        <div class="card-body">
                            <h4>{{$movie->title}}</h4>
                            <h5>({{$movie->original_title}})</h5>
                            <p>Lingua: {{$movie->nationality}}</p>
                            <p>Vote: {{$movie->vote}}</p>
                            <p>Date: {{date('d-m-Y', strtotime($movie->date))}}</p>
                        </div>
                    </div>
                </div>
            @empty
            <h2>nessun film ne database</h2>
            @endforelse
            </div>
        </div>

    

    
@endsection