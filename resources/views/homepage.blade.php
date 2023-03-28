

@extends('layouts.app')

@section('paragrafo')

<section class="black">

    <div class="container py-5">
        
        <div class="row row-cols-6">
            @foreach ($comics as $comic)
            <div class="col p-3">
                
                <img src="https://picsum.photos/300/500" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title my-3">{{ $comic['title'] }}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection


 