@extends ( "layouts.app" )

@section ( "title-page" )
    Laravel Model Controller
@endsection

@section ( "content" )

<div class="row">
            @foreach( $allMovies as $elem )
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="" alt="" srcset="">
                        <div class="card-body text-center">
                        <h2 class="mt-2">{{ $elem["title"] }}</h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



@endsection